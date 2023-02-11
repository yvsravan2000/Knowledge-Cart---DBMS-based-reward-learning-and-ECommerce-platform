<?php
include "connection.php";
extract($_POST);

 $sql ="INSERT INTO `student`(`spwd`, `sfn`, `smn`, `sln`, `semail`, `sdob`, `sgender`, `sdno`, `scolony`, `scity`, `szip`) VALUES('$spwd','$sfn', '$smn', '$sln', '$semail', '$sdob', '$sgender', '$sdno', '$scolony', '$scity', '$szip')";
    if ($dbc->query($sql)===TRUE) 
    {
       echo $sql;   
       header("location:student_login.php");
    } else {
        echo "error: " .sql."<br>". $dbc ->error;

    }
    $dbc->close();
?>