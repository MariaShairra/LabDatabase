<html>
<head>
<style type="text/css">
table, th, td {
   border: 0.5px solid gray;
   width: 50%;
}
</style>
</head>
<body>
	<br>
	<input type="button" onclick="location.href='Home.php';" value="Home">
	<br>
	<h1>PRODUCTS</h1>
	<?php
		   $servername = "localhost";
		   $username = "root";
		   $password = "";
		   $database = "classicmodels";
		   // Create connection
		   $conn = new mysqli($servername, $username, $password, $database);
		   // Check connection
		   if ($conn->connect_error) {
			 die("Connection failed: " . $conn->connect_error);
		   } 
		   $sql = "SELECT * FROM products ORDER BY productCode";
		   $result = $conn->query($sql); ?>
		   <table>
		   <tr> <thead>
			  <th>Product Code</th>
			  <th>Product Name</th>
			  <th>Product Line</th>
			  <th>Product Scale</th>
			  <th>Product Vendor</th>
			  <th>Product Description</th>
			  <th>Quantity In Stock</th>
			  <th>Buy Price</th>
			  <th>MSRP</th>
		   </thead> </tr>
		<?php
		   if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) { 
		?>
				<tr>
				<td><?php echo $row['productCode'] ?> </td>
				<td><?php echo $row['productName'] ?> </td>
				<td><?php echo $row['productLine'] ?> </td>
				<td><?php echo $row['productScale'] ?> </td>
				<td><?php echo $row['productVendor'] ?> </td>
				<td><?php echo $row['productDescription'] ?> </td>
				<td><?php echo $row['quantityInStock'] ?> </td>
				<td><?php echo $row['buyPrice'] ?> </td>
				<td><?php echo $row['MSRP'] ?> </td>
				</tr>
		<?php
			 }   	
		   } else echo "Database is empty"; 
			$conn->close(); 
		?>
		
		</table>
		
</body>
</html>