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

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

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

  
        
        <!-- <div class="az-content-body pd-lg-l-40 d-flex flex-column">
  
          <div class="wd-250 mg-b-20" style="display: none;" >
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                </div>
              </div>
              <input type="text" value="January 20, 2019 09:00" id="datetimepicker3" class="form-control">
            </div>
          </div>          
          <div class="row row-sm mg-b-20">
            <div class="col-lg-4">
             
            </div>
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <p class="mg-b-10">Single Select with Search</p>
              <select class="form-control select2">
                <option label="Choose one"></option>
                <option value="Firefox">Firefox</option>
                <option value="Chrome">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera">Opera</option>
                <option value="Internet Explorer">Internet Explorer</option>
              </select>
            </div>
          </div>
        </div> -->


        <div class="container">

<form action="#">

    <div class="row">

        <div class="col">
            <h3 class="title">
                Billing Address
            </h3>

          

            <div class=" inputBox">
            <label for="name">
                      Full Name:
                  </label>
      <select class="form-control select2">
        <option label="Choose one"></option>
        <option value="Firefox">Firefox</option>
        <option value="Chrome">Chrome</option>
        <option value="Safari">Safari</option>
        <option value="Opera">Opera</option>
        <option value="Internet Explorer">Internet Explorer</option>
      </select>
    </div>

            <div class="inputBox">
                <label for="email">
                      Phone No :
                  </label>
                <input type="text" id="email" 
                       placeholder=" Phone No " 
                       value="00-000-000"
                       required>
            </div>

            <div class="inputBox">
                <label for="address">
                      Total Price :
                  </label>
                <input type="text" id="address" 
                       placeholder="Enter address" 
                       value="2"
                       onchange="myFunction(this.value)"
                       required >



                       <script>
function myFunction(val) {
  alert("The input value has changed. The new value is: " + val);
  document.getElementById('state').innerHTML=val;
}

function GIVRS(v1) {
    // myFunction   
  document.getElementById('state').innerHTML=v1+myFunction();

}


</script>

            </div>

            <div class="inputBox">
                <label for="city">
                Given Rs :
                  </label>
                <input type="text" id="city" 
                       placeholder="Enter city" 
                       value=""
                       onchange="GIVRS(this.value)"
                       required>
            </div>

            <div class="flex">

                <div class="inputBox">
                    <label for="state">
                    Change :
                      </label>
                      <style>
                        #state{
                            border: 1px solid;
                            height: 1cm;
                            font-size: 0.5cm;
                            text-align: center;
                        }
                      </style>
                    <p  id="state" >0</p>
                </div>


            </div>

        </div>
        <div class="col">
            <h3 class="title">Payment</h3>

          

            <div class="inputBox">
                <label for="cardName">
                      Name On Card:
                  </label>
                <input type="text" id="cardName" 
                       placeholder="Enter card name" 
                       required>
            </div>

           

            <!-- <div class="inputBox">
                <label for="">Exp Month:</label>
                <select name="" id="">
                    <option value="">Choose month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div> -->



<!-- <div class="az-content-body pd-lg-l-40 d-flex flex-column"> -->
  
  <div class="wd-250 mg-b-20" style="display: none;" >
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
        </div>
      </div>
      <input type="text" value="January 20, 2019 09:00" id="datetimepicker3" class="form-control">
    </div>
  </div>          
 
     
    <!-- </div> -->
    <div class=" inputBox">
    <label for="">Pay :</label>
      <select class="form-control select2">
        <option label="Choose one"></option>
        <option value="Firefox">Firefox</option>
        <option value="Chrome">Chrome</option>
        <option value="Safari">Safari</option>
        <option value="Opera">Opera</option>
        <option value="Internet Explorer">Internet Explorer</option>
      </select>
    </div>
  
<!-- </div> -->


       

        </div>

    </div>

    <input type="submit" value="Proceed to Checkout" 
           class="submit_btn">
</form>

</div>
<script type="text/javascript" src="index.js">
    let cardNumInput = 
    document.querySelector('#cardNum')

cardNumInput.addEventListener('keyup', () => {
    let cNumber = cardNumInput.value
    cNumber = cNumber.replace(/\s/g, "")

    if (Number(cNumber)) {
        cNumber = cNumber.match(/.{1,4}/g)
        cNumber = cNumber.join(" ")
        cardNumInput.value = cNumber
    }
})

</script>
<style>


.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 25px;
    /* background: #d6eef1; */
}

.container form {
    width: 700px;
    padding: 20px;
    background: #fff;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
}

.container form .row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.container form .row .col {
    flex: 1 1 250px;
}

.col .title {
    font-size: 20px;
    color: rgb(237, 55, 23);
    padding-bottom: 5px;
}

.col .inputBox {
    margin: 15px 0;
}

.col .inputBox label {
    margin-bottom: 10px;
    display: block;
}

.col .inputBox input,
.col .inputBox select {
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px 15px;
    font-size: 15px;
}

.col .inputBox input:focus,
.col .inputBox select:focus {
    border: 1px solid #000;
}

.col .flex {
    display: flex;
    gap: 15px;
}

.col .flex .inputBox {
    flex: 1 1;
    margin-top: 5px;
}

.col .inputBox img {
    height: 34px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px #000);
}

.container form .submit_btn {
    width: 100%;
    padding: 12px;
    font-size: 17px;
    background: rgb(1, 143, 34);
    color: #fff;
    margin-top: 5px;
    cursor: pointer;
    letter-spacing: 1px;
}

.container form .submit_btn:hover {
    background: #3d17fb;
}

input::-webkit-inner-spin-button,
input::-webkit-outer-spin-button {
    display: none;
}

</style>



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
  </body>
</html>
