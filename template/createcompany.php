<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
    <title>AUE</title>
</head>

  <style>
    body{
      overflow-x: hidden;
    }
   
  </style>
  <!-- <link rel="stylesheet" href="./Addproduct"> -->
  
  <?php
            require_once("./navbar/nav.php");
 ?>


    <br><br>
<h5 style="margin-left: 9.9cm;" ><i class="typcn typcn-chart-area-outline"></i> / <a href="./index.php">Dashboard</a>  / Company Update</h5>
    <br><br>
    <style>
         .box{
        margin-left: 9.9cm;
        margin-top: 2cm;
    }
    </style>
    <div class="box">
      <form action="#" method="post" enctype="multipart/form-data" >
    <!-- <div class="col-lg-4"  > -->
      <style>
        .select2-no-search{
          cursor: pointer;
        }
      </style>
        <div style="display: flex;" >
         
            <!-- </div> -->


            <div style="display: flex;" >
            <!-- <div class="row row-sm"> -->
            <div class="col-lg"  >
            <p class="mg-b-10">Company Name *</p>
              <input class="form-control" placeholder="Company Name" type="text" name="name" style="width: 8.2cm;" required >
            </div><!-- col -->
            
            <div class="col-lg"  >
              
            <p class="mg-b-10">City *</p>
              <input class="form-control" placeholder="City" type="text" name="City" style="width: 8.2cm;" required >
            </div><!-- col -->
            <div class="col-lg"  >
            <p class="mg-b-10">State *</p>
              <input class="form-control" placeholder="State" type="text" name="State" style="width: 8.2cm;"  >
            </div><!-- col -->
            
            
            </div>
         

            <!-- <div class="col-lg" >
            <p class="mg-b-10">Single Select</p>
              <input class="form-control" placeholder="Input box" type="text" style="width: 8.2cm;">
            </div>col -->
        </div><br><br>
        <div style="display: flex;">
        <div  >
              <p class="mg-b-10">Business Category *</p>
              <input class="form-control" placeholder="Category" type="text" name="Category" style="width: 8.2cm;"  >

            </div><!-- col-4 -->
          <!-- </div>row -->
      
          <div class="col-lg"  >
   
          <style>
            #gap{
              background-color:greenyellow;
              
            }
          </style>

            <p class="mg-b-10">Business location  *</p>
              <input class="form-control" id="purcheseprice"  placeholder="location" type="text" name="location" style="width: 8.2cm;" required >
            </div><!-- col -->
            
            <div class="col-lg" style="position: relative; right: 2.8cm; " >
            <p class="mg-b-10">Country *</p>
              <input class="form-control" placeholder="Country " type="text" id="Country" name="country" style="width: 8.2cm;" required >
            </div><!-- col -->

            <div>
      
              
            <div class="col-lg" style="position: relative; right: 5.8cm; " >
            <p class="mg-b-10">PIN CODE  *</p>
              <input class="form-control" placeholder="PIN CODE  "  type="number" name="PIN" style="width: 8.2cm;" required >
            </div>
            </div>
            
          </div><br><br>
          <div class="row row-sm" style="display: flex;" >
            <div class="col-sm-7 col-md-6 col-lg-4">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="uploadfile" id="customFile">
                <label class="custom-file-label" for="customFile" style="width: 6cm;" >Uplode Image</label>
              </div>
          
            </div><!-- col -->
            <div class="col-lg" style="position: relative; right: 5.2cm; bottom: 0.8cm; z-index: 2; " >
            <p class="mg-b-10">GST No *</p>
              <input class="form-control" placeholder="GST No  "  id="" type="text" name="gst" style="width: 8.2cm;" required >
            </div><!-- col -->
            <div class="col-lg " style="position: relative; right: 5.4cm; bottom: 0.8cm; z-index: 2; " >
            <p class="mg-b-10">1 Phone No * </p>
              <input class="form-control " placeholder="1 Phone No   " id="" type="text" name="1p" style="width: 8.2cm;" required >
            </div><!-- col -->

              <div class="col-lg" style="position: relative; right: 5.8cm; bottom: 0.8cm;  " >
            <p class="mg-b-10">2 Phone No * </p>
              <input class="form-control" placeholder="2 Phone No   " id="" type="text" name="2p" style="width: 8.2cm;" required >
            </div><!-- col -->
          </div><!-- row -->

          <br><br>
          <div>
          <div class="col-lg" style="position: relative; right: 0.5cm; " >
          <p class="mg-b-10">Other Information </p>
          <textarea rows="3" class="form-control mg-t-20" name="info" placeholder="Other Information" style="width: 15cm;" ></textarea>
      </div>
          <br><br><br>
      <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-block" name="submit" style="width: 5cm;"  data-toggle="modal" data-target="#exampleModal" >Submit</button></div>

      </div>
    </form>
</div>
  
    
</body>
</html>



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

    if (move_uploaded_file($tempname, $folder)){
    
                  echo "<script>alert('New record created successfully');
                  window.location.href=' ./createcompany.php';
                  </script>";
    }
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

