<?php
session_start();

$_SESSION['rap_name'] = null;
$_SESSION['rap_id'] = null;
$_SESSION['rap_add'] = null;
header('location:../log in/index.php');
?>