<?php
session_start();
include("account.php");
include("register.html");
include("verifyregister.php");
$_SESSION["email"]=$_POST[email];
?>
