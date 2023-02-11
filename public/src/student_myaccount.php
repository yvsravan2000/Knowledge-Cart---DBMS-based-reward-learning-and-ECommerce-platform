<?php
session_start();
      if(!isset($_SESSION['semail'])){
      header("Location: student_login.php");}  
?>





<!DOCTYPE HTML>
<html>
	<head>
		<title>Student | My Account</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
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
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<li><a href="http://localhost/knowledge_cart/home_student.php">Home</a></li>
						<li class="active"><a href="http://localhost/knowledge_cart/student_myaccount.php">My Account</a></li>
						<li><a href="http://localhost/knowledge_cart/student_questions.php">Questions</a></li>
						<li><a href="http://localhost/knowledge_cart/student_shop.php">Shop</a></li>
						<li><a href="http://localhost/knowledge_cart/student_cart.php">Cart</a></li>
					</nav>
					<!--<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a> -->
				</div>
			</header>
        
        
			
		<!-- Banner -->
			<section id="banner">
					<div class="inner">
						<a href="http://localhost/knowledge_cart/delete_student.php"	class="btone">Delete Account</a><br><br>
						<a href="http://localhost/knowledge_cart/update_student.php" class="btone">Update details</a> <br><br>
						<a href="credit.php" class="btone">My credits</a> <br><br>
						<a href="order_show.php" class="btone">My orders</a> <br><br>
						<a href="http://localhost/knowledge_cart/logout_student.php" class="btone">Sign Out</a>	
							
						<br><br><br><br><br>
					</div>
			</section>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
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