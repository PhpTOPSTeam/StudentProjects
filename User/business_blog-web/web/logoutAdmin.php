<?php
session_start();
$unm=$_SESSION['user'];
session_unset($unm);
//header('location:../User/business_blog-web/web/login.php');
?>