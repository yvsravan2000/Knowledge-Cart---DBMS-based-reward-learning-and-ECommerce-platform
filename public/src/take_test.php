<?php
include 'connection.php';
session_start();
$_SESSION['qno']=1;
    if(!isset($_SESSION['semail'])){
        header("Location: student_login.php");
    }
    else{
        if($_POST){
        $qsno=$_POST['qsno'];
        $qspwd=$_POST['qspwd'];
        $sql="SELECT * FROM `question` WHERE `qsno`='$qsno' AND `qspwd`='$qspwd'";
        $res=mysqli_query($dbc,$sql);
        if(mysqli_num_rows($res)>0){
			$_SESSION['qsno']=$qsno;
		
            header("location:exam.php");
        }
        else{
            echo "<script>alert('Invalid Test Details!')</script>";
        }
    }
    }
?>

<html>
<head>
    <title>Student | Take test</title>
    <link rel="stylesheet" href="css/testlogin.css" />
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
        <!-- Header 
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<li><a href="http://localhost/knowledge_cart/home_student.php">Home</a></li>
						<li><a href="http://localhost/knowledge_cart/student_myaccount.php">My Account</a></li>
						<li class="active"><a href="http://localhost/knowledge_cart/student_questions.php">Questions</a></li>
						<li><a href="http://localhost/knowledge_cart/student_shop.php">Shop</a></li>
						<li><a href="http://localhost/knowledge_cart/student_cart.php">Cart</a></li>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>-->


    <div class="main">
    <p class="sign" align="center">TEST DETAILS</p>
    <form class="form1" method="post">
        <input class="un" name="qsno" type="text" align="center" placeholder="SET NUMBER" required>
        <input class="pass" name="qspwd" type="password" align="center" placeholder="SET PASSWORD" required>
        <input class="submit" value="TAKE TEST" type="Submit">
    </form>
    </div>




    <div style="background-color:grey;color:white;padding:20px;">
				<address class="cr">
				<p>Knowledge Cart Copyright &#169; 2019. All Rights Reserved. <a href="mailto:sravan.reddy.99999@gmail.com">MAIL ME</a></p> 
				Visit us at:
				
				https://shieldcloud102.blogspot.com<br>
				Amrita Vishwa Vidyappetham, Kasavanahalli<br>
				Bengaluru-560035<br>
				Karnataka<br>
				India
				</address>
			  </div> 
</body>
</html>