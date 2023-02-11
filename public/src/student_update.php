<?php
include "connection.php";
session_start();
extract($_POST);
$sno=$_SESSION['sno'];
$sql3="UPDATE `student` SET `spwd`='$spwd',`sfn`='$sfn',`smn`='$smn',`sln`='$sln',`sgender`='$sgender',`sdno`='$sdno',`scolony`='$scolony',`scity`='$scity',`szip`='$szip' WHERE `sno`='$sno'";
    if ($dbc->query($sql3)===TRUE) 
    {
       echo $sql3;  
       header("location:logout_student.php"); 
    } else {
        echo "error: " .$sql3."<br>". $dbc ->error;

    }
    $dbc->close();
    ?>



