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
    <?php require_once("./navbar/nav.php"); ?>

    <br><br>
<h5 style="margin-left: 9.9cm;" ><i class="typcn typcn-chart-area-outline"></i> 
 / <a href="./index.php">Dashboard</a>  / My Profile</h5>
<style>
    body{
        overflow: hidden;
    }
    .box{
        margin-left: 9.9cm;
        margin-top: 2cm;
    }

    .display{
        display: flex;
        margin: 6cm;
        margin-top: 2cm;
    }
    .pho{
        /* background-color: red; */
        width: 50%;
        height: 15cm;
    }
    .form{
        background-color: blue;
        width: 100%;
        height: 5cm;
    }
    .img{
        width: 7cm;
        margin: 1cm;
        position: relative;
        left: 2cm;
        border-radius: 20px;
    }
    .file , .sub{
        position: relative;
        left: 3cm;
    }
    .sub{
        background-color: green;
        color: white;
        font-family: Arial black;
        padding: 0.3cm;
        width: 7cm;
        border: 0px solid;
        border-radius: 10px;
    }
    .sub:hover{
        background-color: blue;

    }
</style>



    <div class="display" >
        <div class="pho" >
                    <img src="./image/AUE.png" alt="" class="img" >
                    <br>
                    <input type="file" class="file" >
                        <br><br>
                    <input type="submit" class="sub" placeholder="Uplode" value="Uplode" >
        </div>
        <div class="form" >

        </div>
    </div>

  </body>
  </html>