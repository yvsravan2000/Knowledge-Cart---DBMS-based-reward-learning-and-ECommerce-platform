<?php
include "connection.php";
session_start();
extract($_POST);
$aid=$_SESSION['aid'];
 $sql7 ="INSERT INTO `question`(`qsno`, `qno`, `qsn`, `qcrtans`, `oone`, `otwo`, `qpos`, `qneg`,`qspwd`,`aid`) VALUES ('$qsno','$qno','$question','$qcrtans','$oone','$otwo','$qpos','$qneg','$qspwd','$aid')";
    if ($dbc->query($sql7)===TRUE) 
    {
       echo $sql7;   
       header("location:admin_question.php");
    } else {
        echo "error: " .sql7."<br>". $dbc ->error;

    }
    $dbc->close();
    ?>