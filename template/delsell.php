<?php

    // require_once("/wamp64/www/project/conn/dbconn.php");
    // require_once("../navbar/nav.php");
    require_once("./navbar/nav.php");
    require_once("./conn/dbconn.php");


    $sell_id = $_POST['delsell'];


          // $sql= "SELECT quantity  FROM sales WHERE product_id = $sell_id";
        // $sql = "SELECT product_id,SUM(quantity) AS qui  FROM sales WHERE product_id = $sell_id  GROUP BY product_id , Users ";
       $sql = " SELECT users , pro_id , qui FROM sell_demo where pro_id = '$sell_id'";
        // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
        $result2 = $conn->query($sql);

        if ($result2->num_rows > 0){
                
          while ($row2 = $result2->fetch_assoc()) {


            $sql98 = " SELECT users , pro_id , qui FROM sell_demo where pro_id = '$sell_id'";
        // SELECT product_id,SUM(quantity) AS qui , users FROM sales WHERE users = 'Ap2002' GROUP BY product_id  ;
        $result29 = $conn->query($sql98);

            if ($result29->num_rows > 0){
                
              while ($row28 = $result29->fetch_assoc()) {
              // $qui = $row2['qui'];

            $up = "UPDATE product SET quentity  =  '".$row28['qui']."' +'".$row2['qui']."'  WHERE product_code = '".$sell_id."' ";
            $reup = $conn -> query($up);

            if($reup == true){

    // $del = "DELETE FROM sales WHERE product_id= '$sell_id' ";
    $del = "DELETE FROM sales WHERE product_id = '$sell_id' && users ='".$_SESSION["username"]."'";

    if ($conn->query($del) === TRUE) {
      echo "Record deleted successfully";
    //   echo "<script>alert('Record deleted successfully');
    //               window.location.href=' ../p.php';
    //               </script>";

    echo "<script>;
    window.location.href=' p.php';
    </script>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
  }
  }

            }}
}
    // echo "<br><br><h1>".$procode."</h1>Hello";
?>
<!-- <link rel="stylesheet" href="../p"> -->