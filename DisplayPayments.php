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
	<h1>PAYMENTS</h1>
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
		   $sql = "SELECT * FROM payments ORDER BY customerNumber";
		   $result = $conn->query($sql); ?>
		   <table>
		   <tr> <thead>
			  <th>Customer Number</th>
			  <th>Check Number</th>
			  <th>Payment Date</th>
			  <th>Amount</th>
		   </thead> </tr>
		<?php
		   if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) { 
		?>
				<tr>
				<td><?php echo $row['customerNumber'] ?> </td>
				<td><?php echo $row['checkNumber'] ?> </td>
				<td><?php echo $row['paymentDate'] ?> </td>
				<td><?php echo $row['amount'] ?> </td>
				</tr>
		<?php
			 }   	
		   } else echo "Database is empty"; 
			$conn->close(); 
		?>
		
		</table>
		
</body>
</html>