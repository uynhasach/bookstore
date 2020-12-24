<?php 
if (!isset($_SESSION["nhanvien"])) session_start();
unset($_SESSION['nhanvien']);
header('location:loginnv.php');
?>