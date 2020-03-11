<html>
	<head>
		<title> Employee </title>
	</head>
	
	<body>
	<br>
	<input type="button" onclick="location.href='Home.php';" value="Home">
	<br>
		<form method="post" name="employeeform" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<fieldset> Employee Details </fieldset>

				
				Employee Number: &nbsp <input type="text" name="enumber" style="width:1010px"><br>
				Last Name: &nbsp <input type="text" name="lname" style="width:1010px"><br>
				First Name: &nbsp <input type="text" name="fname" style="width:1010px"><br>
				Extension: &nbsp <input type="text" name="ext" style="width:1010px"><br>
				Email: &nbsp <input type="text" name="email" style="width:1010px"><br>
				Office Code: &nbsp <input type="text" name="offcode" style="width:1010px"><br>
				Reports to: &nbsp <input type="text" name="reports" style="width:1010px"><br>
				Job Title: &nbsp <input type="text" name="title" style="width:1010px"><br><br><br>
				
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
	
	$employeeNumber= $_POST['enumber'];
	$lastName= $_POST['lname'];
	$firstName= $_POST['fname'];
	$extension= $_POST['ext'];
	$email= $_POST['email'];
	$officeCode= $_POST['offcode'];
	$reportsTo= $_POST['reports'];
	$jobTitle= $_POST['title'];
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if(mysqli_connect_error())
		die("Connection failed".mysqli_connect_error());
	
	$sql = "INSERT INTO employees VALUES ( 
									'$employeeNumber',
									'$lastName',
									'$firstName',
									'$extension',
									'$email',
									'$officeCode',
									'$reportsTo',
									'$jobTitle'
									)";
	if($conn->query($sql) === TRUE){
		echo "<script> alert('Submitted Successfully!')</script>";
	}
	else echo "<script> alert('Submission Failed! Data Duplication!<br>Check GSIS NO., PAG-IBIG NO., PHILHEALTH NO., SSS NO., TIN NO., & AGENCY EMPLOYEE NO.')</script>".$conn->error;
		
	$conn->close();
}	
	?>
									
</html>