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
	<h1>EMPLOYEES</h1>
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
		   $sql = "SELECT * FROM employees ORDER BY employeeNumber";
		   $result = $conn->query($sql); ?>
		   <table>
		   <tr> <thead>
			  <th>Employee Number</th>
			  <th>Last Name</th>
			  <th>First Name</th>
			  <th>Extension</th>
			  <th>Email</th>
			  <th>Office Code</th>
			  <th>Reports to</th>
			  <th>Job Title</th>
		   </thead> </tr>
		<?php
		   if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) { 
		?>
				<tr>
				<td><?php echo $row['employeeNumber'] ?> </td>
				<td><?php echo $row['lastName'] ?> </td>
				<td><?php echo $row['firstName'] ?> </td>
				<td><?php echo $row['extension'] ?> </td>
				<td><?php echo $row['email'] ?> </td>
				<td><?php echo $row['officeCode'] ?> </td>
				<td><?php echo $row['reportsTo'] ?> </td>
				<td><?php echo $row['jobTitle'] ?> </td>
				</tr>
		<?php
			 }   	
		   } else echo "Database is empty"; 
			$conn->close(); 
		?>
		
		</table>
</body>
</html>