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
	<h1>ORDERS</h1>
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
		   $sql = "SELECT * FROM orders ORDER BY orderNumber";
		   $result = $conn->query($sql); ?>
		   <table>
		   <tr> <thead>
			  <th>Order Number</th>
			  <th>Order Date</th>
			  <th>Required Date</th>
			  <th>Shipped Date</th>
			  <th>Status</th>
			  <th>Comments</th>
			  <th>Customer Number</th>
		   </thead> </tr>
		<?php
		   if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) { 
		?>
				<tr>
				<td><?php echo $row['orderNumber'] ?> </td>
				<td><?php echo $row['orderDate'] ?> </td>
				<td><?php echo $row['requiredDate'] ?> </td>
				<td><?php echo $row['shippedDate'] ?> </td>
				<td><?php echo $row['status'] ?> </td>
				<td><?php echo $row['comments'] ?> </td>
				<td><?php echo $row['customerNumber'] ?> </td>
				</tr>
		<?php
			 }   	
		   } else echo "Database is empty"; 
			$conn->close(); 
		?>
		
		</table>
	
</body>
</html>