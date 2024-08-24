

<?php

require_once('./conn/dbconn.php');

if(isset($_POST['add']) == true){
    $product_name = $_POST['productname'];
    $qui = $_POST['quantity'];
    $quantity = floatval($qui);

  
    
//  $sql6 = "SELECT * FROM addcard WHERE product_code = ".$product_name.";


$query = 'SELECT *  FROM product  WHERE product_code = '.$product_name.'';
$result = $conn->query($query);

if ($result ->num_rows > 0) {


    while ($row = $result -> fetch_assoc()) {

      $net = $row['gstret']/2;

      // $tex_price = $row['purchese_price']+$
      $cgst_amount = ($row['purchese_price']*($row['gstret']/2))/100;
      $sgst_amount = ($row['purchese_price']*($row['gstret']/2))/100;
      $igst_amount = ($row['purchese_price']*$row['igst'])/100;
      $tex_price = $row['purchese_price']+(($row['purchese_price']*$row['gstret'])/100)+(($row['purchese_price']*$row['cess'])/100)+$igst_amount;
      $cess_amount =   (($row['purchese_price']*$row['cess'])/100);


        $sql = "INSERT INTO `addcard`( `product_code`, `product_name`, `net_unit`, `quantity`, `cgst`, `sgst`, `igst`, `cess`, `cgst_amount`, `sgst_amount`, `igst_amout`, `cess_amount`) VALUES
         (".$row['product_code'].",'".$row['product_name']."','".$tex_price."','".$quantity."','".$net  ."','".$net."','".$row['igst']."','".$row['cess']."','".$cgst_amount."','".$sgst_amount."','".$igst_amount."','".$cess_amount."')";
        $stmt = $conn->prepare($sql);


        if ($stmt->execute()) {
            echo "Product added to cart successfully.";
            echo "<script>
            window.location.href=' ./Additems.php';
            </script>";
            
          
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $stmt->close();
    }
}
        
}

?>
<!-- <link rel="stylesheet" href="./Additems.php"> -->