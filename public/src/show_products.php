<?php
session_start();
      if(!isset($_SESSION['memail'])){
      header("Location: seller_login.php");}  
?>


<!DOCTYPE html>


<html>
<head>
	<title>Seller | Show Products</title>
	<link rel="stylesheet" href="table_css.css" />
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
<br>
<br>
<br>




<div style="overflow-x:auto;">
	<form method="post">
		<table table border="1px" cellpadding="10px"  align="center" style="width: 800px;line-height: 40px;">
        <thead>
	    <tr>
		  <th>Product Name</th>
		   <th>Product Category</th>
           <th>Product Brand</th>
           <th>Product Specification</th>
           <th>Product cost</th>
           <th>Product quantity</th>		  
		</tr>
	</thead>
	<tbody>
    <?php 
		$mno=$_SESSION['mno'];
		include('connection.php');
		
		$sql1 = mysqli_query($dbc,"SELECT * FROM `product` WHERE mno='$mno' ");
		
		while ($res1 = mysqli_fetch_array($sql1)) 
		{
			echo'
			<tr>
						
			<td>'.$res1['pname'].'</td>
            
            <td>'.$res1['pcat'].'</td>

            <td>'.$res1['pbrnd'].'</td>

            <td>'.$res1['pspec'].'</td>

            <td>'.$res1['pcost'].'</td>

            <td>'.$res1['pqty'].'</td>
		    
			</tr>
			';
		 	
		 }
		  ?>
	</tbody>
</table>
	</form>
</div>



<br>
<br>
<br>
<br>
<br>

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