<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

<?php
    error_reporting(0);

?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>aue</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="../lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
    <link href="../lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
    <link href="../lib/pickerjs/picker.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">

  </head>
  <body>

   <?php

    require_once("./navbar/nav.php");

    $refcode = $_POST['seepur'];
    // echo $refcode

?>

         
    <style>
        .table-responsive{
            width:65% ;
            margin-left: 10cm;
            margin-top: 1cm;
        }
        body{
          overflow-x: hidden;
        }
    </style>

<!-- <div class="az-content-label mg-b-5">Striped Rows</div> -->
<!-- <p class="mg-b-20">Add zebra-striping to any table row.</p> -->
 <br><br>
<h5 style="margin-left: 9.9cm;" ><i class="typcn typcn-chart-area-outline"></i> 
 / <a href="./index.php">Dashboard</a>  /Add Purchese</h5>
<style>
    .box{
        margin-left: 9.9cm;
        margin-top: 2cm;
    }
</style>



<form action="./transfer/datatransfer.php" method="post" >
  

<?php  

$sql = "SELECT * FROM sup_in WHERE refercode = '".$refcode."' ";
$res = $conn->query($sql);
// $i =1;
if ($res->num_rows > 0) {
  // output data of each row

  while($row = $res->fetch_assoc()) {
    // echo  $row["product_name"]."<br>";
?>

<div class="box">



            <div style="display: flex;" >
                       <style>
                       .Supplier{
                         width: 7cm;
                       }
                     </style>



                       
          
                     <div class="row row-sm mg-b-20">
                       <div class="col-lg-4">
                       <p class="mg-b-10">Supplier *</p>
                       <input type="" class="form-control select2 Supplier"  placeholder="<?php echo $row['company_name']; ?>" id="textbox3" name="supname" required >
                    
                       </div><!-- col -->
                    </div>

                    <div style="width: 20cm;  " >


                    </div>
            </div>
<br><br>

     <div style="display: grid; grid-template-columns:auto auto auto auto ; gap: 1cm;  " >
              
     

          <div class="wd-250 mg-b-20">
          <p class="mg-b-10">Date </p>

            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                </div>
              </div>
              <!-- <input type="text" value="January 20, 2019 09:00"  class="form-control"> -->
              <input type="text" class="form-control " name="date" id="textbox2" placeholder="<?php echo $row['date']; ?>" >

            </div>
          </div>
    


          <div class="col-lg" style="position: relative; right: 3.5cm; " >
          <p class="mg-b-10">Reference No </p>

              <input class="form-control " style="width: 6cm; " placeholder="<?php echo $row['refercode']; ?>" id="textbox1"  name="cess"  type="text" required >
            </div><!-- col -->


            <script>
        $(document).ready(function() {  
          $('#textbox2').prop('disabled', true);
          $('#textbox1').prop('disabled', true);
          $('#textbox3').prop('disabled', true);
          // $('#textbox4').prop('disabled', true);



        });
    </script>
      


       


            <div style="position: relative; right: 7.8cm; " >
              <p class="mg-b-10">Status *</p>
              <select class="form-control select2-no-search"  name="Status" style="width: 5cm; cursor: pointer; " required >
                
                <option label="<?php echo $row['payment']; ?>"></option>
                <option value="Pending">Pending</option>
                <option value="Pay">Pay</option>
              </select>
            </div><!-- col-4 -->


            <div class="col-lg" style="position: relative; right: 0.5cm; " >
       
              <style>
                .cllsub{
                  width: 6cm;
                  height: 1.5cm;
                  border-radius: 20px;
                  position: relative;
                  left: 10cm;
                  /* top: 3.2cm; */
                  bottom: 6.5cm;
                  z-index: +2;
                  font-family: Arial black;
                }
                .fa-check-circle{
                  font-size: 0.5cm;
                }
              </style>
            </div><!-- col -->
                                  <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-block cllsub" name="submitform" ><i class="far fa-check-circle"></i> &#160 &#160 Submit Purchese </button></div>
     </div>
                                 
     <?php  }}  ?>
</form>

<br><br><br>






      
<style>
  .table-responsive{
    position: relative;
    right: 17cm;
    bottom: 4cm;
    width: 45cm;
  }
  .th{
    font-family: Arial black;
    background-color: aquamarine;
    /* height: 20?px; */
  }
  


