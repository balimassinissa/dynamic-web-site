<?php 
session_start();
session_destroy();
$_SESSION['usern'] = 'no_info';
header('location:login.php');
?>