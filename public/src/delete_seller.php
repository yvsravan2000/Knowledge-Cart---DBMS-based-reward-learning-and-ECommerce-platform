<?php
include "connection.php";
session_start();
extract($_POST);
$mno=$_SESSION['mno'];
$sql6="DELETE FROM seller WHERE `mno`='$mno'";
    if ($dbc->query($sql6)===TRUE) 
    {
       echo $sql6;  
       header("location:logout_seller.php"); 
    } else {
        echo "error: " .$sql6."<br>". $dbc ->error;

    }
    $dbc->close();
    ?>

