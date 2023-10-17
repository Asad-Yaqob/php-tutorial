<?php 
session_start();
session_unset();
header("location:session_login.php");
?>