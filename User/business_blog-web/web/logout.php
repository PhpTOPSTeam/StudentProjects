<?php
session_start();
$unm=$_SESSION['user'];
session_unset($unm);
header('location:index.php');
?>