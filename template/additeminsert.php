
<?php

require_once("./navbar/nav.php");
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
$producttype = $_POST["producttype"];
$productname = $_POST["productname"];
$procuctcode = $_POST["productcode"];
$kg = $_POST["kg"];
$productcategory = $_POST['productcategory'];
$purcheseprice = $_POST['purcheseprice'];
$productprice = $_POST['productprice'];
$gst = $_POST['GSTrate'];
// $img = $_POST['uploadfile'];

$productinfo = $_POST['proinfo'];
$CESS = $_POST['cess'];
$igst = $_POST['igst'];

$MRP = $_POST['MRP'];
// $img = $_FILES["imguplode"]["name"];
// $tempname = $_FILES["imguplode"]["tmp_name"];
// $folder = "./image/" . $filename;
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "./image/" . $filename;




$query = "SELECT * FROM product WHERE product_code = $procuctcode ";

$result = $conn->query($query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {

       echo "<script>alert('This item is already available');
       window.location.href=' ./Addproduct.php';
       </script>";
    //    header("location: Addproduct.php");
    // readdir('/Addproduct.php');
        //   header("location: ./Addproduct.php");
          // reset($procuctcode);
       
        
    } else {
        
      
   
          
         $sql = "INSERT INTO product (product_type , product_name , product_code  , product_category , purchese_price , product_price , gstret , kg , img , product_info , cess , igst, MRP )
                             VALUES ('$producttype','$productname','$procuctcode' , '$productcategory' , '$purcheseprice', '$productprice' , '$gst', '$kg' , '$filename' , '$productinfo', '$CESS' , '$igst' ,'$MRP')";
          // , product_code , product_type , product_category , purchese_price , product_price , gstret , kg , img , product_info 

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
    mysqli_query($conn, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        // echo "<h3>&nbsp; Image uploaded successfully!</h3>";
            echo "<script>alert('New record created successfully');
                  window.location.href='./Addproduct.php';
                  </script>";
    } else {
        // echo "<h3>&nbsp; Failed to upload image!</h3>";
        echo "<script>alert('New record created successfully');
        window.location.href='./Addproduct.php';
        </script>";
    }
    }
} 
 
 }

 ?>  

