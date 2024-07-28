<?php

require_once("./conn/dbconn.php");
session_start();
$_SESSION = array();
session_destroy();
header("location: Additems.php");

// require_once("./conn/dbconn.php");
// session_start();

// session_destroy();
// // header("Location: login.php");
// header("location: Additems.php");
// exit();
?>



