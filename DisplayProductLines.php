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
	<h1>PRODUCT LINES</h1>
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
		   $sql = "SELECT * FROM productlines ORDER BY productLine";
		   $result = $conn->query($sql); ?>
		   <table>
		   <tr> <thead>
			  <th>Product Line</th>
			  <th>Text Description</th>
			  <th>HTML Description</th>
			  <th>Image</th>
		   </thead> </tr>
		<?php
		   if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) { 
		?>
				<tr>
				<td><?php echo $row['productLine'] ?> </td>
				<td><?php echo $row['textDescription'] ?> </td>
				<td><?php echo $row['htmlDescription'] ?> </td>
				<td><?php echo $row['image'] ?> </td>
				</tr>
		<?php
			 }   	
		   } else echo "Database is empty"; 
			$conn->close(); 
		?>
		
		</table>
</body>
</html>