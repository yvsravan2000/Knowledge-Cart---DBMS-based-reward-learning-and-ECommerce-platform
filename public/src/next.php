<?php
session_start();
include('connection.php');
$qsno=$_SESSION['qsno'];
$semail=$_SESSION['semail'];
$scredits=$_SESSION['scredits'];
echo "$scredits";
    $score=0;
$inn=1;
      $sql1 = mysqli_query($dbc,"SELECT * FROM `question` WHERE qsno='$qsno'");
   
    while ($res1 = mysqli_fetch_array($sql1)) {
    
    	if($res1['qcrtans']==$res1['sans'])
    	{
      
      $score++;
      $score++;
      
     }
     else{
        $score--;
     }
     
 }
 /*echo "<script>alert('submission Successful you earned $score credits');</script>";*/
$score=$score+$scredits;


        	 $sql2="UPDATE `student` SET `scredits`='$score' WHERE `semail`='$semail'";
        $result2= mysqli_query($dbc,$sql2);
        
          echo "
          <script>alert('Submission Successful');</script>
          <script>
          window.location='home_student.php';
          </script>
          ";
       

  ?>  