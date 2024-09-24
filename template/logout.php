<?php

require_once("./conn/dbconn.php");
session_start();
$_SESSION = array();
session_destroy();
header("location: page-signin.php");
?>