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

    <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
    <title>AUE</title>

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

  <?php  require_once("./navbar/nav.php"); ?>
        <style>
            .az-header{
                display: none;
            }
        </style>
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

<form action="./invoice.php" method="POST" >

    <div class="row">

  
        <div class="col">
        <a href="./p.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
  <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z"/>
</svg>&#160&#160Back</a><br><br>
            <h3 class="title">
                Billing Address
            </h3>

          

     
            <div class=" inputBox">

            <label for="name">
                      Full Name:
                  </label>
        
      <select class="form-control select2" name="full_name" required >
        <option label="Choose one"></option>
        <?php
            require_once("./conn/dbconn.php");
// $tbl="users"; // Table name 
// $sql = "SELECT I.company_name AS company_name, I.name AS sup_name, S.gstin AS gstin, I.email_id AS email , I.phone_no AS phone , I.city AS city, I.state AS state , I.postal_code , I.country , I.addr_comp AS  addr_comp , S.date  AS date, S.payment AS pay FROM suppro_purchese S CROSS JOIN supplier_info I GROUP BY date;";
$sql = "SELECT * FROM supplier_info ";
$result = $conn->query($sql);
// $i =1;
if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {
    // echo  $row["product_name"]."<br>";
    ?>
        <!-- <option value="Local">Local</option> -->
        <option value="<?php echo $row['company_name']; ?>"><?php echo $row['company_name']."".$row['phone_no']; ?></option>
        <?php }} ?>
      </select>
    
    </div>  

            <div class="inputBox">
                <label for="email">
                      Phone No :
                  </label>
                <input type="text" id="email" 
                       placeholder=" Phone No " 
                       value="00-000-000"
                       name="Phonr_No"
                       required>
            </div>

            <div class="inputBox">
                <label for="address">
                      Total Price :
                  </label>

                  
    <?php
  // $view = "SELECT SUM(price_GS) AS TOTAL_VALUE , COUNT(pro_id) AS No_item FROM sell_cal WHERE users = '".$_SESSION["username"]."'  ";
  //  $view = "select id AS pos_id , COUNT(pro_id) AS pro_id , users ,  round(SUM(price_GS*qui),3) AS total FROM sell_demo WHERE users = '".$_SESSION["username"]."' " ;
  $view = "SELECT id , users , COUNT(pro_id) AS coun , qui , price ,GST , SUM((price+((price*gst)/100))*qui) AS total FROM sell_demo WHERE users = '".$_SESSION["username"]."'";

  // $view = " SELECT users , COUNT(pro_id) AS idpro , SUM(qui) AS val , SUM(gst_price) AS TOTAL_VALUE FROM dem2 where users = '".$_SESSION["username"]."' " ;

  $resview = $conn->query($view);

  if ($resview ->num_rows > 0) {
    while ($row_view = $resview -> fetch_assoc()) {


            ?>
                <input type="text" id="purcheseprice" 
                value=" <?php
              
              if($row_view['coun'] == 0){
                  echo 0;
              }else{
              echo  round($row_view['total']);
              }
              
              ?>" name="Total_price"
                       required >

<?php  }} ?>

                       <script>
     document.getElementById("purcheseprice").
     disabled = true;

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
        gapDisplay.textContent = isNaN(gap) ? '0' : ""+gap.toPrecision(10);
    }

    // Add event listeners to the input elements
    number1Input.addEventListener('input', calculateGap);
    number2Input.addEventListener('input', calculateGap);
});

              </script>
              

</script>

            </div>

            <div class="inputBox">
                <label for="city">
                Given Rs :
                  </label>
                <input type="text" id="productprice" 
                       placeholder="Enter city" 
                      name="Given_Rs"
                      
                       required>


                       
            </div>

            <div class="flex">

                <div class="inputBox">
                    <label for="state">
                    Change :
                      </label>
                      <style>
                        #gap{
                            /* border: 1px solid; */
                            /* height: 1cm; */
                            font-size: 0.5cm;
                            /* text-align: center; */
                            color: red;
                        }
                      </style>
                    <p  id="gap" >0</p>

                    
                    
                </div>


            </div>

        </div>
        <div class="col">
            <br><br>
            <h3 class="title">Payment</h3>

          

            <div class="inputBox">
                <label for="cardName">
                      POS / No:
                  </label>

                  <?php
  // $view = "SELECT SUM(price_GS) AS TOTAL_VALUE , COUNT(pro_id) AS No_item FROM sell_cal WHERE users = '".$_SESSION["username"]."'  ";
  //  $view = "select id AS pos_id , COUNT(pro_id) AS pro_id , users ,  round(SUM(price_GS*qui),3) AS total FROM sell_demo WHERE users = '".$_SESSION["username"]."' " ;
  $view = "SELECT id , users , COUNT(pro_id) AS coun , qui , price ,GST , SUM((price+((price*gst)/100))*qui) AS total FROM sell_demo WHERE users = '".$_SESSION["username"]."'";

  // $view = " SELECT users , COUNT(pro_id) AS idpro , SUM(qui) AS val , SUM(gst_price) AS TOTAL_VALUE FROM dem2 where users = '".$_SESSION["username"]."' " ;

  $resview = $conn->query($view);

  if ($resview ->num_rows > 0) {
    while ($row_view = $resview -> fetch_assoc()) {


            ?>
                <input type="text" id="cardName" 
                      placeholder="POS/<?php echo $row_view['id']; ?>"  value="POS<?php echo $row_view['id']; ?>"
                      name="Pos_No"
                       required>
                       <script>
                            document.getElementById("cardName").
                            disabled = true;
                       </script>

                       <?php  }} ?>
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


      <select class="form-control select2" name="Pay" required >

  
        <option label="Choose one"></option>
        <option value="Pending">Pending</option>
        <option value="Cash">Cash</option>
        <option value="Online">Online</option>
        <option value="check"> check</option>
        <option value="paypal">paypal</option>
       
      </select>
    </div>
  
<!-- </div> -->


       

        </div>

    </div>

    <input type="submit" value="Proceed to Checkout" 
           class="submit_btn" name="pospay" >

    
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
