<html>
    <head>
        <title>Student | Orders</title>
        <link rel="stylesheet" href="css/main.css" />
    </head>
    <body>

    <body style="background-color:silver">
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



            <br>
<br>
<br>
    <table border="1" >
	<thead>
	    <tr>
          <th>Order Number</th>
          <th>Product name</th>
           <th>Order cost</th>
		   	
		  
		</tr>
	</thead>
	<tbody>
        <?php 
        session_start();
		$sno=$_SESSION['sno'];
		include('connection.php');
		
		$sql1 = mysqli_query($dbc,"SELECT * FROM `order_student` WHERE `sno`='$sno' ");
		
        while ($res1 = mysqli_fetch_array($sql1))
		{ 	$ono=$res1['ono'];
            $sql2 = mysqli_query($dbc,"SELECT * FROM `order_product` WHERE `ono`='$ono' ");
            $res2 = mysqli_fetch_array($sql2);
            $pno=$res2['pno'];
            $sql3 = mysqli_query($dbc,"SELECT * FROM `product` WHERE `pno`='$pno' ");
            $res3 = mysqli_fetch_array($sql3);

			echo'
			<tr>
						
			<td>'.$res1['ono'].'</td>
            
            <td>'.$res3['pname'].'</td>

			<td>'.$res1['ocost'].'</td>

			
			</tr>
			';
		 	
		 }
		 
		  ?>
	</tbody>
</table>	
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
