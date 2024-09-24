<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
  <title>AUE</title>
</head>


<!-- <link rel="stylesheet" href="./Addproduct"> -->

<?php
require_once("./navbar/nav.php");
?>

<style>
  .select2-no-search {
    cursor: pointer;
  }
</style>
<br><br>


<h5 style="margin-left: 9.9cm;"><i class="typcn typcn-chart-area-outline"></i> / <a href="./index.php">Dashboard</a> /Add items</h5>
<br><br>
<style>
  .box {
    margin-left: 9.9cm;
    margin-top: 2cm;
    /* background-color: red; */
    width: 5cm;
    /* display: flex; */
  }

  .form {
    display: grid;
    /* grid: 8px / auto auto auto auto; */
    /* background-color: blue; */
    grid-template-columns: repeat(4, 1fr);
    gap: 50px;
    /* max-width: 50px; */
  }

  .mg-b-10 {}
</style>



<!-- **************************************************************************************************************************** -->
<div class="box">
  <form action="./additeminsert.php" method="post" enctype="multipart/form-data" id="form">
    <div class="form">
      <!-- **** -->
      <div>
        <p class="mg-b-10">Product Type *</p>
        <select class="form-control select2-no-search" name="producttype" style="width: 8.2cm;" required>
          <option label="Choose one"></option>
          <option value="Service">Service</option>
          <option value="selling">selling</option>
          <option value="Raw">Raw Matrial</option>
        </select>
      </div><!-- col-4 -->
      <!-- ***** -->

      <div>
        <p class="mg-b-10">Product Name *</p>
        <input class="form-control" placeholder="Product Name" type="text" name="productname" required>
      </div><!-- col -->
      <!-- ********* -->
      <div class="">
        <p class="mg-b-10">Product Code *</p>
        <input class="form-control" placeholder="Product Code" type="text" name="productcode" style="width: 8.2cm;" required>
      </div><!-- col -->
      <!-- *************** -->
      <div class="">
        <p class="mg-b-10">Weight (kg)</p>
        <input class="form-control" placeholder="Enter Weight" type="text" name="kg" style="width: 8.2cm;">
      </div><!-- col -->
      <!-- ************ -->

      <div>
        <p class="mg-b-10">Product Category *</p>
        <select class="form-control select2-no-search" name="productcategory" style="width: 8.2cm;" required>
          <option label="Choose one"></option>
          <option value="food">food</option>
          <option value="packing food">packing food</option>
          <option value="soap">soap</option>
          <option value="oil">oil</option>
          <option value="Software">Software</option>
          <option value="Service">Service</option>
          <option value="Raw">Raw Matrial</option>
        </select>
      </div><!-- col-4 -->
      <!-- ************************************* -->

      <div>
        <p class="mg-b-10">Purchese Price * &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 &#160 <b id="gap"></b></p>
        <input class="form-control" id="purcheseprice" placeholder="Purchese Price" type="text" name="purcheseprice" style="width: 8.2cm;" required>
      </div><!-- col -->
      <!-- ********************************* -->
      <div class="">
        <p class="mg-b-10">Product Price *</p>
        <input class="form-control" placeholder="Product Price " type="text" id="productprice" name="productprice" style="width: 8.2cm;" required>
      </div><!-- col -->
      <!-- ************************************* -->
      <div class="">
        <p class="mg-b-10">MRP Rate *</p>
        <input class="form-control" placeholder="MRP Rate " type="number" name="MRP" style="width: 8.2cm;" required>
      </div>
      <!-- ******************************************* -->
      <div class="custom-file">

        <input type="file" class="custom-file-input" name="uploadfile" id="customFile">
        <label class="custom-file-label" for="customFile" style="width: 6cm;">Uplode Image</label>
      </div>
      <!-- **************************************** -->
      <div class="">
        <p class="mg-b-10">IGST % </p>
        <input class="form-control" placeholder="IGST %  " id="textbox2" type="number" name="igst" style="width: 8.2cm;">
      </div><!-- col -->
      <!-- *************************************************** -->
      <div class=" ">
        <p class="mg-b-10">CESS % </p>
        <input class="form-control " placeholder="CESS %  " id="textbox2" type="number" name="cess" style="width: 8.2cm;">
      </div><!-- col -->
      <!-- ******************************************************** -->
      <div class="">
        <p class="mg-b-10">GST Rate % </p>
        <input class="form-control" placeholder="GST Rate %  " id="textbox1" type="number" name="GSTrate" style="width: 8.2cm;">
      </div><!-- col -->
      <!-- ************************************************************* -->
      <!-- <div class=""  >
          <p class="mg-b-10">Product Information </p>
          <textarea rows="3" class="form-control mg-t-20" name="proinfo" placeholder="Product Information" style="width: 15cm;" ></textarea>
      </div> -->
      <!-- ************************************************************************** -->
      <!-- <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-block" name="submit" style="width: 5cm;"  data-toggle="modal" data-target="#exampleModal" >Submit</button></div> -->


    </div>
    <div class="">
      <p class="mg-b-10">Product Information </p>
      <textarea rows="3" class="form-control mg-t-20" name="proinfo" placeholder="Product Information" style="width: 15cm;"></textarea>
    </div>
    <br><br>
    <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-block" name="submit" style="width: 5cm;" data-toggle="modal" data-target="#exampleModal">Submit</button></div>


  </form>


</div>
<!-- **************************************************************************************************************************** -->
<script>
  $(document).ready(function() {
    $('#textbox1').on('input', function() {
      if ($(this).val().length > 0) {
        $('#textbox2').prop('disabled', true);
      } else {
        $('#textbox2').prop('disabled', false);
      }
    });
    $('#textbox2').on('input', function() {
      if ($(this).val().length > 0) {
        $('#textbox1').prop('disabled', true);
      } else {
        $('#textbox1').prop('disabled', false);
      }
    });
  });
</script>

</body>

</html>
<style>
  body {
    overflow-x: hidden;
  }
</style>


<style>
  #gap {
    background-color: greenyellow;

  }
</style>


<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    // Get the input elements and the gap display element
    const number1Input = document.getElementById('purcheseprice');
    const number2Input = document.getElementById('productprice');
    const gapDisplay = document.getElementById('gap');

    // Function to calculate and display the gap
    function calculateGap() {
      // Get the values of the input elements
      const number1 = parseFloat(number1Input.value);
      const number2 = parseFloat(number2Input.value);

      // Calculate the gap
      const gap = Math.abs(number1 - number2);

      // Display the gap
      gapDisplay.textContent = isNaN(gap) ? '0' : "+" + gap;
    }

    // Add event listeners to the input elements
    number1Input.addEventListener('input', calculateGap);
    number2Input.addEventListener('input', calculateGap);
  });
</script>