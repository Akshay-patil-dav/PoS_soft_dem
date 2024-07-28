<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            require_once('./nav.php');
    ?>
    

    
<?php

require_once("./nav.php");
  // require_once("./conn/dbconn.php");
  // require_once "/wamp64/www/project/conn/dbconn.php";
  // require_once("./conn/dbconn.php");




 ?>  


    <br><br>
<h5 style="margin-left: 9.9cm;" ><i class="typcn typcn-chart-area-outline"></i> 
 / Dashboard / Add Supplier</h5>


 <style>
    body{
        overflow-x: hidden;
    }
    .box{
        margin-left: 9.9cm;
        margin-top: 2cm;
    }
    .width{
        width: 8cm;
    }
</style>
 <div class="box" >
 <form action="./supplireadd.php" method="post" class="needs-validation was-validated"  >
        <div class="row row-sm"  >
              <div class="col-lg-4" style="display: grid; grid-template-columns: auto auto auto ; gap: 1.5cm; " >
                <div class="form-group has-success mg-b-0">
                <p class="mg-b-10">Company Name *</p>
                  <input class="form-control width" placeholder="Company Name" name="Company_Name"  required type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Name *</p>
                  <input class="form-control width" placeholder="Name" name="Name" required type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">GSTIN Number *</p>
                  <input class="form-control width" placeholder="GSTIN Number " name="GSTIN_Number"  required type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">E-mail *</p>
                  <input class="form-control width" placeholder="E-mail " name="Email" required type="email">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Phone Number *</p>
                  <input class="form-control width" placeholder="Phone Number" name="Phone_Number" value="+91-"  required type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Address  *</p>
                  <input class="form-control width" placeholder="Address" name="Address" required type="text">
                </div><!-- form-group -->

                
                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">City *</p>
                  <input class="form-control width" placeholder="City" name="City" required type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">State *</p>
                  <input class="form-control width" placeholder="State" name="State" required type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Postal Code *</p>
                  <input class="form-control width" placeholder="Postal Code" name="Postal_Code"  required type="text">
                </div><!-- form-group -->
                

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Country *</p>
                  <input class="form-control width" placeholder="Postal Code" name="Country"  required type="text">
                </div><!-- form-group -->

                
                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Supplier Custome Field 1 </p>
                  <input class="form-control width" placeholder="Supplier Custome Field 1" name="f1"   type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Supplier Custome Field 2 </p>
                  <input class="form-control width" placeholder="Supplier Custome Field 2" name="f2"   type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Supplier Custome Field 3 </p>
                  <input class="form-control width" placeholder="Supplier Custome Field 3" name="f3"   type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Supplier Custome Field 4 </p>
                  <input class="form-control width" placeholder="Supplier Custome Field 4" name="f4"   type="text">
                </div><!-- form-group -->

                <div class="form-group has-success mg-b-0">
                     <p class="mg-b-10">Supplier Custome Field 5 </p>
                  <input class="form-control width" placeholder="Supplier Custome Field 5" name="f5"   type="text">
                </div><!-- form-group -->


                <style>
                    .btn-az-secondary{
                        width: 7cm;
                        font-size: 20px;
                        font-family: Arial black;
                        border-radius: 20px;
                        margin-top: 1.8cm;
                        /* right: 10cm; */
                    }
                </style>

                <!-- <div class="form-group has-success mg-b-0"> -->
                    
          

              </div><!-- col -->
              
              <div class="row row-xs wd-xl-80p"></div>
                <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-az-secondary btn-block" name="submit" >SUBMIT</button></div>
           </div><!-- form-group -->
           </form>

            </div><!-- row -->
          






            
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
          format: 'MMMM DD, YYYY HH:mm',
          text: {
            title: 'Pick a Date and Time',
            year: 'Year',
            month: 'Month',
            day: 'Day',
            hour: 'Hour',
            minute: 'Minute'
          },
        });


        $(document).ready(function(){
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
 </div>
</body>
</html>