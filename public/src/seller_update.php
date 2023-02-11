<?php
include "connection.php";
session_start();
extract($_POST);
$mno=$_SESSION['mno'];
$sql5="UPDATE `seller` SET `mpwd`='$mpwd',`mname`='$mname',`mloc`='$mloc',`mdno`='$mdno',`mcolony`='$mcolony',`mcity`='$mcity',`mzip`='$mzip' WHERE `mno`='$mno'";
    if ($dbc->query($sql5)===TRUE) 
    {
       echo $sql5;  
       header("location:logout_seller.php"); 
    } else {
        echo "error: " .$sql5."<br>". $dbc ->error;

    }
    $dbc->close();
    ?>

