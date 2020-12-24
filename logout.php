<?php 
if (!isset($_SESSION["khachhang"])) session_start();
unset($_SESSION['khachhang']);
header('location:login.php');
?>