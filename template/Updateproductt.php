<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
    <title>AUE</title>

    <!-- <title>Document</title> -->
</head>

  <style>
    body{
      overflow-x: hidden;
    }
  </style>
  <!-- <link rel="stylesheet" href="./Addproduct"> -->
  
  <?php
            // require_once("/wamp64/www/project/template/nav.php");
            require_once("./navbar/nav.php");

            // require_once("/wamp64/www/project/conn/dbconn.php");
            

           
            $pro_id = $_POST['valueid'];

            echo''.$pro_id.'';

            $sql = "SELECT * FROM product WHERE id = $pro_id";
$result = $conn->query($sql);
$i =1;
if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {
    // echo  "<br>".$row["product_name"]."<br>";
 
 ?>


    <br><br>
<h5 style="margin-left: 9.9cm;" ><i class="typcn typcn-chart-area-outline"></i> / Dashboard /Add items</h5>
    <br><br>
    <style>
         .box{
        margin-left: 9.9cm;
        margin-top: 2cm;
    }
    </style>
    <div class="box">
      <form action="./updateproduct.php" method="post"  >
        
      
    <!-- <div class="col-lg-4"  > -->
        <div style="display: flex;" >
            <div>
              <p class="mg-b-10">Product Type *</p>
              <select class="form-control select2-no-search"  name="producttype" style="width: 8.2cm;"  required >
                <option value="<?php echo $row['product_type']; ?>"  ><?php echo $row['product_type']; ?></option>
                <option value="Service">Service</option>
                <option value="selling">selling</option>
              </select>
            </div><!-- col-4 -->
            <!-- </div> -->


            <div style="display: flex;" >
            <!-- <div class="row row-sm"> -->
            <div class="col-lg"  >
            <p class="mg-b-10">Product Name *</p>
              <input class="form-control" placeholder="Product Name" type="text" name="productname" value="<?php  echo  $row["product_name"]; ?>"  style="width: 8.2cm;" required >
            </div><!-- col -->
            <div class="col-lg"  >
            <p class="mg-b-10">Product Code *</p>
              <p class="form-control" placeholder="Product Code" type="text"  style="width: 8.2cm;"  ><?php echo $row['product_code']; ?></p>
            </div><!-- col -->
            <div class="col-lg"  >
            <p class="mg-b-10">Weight (kg)</p>
              <input class="form-control" placeholder="Enter Weight" type="text" name="kg" value="<?php echo $row['kg']; ?>" style="width: 8.2cm;"  >
            </div><!-- col -->
            
            </div>
         

            <!-- <div class="col-lg" >
            <p class="mg-b-10">Single Select</p>
              <input class="form-control" placeholder="Input box" type="text" style="width: 8.2cm;">
            </div>col -->
        </div><br><br>
        <div style="display: flex;">
        <div  >
              <p class="mg-b-10">Product Category *</p>
              <select class="form-control select2-no-search" name="productcategory" style="width: 8.2cm;" required >
                <option value="<?php echo $row['product_category']; ?>"><?php echo $row['product_category']; ?></option>
                <option value="food">food</option>
                <option value="packing food">packing food</option>
                <option value="soap">soap</option>
                <option value="oil">oil</option>
                <option value="Software">Software</option>
                <option value="Service">Service</option>
              </select>
            </div><!-- col-4 -->
          <!-- </div>row -->
          <div class="col-lg"  >
            <p class="mg-b-10">Purchese Price *</p>
              <input class="form-control" placeholder="Purchese Price" type="text" value="<?php echo $row['purchese_price']; ?>" name="purcheseprice" style="width: 8.2cm;" required >
            </div><!-- col -->
            
            <div class="col-lg" style="position: relative; right: 2.8cm; " >
            <p class="mg-b-10">Product Price *</p>
              <input class="form-control" placeholder="Product Price " type="text" value="<?php echo $row['product_price']; ?>" name="productprice" style="width: 8.2cm;" required >
            </div><!-- col -->

            <div>
              
            <div class="col-lg" style="position: relative; right: 5.7cm; " >
            <p class="mg-b-10">GST Rate % </p>
              <input class="form-control" placeholder="GST Rate %  " value="<?php echo $row['gstret']; ?>" type="text" name="GSTrate" style="width: 8.2cm;"  >
            </div><!-- col -->
            </div>
            
          </div><br><br>
          <div class="row row-sm">
            <div class="col-sm-7 col-md-6 col-lg-4">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="imguplode" id="customFile">
                <label class="custom-file-label" for="customFile" style="width: 6cm;" >Uplode Image</label>
              </div>
            </div><!-- col -->
          </div><!-- row -->

          <br><br>
          <div>
          <div class="col-lg" style="position: relative; right: 0.5cm; " >
          <p class="mg-b-10">Product Information </p>
          <textarea rows="3" class="form-control mg-t-20" name="proinfo"  placeholder="Product Information" style="width: 15cm;" ><?php echo $row['product_info']; ?></textarea>
      </div>
          <br><br><br>
      <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-block" name="submit" style="width: 5cm;"  data-toggle="modal" data-target="#exampleModal" value="<?php echo $pro_id ; ?>" >Update</button></div>

      </div></form></div>
          
      <?php
 }}

?>
    <!-- </div> -->
</body>
</html>