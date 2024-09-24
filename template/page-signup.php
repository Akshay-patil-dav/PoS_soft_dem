<?php
// require_once "config.php";
// require_once("/wamp64/www/project/conn/dbconn.php");
require_once("./conn/dbconn.php");

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $nameuser = $_POST['nameuser'];
  $roll = $_POST['roll'];
  $phone = $_POST['phone'];

  // Check if username is empty
  if (empty(trim($_POST["username"]))) {
    $username_err = "Username cannot be blank";
  } else {
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set the value of param username
      $param_username = trim($_POST['username']);

      // Try to execute this statement
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken";
        } else {
          $username = trim($_POST['username']);
        }
      } else {
        echo "Something went wrong";
      }
    }
  }

  mysqli_stmt_close($stmt);


  // Check for password
  if (empty(trim($_POST['password']))) {
    $password_err = "Password cannot be blank";
  } elseif (strlen(trim($_POST['password'])) < 5) {
    $password_err = "Password cannot be less than 5 characters";
  } else {
    $password = trim($_POST['password']);
  }

  // Check for confirm password field



  // If there were no errors, go ahead and insert into the database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
    $sql = "INSERT INTO users (username, password ,namuser ,roll,phone ) VALUES (?, ? , '" . $nameuser . "' , '" . $roll . "','" . $phone . "')";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

      // Set these parameters
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      // Try to execute the query
      if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('New Account created successfully');
          window.location.href=' /project/template/page-signup.php';
          </script>";
      } else {
        echo "Something went wrong... cannot redirect!";
      }
    }
    mysqli_stmt_close($stmt);
  }
  // mysqli_close($conn);
}

?>

<!-- <script></script> -->
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

  <!-- <title>Azia Responsive Bootstrap 4 Dashboard Template</title> -->

  <!-- vendor css -->
  <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
  <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

  <!-- azia CSS -->
  <link rel="stylesheet" href="../css/azia.css">
  <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
  <title>AUE</title>
</head>

<body class="az-body">
  <?php

  require_once("./navbar/nav.php");
  ?>

  <div class="az-signup-wrapper">
    <div class="az-column-signup-left">
      <div>
        <i class="typcn typcn-chart-bar-outline"></i>
        <h1 class="az-logo">Akshay</h1>
        <h5>Responsive Modern Dashboard &amp; Admin Template</h5>
        <p>We are excited to launch our new company and product Azia. After being featured in too many magazines to mention and having created an online stir, we know that BootstrapDash is going to be big. We also hope to win Startup Fictional Business of the Year this year.</p>
        <p>Browse our site and see for yourself why you need Azia.</p>
        <a href="index.html" class="btn btn-outline-indigo">Learn More</a>
      </div>
    </div><!-- az-column-signup-left -->
    <div class="az-column-signup">
      <h1 class="az-logo">A<span>u</span>e</h1>
      <div class="az-signup-header">
        <h2>Get Started</h2>
        <h4>It's free to signup and only takes a minute.</h4>

        <form action="#" method="post">
          <div class="form-group">
            <label>Firstname &amp; Lastname</label>
            <input type="text" class="form-control" name="nameuser" placeholder="Enter your firstname and lastname" required>
          </div><!-- form-group -->
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="username" placeholder="Enter your email" required>
          </div><!-- form-group -->
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your password">required
          </div><!-- form-group -->

          <div class="form-group">
            <label>Phone No.</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter your Phone No." required>
          </div><!-- form-group -->
          <div class="form-group">
            <label>Roll</label>
            <select class="form-control select2-no-search" name="roll" required>
              <option label="Choose one"></option>
              <option value="Admin">Admin</option>
              <option value="Sells">Sells</option>
              <option value="Manage">Manage</option>
              <option value="SuperAdmin">Super Admin</option>
              <!-- <option value="Internet Explorer">Internet Explorer</option> -->
            </select>
          </div><!-- col-4 -->
          <button class="btn btn-az-primary btn-block">Create Account</button>
          <div class="row row-xs">
            <div class="col-sm-6"><button class="btn btn-block"><i class="fab fa-facebook-f"></i> Signup with Facebook</button></div>
            <div class="col-sm-6 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-block"><i class="fab fa-twitter"></i> Signup with Twitter</button></div>
          </div><!-- row -->
        </form>
      </div><!-- az-signup-header -->

    </div><!-- az-column-signup -->
  </div><!-- az-signup-wrapper -->

</body>

</html>