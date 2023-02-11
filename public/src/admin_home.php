<?php
session_start();
      if(!isset($_SESSION['aemail'])){
      header("Location: admin_login.php");}  
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin | Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/admin_main.css" />
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
						<li class="active"><a href="http://localhost/knowledge_cart/admin_home.php">Home</a></li>
						<li><a href="http://localhost/knowledge_cart/admin_question.php">Questions</a></li>
					</nav>
					<!--<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a> -->
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Hello! Admin</h1><br>
						<h2>Name: 
                        <?php
							echo $_SESSION['aname'];
							echo "<br>";
						?>
                        </h2>
                        <h2>E-mail:
                        <?php
							echo $_SESSION['aemail'];
							echo "<br>";
						?>
						</h2><br><br><br>
					</header>

					<footer>
						<a href="http://localhost/knowledge_cart/admin_logout.php" class="button">LOGOUT</a>
						<br>
						<br>
						<br>
					</footer>
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
				Visit us at:<br>
				https://shieldcloud102.blogspot.com<br>
				Amrita Vishwa Vidyappetham, Kasavanahalli<br>
				Bengaluru-560035<br>
				Karnataka<br>
				India<br>
				</address>
			  </div> 
	</body>
</html>
