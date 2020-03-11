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
	<h1>ORDER DETAILS</h1>
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
		   $sql = "SELECT * FROM orderdetails ORDER BY orderNumber";
		   $result = $conn->query($sql); ?>
		   <table>
		   <tr> <thead>
			  <th>Order Number</th>
			  <th>Product Code</th>
			  <th>Quantity Ordered</th>
			  <th>Price Each</th>
			  <th>Order Line Number</th>
		   </thead> </tr>
		<?php
		   if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) { 
		?>
				<tr>
				<td><?php echo $row['orderNumber'] ?> </td>
				<td><?php echo $row['productCode'] ?> </td>
				<td><?php echo $row['quantityOrdered'] ?> </td>
				<td><?php echo $row['priceEach'] ?> </td>
				<td><?php echo $row['orderLineNumber'] ?> </td>
				</tr>
		<?php
			 }   	
		   } else echo "Database is empty"; 
			$conn->close(); 
		?>
		
		</table>
	
</body>
</html>