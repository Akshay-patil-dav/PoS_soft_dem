<?php

    // require_once("/wamp64/www/project/conn/dbconn.php");
    require_once("./navbar/nav.php");
    require_once("./conn/dbconn.php");


    $procode = $_GET['id']; 
    $del = "DELETE FROM product WHERE id= '$procode' ";

    if ($conn->query($del) === TRUE) {
    //   echo "Record deleted successfully";
      echo "<script>alert('Record deleted successfully');
                  window.location.href=' ./productlist.php';
                  </script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    // echo "<br><br><h1>".$procode."</h1>Hello";
?>