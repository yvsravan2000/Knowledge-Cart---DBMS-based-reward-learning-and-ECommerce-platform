<!DOCTYPE html>
<html>
    <head>
    <title>Seller | Show products</title>
    <link rel="stylesheet" href="css/table_css.css" />
    </head>
    <body>
    <div class="container">

		<table border="1" >
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
        session_start();
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
        </div>
    </body>
</html>