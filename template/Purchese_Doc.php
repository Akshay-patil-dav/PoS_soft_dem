<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
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

  <!-- <title>AUE</title> -->

  <!-- vendor css -->
  <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
  <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

  <!-- azia CSS -->
  <link rel="stylesheet" href="../css/azia.css">
  <link rel="icon" href="../logo/Untitled design (1).png" type="image/icon type">
  <title>AUE</title>

</head>

<body>
  <?php

  require_once("./navbar/nav.php");
  ?>


  <style>
    .table-responsive {
      width: 65%;
      margin-left: 10cm;
      margin-top: 1cm;
    }

    body {
      overflow-x: hidden;
    }
  </style>

  <!-- <div class="az-content-label mg-b-5">Striped Rows</div> -->
  <!-- <p class="mg-b-20">Add zebra-striping to any table row.</p> -->
  <br><br>
  <h5 style="margin-left: 9.9cm;"><i class="typcn typcn-chart-area-outline"></i>
    / <a href="./index.php">Dashboard</a> / Purchese Doc</h5>
  <style>
    .box {
      margin-left: 9.9cm;
      margin-top: 2cm;
    }
  </style>
  <style>
    #container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0cm;

      /* height: 10%; */
      overflow: auto;
      /* background-color: red; */
      /* max-width: 10px; */

      /* display: grid;
    grid-template-columns: repeat(3, 1fr); */
      /* grid: -500px; */
      /* grid-gap: -500px; */
      /* gap: 0cm; */
      /* background-color: #2196F3; */
      /* padding: 1px; */

    }

    .cardbox {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      width: 70%;
      margin: 1cm;
      height: 7cm;
      text-align: center;
      border-radius: 20px;
      cursor: pointer;
    }

    .cardbox:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    }

    .ex4 {
      /* background-color: lightblue; */
      width: 70%;
      height: 18cm;
      overflow: auto;
      position: relative;
      top: 0.5cm;
      /* background-color: whitesmoke; */
      /* border-radius: 20px; */
      position: relative;
      left: 8cm;

    }

    #searchInput {
      width: 10cm;
      position: relative;
      /* top: 50px; */
      left: 30cm;
      bottom: 0.9cm;
    }
  </style>

  <input class="form-control" type="text" id="searchInput" onkeyup="mypay()" placeholder="Search for names.." title="Type in a name">
  <div class="ex4">
    <div id="container" class="">
      <div class="cardbox">1</div>
      <div class="cardbox">2</div>
      <div class="cardbox">3</div>
      <div class="cardbox">4</div>
      <div class="cardbox">5</div>
      <div class="cardbox">6</div>
      <div class="cardbox">7</div>
      <div class="cardbox">8</div>
      <div class="cardbox">9</div>
      <div class="cardbox">10</div>
      <div class="cardbox">11</div>
      <div class="cardbox">12</div>
      <div class="cardbox">13</div>
      <div class="cardbox">14</div>
      <div class="cardbox">15</div>
      <div class="cardbox">16</div>
    </div>
  </div>

</body>

</html>