<?php
include "connection.php";
session_start();
extract($_POST);
$sno=$_SESSION['sno'];
$sql4="DELETE FROM student WHERE `sno`='$sno'";
    if ($dbc->query($sql4)===TRUE) 
    {
       echo $sql4;  
       header("location:logout_student.php"); 
    } else {
        echo "error: " .$sql4."<br>". $dbc ->error;

    }
    $dbc->close();
    ?>

