<?php
include "connection.php";
session_start();
extract($_POST);
$mno=$_SESSION['mno'];
$sql2="INSERT INTO `product`(`pname`, `pcat`, `pspec`, `pbrnd`, `pcost`, `pqty`, `mno`) VALUES ('$pname','$pcat','$pspec','$pbrnd','$pcost','$pqty','$mno')";
    if ($dbc->query($sql2)===TRUE) 
    {
       echo $sql2;  
       header("location:home_seller.php"); 
    } else {
        echo "error: " .$sql2."<br>". $dbc ->error;

    }
    $dbc->close();
    ?>