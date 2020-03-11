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
	<h1>OFFICES</h1>
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
		   $sql = "SELECT * FROM offices ORDER BY officeCode";
		   $result = $conn->query($sql); ?>
		   <table>
		   <tr> <thead>
			  <th>Office Code</th>
			  <th>City</th>
			  <th>Phone</th>
			  <th>Address Line 1</th>
			  <th>Address Line 2</th>
			  <th>State</th>
			  <th>Country</th>
			  <th>Postal Code</th>
			  <th>Territory</th>
		   </thead> </tr>
		<?php
		   if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) { 
		?>
				<tr>
				<td><?php echo $row['officeCode'] ?> </td>
				<td><?php echo $row['city'] ?> </td>
				<td><?php echo $row['phone'] ?> </td>
				<td><?php echo $row['addressLine1'] ?> </td>
				<td><?php echo $row['addressLine2'] ?> </td>
				<td><?php echo $row['state'] ?> </td>
				<td><?php echo $row['country'] ?> </td>
				<td><?php echo $row['postalCode'] ?> </td>
				<td><?php echo $row['territory'] ?> </td>
				</tr>
		<?php
			 }   	
		   } else echo "Database is empty"; 
			$conn->close(); 
		?>
		</table>
</body>
</html>