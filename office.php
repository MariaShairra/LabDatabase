<html>
	<head>
		<title> Office </title>
	</head>
	
	<body>
	<br>
	<input type="button" onclick="location.href='Home.php';" value="Home">
	<br>
		<form method="post" name="officeform" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<fieldset> Office Details </fieldset>
			
			<fieldset>
				Office Code: &nbsp <input type="text" name="offcode" style="width:1010px"><br>
				City: &nbsp <input type="text" name="city" style="width:1010px"><br>
				Phone: &nbsp <input type="text" name="phone" style="width:1010px"><br>
				Address1: &nbsp <input type="text" name="add1" style="width:1010px"><br>
				Address2: &nbsp <input type="text" name="add2" style="width:1010px"><br>
				State: &nbsp <input type="text" name="state" style="width:1010px"><br>
				Country: &nbsp <input type="text" name="country" style="width:1010px"><br>
				Postal Code: &nbsp <input type="text" name="postcode" style="width:1010px"><br>
				Territory: &nbsp <input type="text" name="territory" style="width:1010px"><br>
			</fieldset>
			
		<fieldset> <input type="Submit" name="button" value="Submit">  </fieldset>
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
	
	$officeCode= $_POST['offcode'];
	$city= $_POST['city'];
	$phone= $_POST['phone'];
	$add1= $_POST['add1'];
	$add2= $_POST['add2'];
	$state= $_POST['state'];
	$country= $_POST['country'];
	$postalCode= $_POST['postcode'];
	$territory= $_POST['territory'];
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if(mysqli_connect_error())
		die("Connection failed".mysqli_connect_error());
	
	$sql = "INSERT INTO offices VALUES ( 
									'$officeCode',
									'$city',
									'$phone',
									'$add1',
									'$add2',
									'$state',
									'$country',
									'$postalCode',
									'$territory'
									)";
	if($conn->query($sql) === TRUE){
		echo "<script> alert('Submitted Successfully!')</script>";
	}
	else echo "<script> alert('Submission Failed! Data Duplication!<br>Check GSIS NO., PAG-IBIG NO., PHILHEALTH NO., SSS NO., TIN NO., & AGENCY EMPLOYEE NO.')</script>".$conn->error;
		
	$conn->close();
}	
	?>
									
	
</html>