<?php


require_once("../conn/dbconn.php");



  if(isset($_POST['submitform']) == true){

    $sup_name = $_POST['supname'];
    $date = $_POST['date'];
    $refcode = $_POST['refcode'];
    $Warehouse = $_POST['Warehouse'];
    $Status = $_POST['Status'];
    $filedoc = $_POST['filedoc'];


    // echo $sup_name;
    // echo $date;
    // echo  $refcode;
    // echo $Warehouse;
    // echo $Status;
    // echo $filedoc;

      $sup_inf = "INSERT INTO suppro_purchese (gstin , payment , date ) VALUE ('".$sup_name."','".$Status."','".$date."') ";
      $ressup = $conn->query($sup_inf);

      if($ressup == true){

                  
              // $query2 = 'SELECT * FROM addcard';
              // $result2 = $conn->query($query2);
                      
    $query2 = 'SELECT product_name,product_code,net_unit,SUM(quantity) AS qui , cgst ,sgst,igst,cess   FROM addcard GROUP BY product_code';
    $result2 = $conn->query($query2);


              if ($result2->num_rows > 0){
                
                while ($row2 = $result2->fetch_assoc()) {
                
                     
                      $pro_name = $row2['product_name'];
                      $pro_code = $row2['product_code'];
                      $price = $row2['net_unit'];
                      $qui = $row2['qui'];
                      $cgst = $row2['cgst'];
                      $sgst = $row2['sgst'];
                      $igst = $row2['igst'];
                      $cess = $row2['cess'];
                      $tot = $qui * $price;


                
                      $sql = "INSERT INTO purchese_info (gstin_no , product_code , product_name , net_unit , quantity , cgst , sgst , igst , cess , pur_date )
                     VALUE ('".$sup_name."','".$pro_code."','".$pro_name."','".$price."','".$qui."','".$cgst."','".$sgst."','".$igst."','".$cess."','".$date."')";
                      $res = $conn->query($sql);
                
                      if ($res === TRUE){

                          // echo "<script>alert('New record created successfully');
                          // window.location.href=' ./Addproduct.php';
                          // </script>";
                          $del = "DELETE FROM addcard";
                          $re = $conn->query($del);
                      
                          if ($re === TRUE){
                          
                          //  echo "<script>alert('New record created successfully');
                          // window.location.href=' ../Additems.php';
                          // </script>";


                          
                          $up = "UPDATE product SET quentity  = '".$qui."' + quentity  WHERE product_code = '".$pro_code."' ";
                          $reup = $conn -> query($up);
              
                          if($reup == true){
                               echo "<script>alert('New record created successfully');
                          window.location.href=' ../Additems.php';
                          </script>";
                          }
                      

                          echo $tot."eldkjlk";

                          }

                        } 
                        else
                         {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                }}
              
              
                    }

  }


// $query2 = 'SELECT * FROM addcard';
// $result2 = $conn->query($query2);


// if ($result2->num_rows > 0){
  // while ($row2 = $result2->fetch_assoc()) {

  //       $pos = $row2['product_code'];

  //       $sql = "INSERT INTO purchese_info (product_code) VALUE ('".$pos."')";
  //       $res = $conn->query($sql);

  //       if ($res === TRUE){
                  
  //           // echo "<script>alert('New record created successfully');
  //           // window.location.href=' ./Addproduct.php';
  //           // </script>";
  //           $del = "DELETE FROM addcard";
  //           $re = $conn->query($del);

  //           if ($re === TRUE){

  //            echo "<script>alert('New record created successfully');
  //           window.location.href=' ../Additems.php';
  //           </script>";
  //           }
            
  //         } 
  //         else
  //          {
  //           echo "Error: " . $sql . "<br>" . $conn->error;
  //         }
  // }}



      
            


?>