<?php
include 'connection.php';
session_start();
session_destroy();
header("location:seller_login.php");
?>