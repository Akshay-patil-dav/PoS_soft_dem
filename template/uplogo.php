
<?php

// require_once("./navbar/nav.php");
// require_once
  require_once("./conn/dbconn.php");
  // require_once "/wamp64/www/project/conn/dbconn.php";
  // require_once("./conn/dbconn.php");


 if(isset($_POST["submit"]))  
 {  
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
$name = $_POST['name'];
$city = $_POST['City'];
$state = $_POST['State'];
$category = $_POST['Category'];
$location = $_POST['location'];
$Country = $_POST['country'];
$PIN = $_POST['PIN'];
// $uploadfile = $_POST['uploadfile'];
$gst = $_POST['gst'];
$p1 = $_POST['1p'];
$p2 = $_POST['2p'];
$bio = $_POST['info'];
// $img = $_FILES["imguplode"]["name"];
// $tempname = $_FILES["imguplode"]["tmp_name"];
// $folder = "./image/" . $filename;

$filename = $_FILES["uploadfile"]["name"];

$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "./logo/" . $filename;




$up = "UPDATE company_create SET name = '".$name."', city = '".$city."' ,state = '".$state."', category = '".$category."' , location = '".$location."' , country = '".$Country."' , pin_code = '".$PIN."' , img = '".$filename."' , gst= '".$gst."', 1p = '".$p1."' , 2p = '".$p2."', bio = '".$bio."'  WHERE id = 1 ";
$reup = $conn -> query($up);

          
if($reup == true){
    
                  echo "<script>alert('New record created successfully');
                  window.location.href=' ./createcompany.php';
                  </script>";
}else{

}
        //  $sql = "INSERT INTO product (product_type , product_name , product_code  , product_category , purchese_price , product_price , gstret , kg , img , product_info , cess , igst, MRP )
        //                      VALUES ('$producttype','$productname','$procuctcode' , '$productcategory' , '$purcheseprice', '$productprice' , '$gst', '$kg' , '$filename' , '$productinfo', '$CESS' , '$igst' ,'$MRP')";
        //   // , product_code , product_type , product_category , purchese_price , product_price , gstret , kg , img , product_info 

// $result = $conn->query($sql);
                // if ($conn->query($sql) === TRUE){
                  
                //   echo "<script>alert('New record created successfully');
                //   window.location.href=' ./Addproduct.php';
                //   </script>";
                  
                // } 
                // else
                //  {
                //   echo "Error: " . $sql . "<br>" . $conn->error;
                // }

                    // Execute query

 }

 ?>  