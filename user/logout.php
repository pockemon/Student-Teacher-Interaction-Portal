<?php
session_start();
unset($_SESSION['user']);
header('location:../home2.php');
?>
