<?php


require_once("../conn/dbconn.php");
$query2 = 'SELECT * FROM addcard';
$result2 = $conn->query($query2);


if ($result2->num_rows > 0){
  while ($row2 = $result2->fetch_assoc()) {

        $pos = $row2['product_code'];

        $sql = "INSERT INTO purchese_info (product_code) VALUE ('".$pos."')";
        $res = $conn->query($sql);

        if ($res === TRUE){
                  
            // echo "<script>alert('New record created successfully');
            // window.location.href=' ./Addproduct.php';
            // </script>";
            $del = "DELETE FROM addcard";
            $re = $conn->query($del);

            if ($re === TRUE){

             echo "<script>alert('New record created successfully');
            window.location.href=' ../Additems.php';
            </script>";
            }
            
          } 
          else
           {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
  }}

            


?>