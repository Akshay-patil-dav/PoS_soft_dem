<?php


require_once("./conn/dbconn.php");
// require_once "/wamp64/www/project/conn/dbconn.php";


$sub = $_POST['submit'];

if (isset($_POST["submit"])) {
  //     //  $productcode = $_POST['productcode'];

  //     $result = "SELECT product_code FROM product WHERE product_code = '2066'";

  //     if ($conn->query($result)){


  // $sql = "INSERT INTO product (product_code	)
  // VALUES ( '2002') 
  // WHERE NOT EXIST(  
  //        SELECT product_code FROM product WHERE product_code = '2002'  
  //       ) LIMIT 1";

  //     $result = $conn->query($sql);
  // if ($result === TRUE){
  //   echo "New record created successfully";
  // } 
  // else
  //  {
  //   echo "Error: " . $sql . "<br>" . $conn->error;
  // }

  //  $result = "SELECT `product_code` FROM `product` WHERE `product_code` = '2002'";


  // echo "no";
  // }else{
  //   echo "yes";
  // }
  //  }  
  $producttype = $_POST["producttype"];
  $productname = $_POST["productname"];
  // $procuctcode = $_POST["productcode"];
  $kg = $_POST["kg"];
  $productcategory = $_POST['productcategory'];
  $purcheseprice = $_POST['purcheseprice'];
  $productprice = $_POST['productprice'];
  $gst = $_POST['GSTrate'];
  $img = $_POST['imguplode'];
  $productinfo = $_POST['proinfo'];

  // $query = "SELECT * FROM product WHERE product_code = $procuctcode ";

  // $result = $conn->query($query);

  // if ($result) {
  //     if (mysqli_num_rows($result) > 0) {

  //        echo "<script>alert('This item is already available');
  //        window.location.href=' ./productlist.php';
  //        </script>";
  //     //    header("location: Addproduct.php");
  //     // readdir('/Addproduct.php');
  //         //   header("location: ./Addproduct.php");
  //           // reset($procuctcode);


  //     } else {




  $sql = "UPDATE raw_product SET   product_type = '$producttype', product_name ='$productname' ,product_category = '$productcategory' ,purchese_price = '$purcheseprice',product_price = '$productprice' ,gstret = '$gst',kg = '$kg' ,img = '$img' ,product_info = '$productinfo'  WHERE id =$sub";
  // , product_code , product_type , product_category , purchese_price , product_price , gstret , kg , img , product_info 

  // $sql = "UPDATE product SET product_type ='$producttype'  WHERE id =$sub";
  // $result = $conn->query($sql);
  if ($conn->query($sql) === TRUE) {

    echo "<script>alert('Record Update successfully');
                  window.location.href=' ./row.php';
                  </script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
// } 

//  }

?>

<!-- <link rel="stylesheet" href="./"> -->