</style>
<div class="table-responsive">
<hr class="mg-y-30">
  <table class="table table-striped mg-b-0">
    <thead>
      <tr>
        <th class="th" >ID</th>
        <th class="th" >Product (Name)</th>
        <th class="th" >Product (Code) </th>
        <th class="th" >Netunit Cost</th>
        <th class="th" >Quantity</th>
        <!-- <th class="th" >Discound</th> -->
        <th class="th" >CGST %</th>
        <th class="th" >CGST Amount</th>
        <th class="th" >SGST %</th>
        <th class="th" >SGST Amount</th>
        <th class="th" >IGST %</th>
        <th class="th" >IGST Amount</th>
        <th class="th" >CESS %</th>
        <th class="th" >CESS Amount</th>
        <th class="th" >Sub Total (INR)</th>
        <th class="th" >Action</th>
      </tr>
    </thead>



    <tbody>

    <?php 
    
        
    $query1 = "SELECT * FROM purchese_info WHERE inv_no = '".$refcode."' ";
    $result1 = $conn->query($query1);

    if ($result1 ->num_rows > 0) {
      $i=1;
        while ($row1 = $result1 -> fetch_assoc()) {
         
    
            
    ?>
      <tr>
        <th scope="row"><?php echo $i++; ?></th>
        <td><?php echo $row1['product_name'];  ?></td>
        <td><?php echo $row1['product_code'];  ?></td>
        <td><?php echo $row1['net_unit'];  ?></td>
        <td><?php echo $row1['quantity'];  ?></td>
        <td><?php echo $row1['cgst'];  ?></td>
        <td><?php echo $row1['cgst_amount'];  ?></td>
        <td><?php echo $row1['sgst'];  ?></td>
        <td><?php echo $row1['sgst_amount'];  ?></td>
        <td><?php echo $row1['igst'];  ?></td>
        <td><?php echo $row1['igst_amout'];  ?></td>
        <td><?php echo $row1['cess'];  ?></td>
        <td><?php echo $row1['cess_amount'];  ?></td>
        <td><?php echo $row1['quantity']*$row1['net_unit'];  ?></td>

     
        <td>

        </td>
      </tr>
      <?php  }} ?>
    </tbody>
   
    <thead>
      <tr>
        <th class="th" >TOTAL</th>
        <th class="th" ></th>
        <th class="th" > </th>
        <th class="th" >Netunit </th>
        <th class="th" >Quantity</th>
        <!-- <th class="th" >Discound</th> -->
        <th class="th" >CGST %</th>
        <th class="th" >CGST Amount</th>
        <th class="th" >SGST %</th>
        <th class="th" >SGST Amount</th>
        <th class="th" >IGST %</th>
        <th class="th" >IGST Amount</th>
        <th class="th" >CESS %</th>
        <th class="th" >CESS Amount</th>
        <?php  $sql5 = "SELECT SUM((net_unit *quantity) ) AS total_sum FROM purchese_info WHERE inv_no = '".$refcode."'";
          $resultl = $conn->query($sql5);
          
          // Check if the query was successful
          if ($resultl->num_rows > 0) {
              // Fetch the result row
              $rowl = $resultl->fetch_assoc(); ?>
        <th class="th" style="font-size: 0.4cm;" ><?php 
         
              echo  $rowl['total_sum'];
         
        ?></th><?php }?>
        <th class="th">action</th>
      </tr>
    </thead>
  </table>
</div><!-- bd -->    
       

</div>
     
          <!-- <div class="ht-40"></div> -->




    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script src="../lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="../lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
    <script src="../lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
    <script src="../lib/pickerjs/picker.min.js"></script>
    <!-- <script src="../js/jquery.cookie.js" type="text/javascript"></script> -->

    <!-- <script src="../js/azia.js"></script> -->
    <script>
      // Additional code for adding placeholder in search box of select2
      (function($) {
        var Defaults = $.fn.select2.amd.require('select2/defaults');

        $.extend(Defaults.defaults, {
          searchInputPlaceholder: ''
        });

        var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

        var _renderSearchDropdown = SearchDropdown.prototype.render;

        SearchDropdown.prototype.render = function(decorated) {

          // invoke parent method
          var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

          this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

          return $rendered;
        };

      })(window.jQuery);
    </script>
    <script>
      $(function(){
        'use strict'

        // Toggle Switches
        $('.az-toggle').on('click', function(){
          $(this).toggleClass('on');
        })

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
        $('#ssnMask').mask('999-99-9999');

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

        // AmazeUI Datetimepicker
        $('#datetimepicker').datetimepicker({
          format: 'yyyy-mm-dd hh:ii',
          autoclose: true
        });

        // jQuery Simple DateTimePicker
        $('#datetimepicker2').appendDtpicker({
          closeOnSelected: true,
          onInit: function(handler) {
            var picker = handler.getPicker();
            $(picker).addClass('az-datetimepicker');
          }
        });

        new Picker(document.querySelector('#datetimepicker3'), {
          headers: true,
          format: 'YYYY - MMMM - DD ', 
          text: {
            title: 'Pick a Date and Time',
            year: 'Year',
            month: 'Month',
            day: 'Day'
          
          },
        });


        $(document).ready(function(){
          $('.select2').select2({
            placeholder: 'Choose one',
            searchInputPlaceholder: 'Search'
          });

          $('.select2').select2({
            placeholder: 'Choose one',
            searchInputPlaceholder: 'Search'
          });

          $('.select2-no-search').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Choose one'
          });
        });

        $('.rangeslider1').ionRangeSlider();

        $('.rangeslider2').ionRangeSlider({
            min: 100,
            max: 1000,
            from: 550
        });

        $('.rangeslider3').ionRangeSlider({
            type: 'double',
            grid: true,
            min: 0,
            max: 1000,
            from: 200,
            to: 800,
            prefix: '$'
        });

        $('.rangeslider4').ionRangeSlider({
            type: 'double',
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500,
            step: 250
        });

      });
    </script>
  </body>
</html>
