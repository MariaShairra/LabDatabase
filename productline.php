<html>
	<head>
	</head>
	<body>
	<br>
	<input type="button" onclick="location.href='Home.php';" value="Home">
	<br>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="productlines">
			<fieldset>
				<legend><h1><i>PRODUCT LINES</i></h1></legend>
				<p style="font-size: 15pt">
				Product Line: <input type="text" name="productLine" ><br> 
				Text Description : <input type="text" name="textDescription" ><br> 
				HTML Description : <input type="text" name="htmlDescription"  ><br> 
				Image : <input type="file" name="fileToUpload" id="fileToUpload"><br> 
				<p>
			</fieldset>
			<input type="Submit" name="button" value="Submit"> 
		</form>
	</body>
	
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			connect();
		}
		function connect(){
	
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "classicmodels";
	
			$productLine= $_POST['productLine'];
			$textDescription= $_POST['textDescription'];
			$htmlDescription= $_POST['htmlDescription'];
			$image= $_POST['image'];
	
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if(mysqli_connect_error())
			die("Connection failed".mysqli_connect_error());
	
		$sql = "INSERT INTO productlines VALUES ( 
									'$productLine',
									'$textDescription',
									'$htmlDescription',
									'$image'
									)";
									
		if($conn->query($sql) === TRUE){
		echo "<script> alert('Submitted Successfully!')</script>";
		}
		else echo "<script> alert('Submission Failed!')</script>".$conn->error;
		
			
		$conn->close();
	}	
	?>
</html>