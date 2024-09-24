<?php
require_once("./navbar/nav.php");
require_once("./conn/dbconn.php");


//     $pro_code = $_POST['add'];
//     $qui = $_POST['qui'];

//   $user = $_SESSION["username"]; 

//   echo $user;


//     // echo $pro_code;
//     $sql = "SELECT * FROM product WHERE product_code = '$pro_code' ";

//     $result1 = $conn->query($sql);


//     if ($result1->num_rows > 0){
//         while ($row = $result1->fetch_assoc()) {
//                 echo $row['product_name'];

//         }
//     }

//     echo $qui;


?>

<style>
    .az-header {
        display: none;
    }
</style>


<?php


if (isset($_POST['add']) == true) {

    // $product_name = $_POST['productname'];
    // $qui = $_POST['quantity'];
    // $quantity = floatval($qui);


    $pro_code = $_POST['add'];
    $qui = $_POST['qui'];

    $user = $_SESSION["username"];

    $quichk = "SELECT * FROM product WHERE product_code = " . $pro_code . "";
    $quires = $conn->query($quichk);


    if ($quires->num_rows > 0) {


        while ($quirow = $quires->fetch_assoc()) {

            if ($qui >= $quirow['quentity']) {

                echo "<script>
            window.location.href=' ./p.php';
            </script>";
            } else {


                $up = "UPDATE product SET quentity  =  quentity - '" . $qui . "'  WHERE product_code = '" . $pro_code . "' ";
                $reup = $conn->query($up);

                if ($reup == true) {
                    $query = "SELECT *  FROM users  WHERE username = '" . $user . "'";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {


                        while ($row = $result->fetch_assoc()) {




                            $sql = "INSERT INTO `sales`( `product_id`, `quantity`, `users`) VALUES
         (" . $pro_code . ",'" . $qui . "','" . $row["code"] . "')";
                            $stmt = $conn->query($sql);


                            if ($stmt == true) {
                                // echo "Product added to cart successfully.";
                                echo "<script>
            window.location.href=' ./p.php';
            </script>";
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            $stmt->close();
                        }
                    }

                    // }
                }
            }
        }
    }
}
?>