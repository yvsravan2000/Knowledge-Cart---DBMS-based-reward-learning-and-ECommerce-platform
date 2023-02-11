<?php 
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
  <link rel="stylesheet" href="css/examcss.css" />
</head>
<body>
<body style="background-color:silver;">
		<svg height="130" width="500">
			<defs>
			  <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
				<stop offset="0%"
				style="stop-color:red;stop-opacity:1" />
				<stop offset="100%"
				style="stop-color:yellow;stop-opacity:1" />
			  </linearGradient>
			</defs>
			<ellipse cx="85" cy="70" rx="65" ry="55" fill="url(#grad1)" />
			<text fill="#000000" font-size="35" font-family="Verdana"
			x="37" y="86">KNOWLEDGE CART&#8482;</text>
		  </svg>

<br>
<br>
<br>
<br>


<h2>




  <?php  
  
  
    
	$_SESSION['qno']++;
    $qno=$_SESSION['qno'];
  


	$qsno=$_SESSION['qsno'];
	include('connection.php');
	
	$sql="SELECT * FROM `question` WHERE qsno='$qsno' AND qno='$qno'";
        $result= mysqli_query($dbc,$sql);
        $check= mysqli_fetch_array($result);
        
        
       
       $end= $check['qno'];
        $quu=$check['qsn'];
        $q1=$check['oone'];
        $q2=$check['otwo'];
    
        
	 ?>
<form  method="post">
<label>Q<?php echo $qno ?> ) </label>

<input type="text" name="qno" readonly value="<?php echo  $quu ?>"><br><br>
<input type="radio" name="radio" value="oone"><?php echo  $q1 ?><br>
<input type="radio" name="radio" value="otwo"><?php echo  $q2 ?><br>
<input type="submit" name="submit" class="submit" value="Next">
</form>
<?php


if(isset($_POST['submit']))
{
  if(isset($_POST['radio']))
  
	{   if($qno>=11){
     $qno--;
    $sql1="UPDATE `question` SET `sans`='$ans' WHERE `qsno`='$qsno' AND `qno`='$qno' ";
    $result= mysqli_query($dbc,$sql1);
   
    $_SESSION['qno']--;
     echo "
     
         <script>
       
         window.location='next.php';
         </script>
         ";

  }
  else{
    $ans=$_POST['radio'];
    $qno--;
    $sql1="UPDATE `question` SET `sans`='$ans' WHERE `qsno`='$qsno' AND `qno`='$qno' ";
    $result= mysqli_query($dbc,$sql1);
    $_SESSION['qno']--;
   
     echo "
     
         <script>
       
         window.location='exam1.php';
         </script>
         ";

  }
    
		}
		
	}
  ?>
</h2>
</body>
</html>