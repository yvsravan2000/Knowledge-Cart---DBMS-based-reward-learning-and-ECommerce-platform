<?php
include "connection.php";
extract($_POST);

 $sql ="INSERT INTO `seller`(`mpwd`, `mname`, `mloc`, `memail`, `mdno`, `mcolony`, `mcity`, `mzip`, `mbname`, `maccno`, `macntname`, `mifsc`) VALUES ('$mpwd', '$mname', '$mloc', '$memail', '$mdno', '$mcolony', '$mcity', '$mzip', '$mbname', '$maccno', '$macntname', '$mifsc')";
    if ($dbc->query($sql)===TRUE) 
    {
       echo $sql;   
       header("location:seller_login.php");
    } else {
        echo "error: " .sql."<br>". $dbc ->error;

    }
    $dbc->close();
    ?>