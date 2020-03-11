<html>
<head></head>
<body>
	<br>
	<input type="button" onclick="location.href='Home.php';" value="Home">
	<br>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="myform">
		<fieldset>
			<legend>Customer's Information</legend><br>
			1. Customer Number: <input type="text" name="customerNumber" required =""><br><br>
			2. Customer Name: <input type="text" name="customerName"><br><br>
			3. Contact Last Name: <input type="text" name="contactLastName"><br><br>
			4. Contact First Name: <input type="text" name="contactFirstName"><br><br>
			5. Phone Number: <input type="text" name="phone"><br><br>
			6. Address Line 1: <input type="text" name="addressLine1"><br><br>
			7. Address Line 2: <input type="text" name="addressLine2"><br><br>
			8. City: <input type="text" name="city"><br><br>
			9. State: <input type="text" name="state"><br><br>
			10. Postal Code: <input type="text" name="postalCode"><br><br>
			11. Country: <input type="text" name="country"><br><br>
			12. Sales Representive Employee Number: <input type="text" name="salesRepEmployeeNumber"><br><br>
			13. Credit Limit: <input type="text" name="creditLimit"><br><br>
		</fieldset>
		<fieldset>
			<legend>Orders</legend><br>
			1. Order Number: <input type="text" name="orderNumber"><br><br>
			2. Order Date: <input type="date" name="orderDate" style="text-align: center;"><br><br>
			3. Required Date: <input type="date" name="requiredDate" style="text-align: center;"><br><br>
			4. Shipped Date: <input type="date" name="shippedDate" style="text-align: center;"><br><br>
			5. Status: <input type="text" name="status"><br><br>
			6. Comments: <input type="text" name="comments"><br><br><br><br>
		</fieldset>
		<fieldset>
			<legend>Order Details</legend><br>
			1. Product Code: <input type="text" name="productCode"><br><br>
			2. Quantity Ordered: <input type="text" name="quantityOrdered"><br><br>
			3. Price Each: <input type="text" name="priceEach"><br><br>
			4. Order Line Number: <input type="text" name="orderLineNumber"><br><br>
		</fieldset>
		<fieldset>
			<legend>Payments</legend><br>
			1. Check Number: <input type="text" name="checkNumber"><br><br>
			2. Payment Date: <input type="date" name="paymentDate" style="text-align: center;"><br><br>
			3. Amount: <input type="text" name="amount"><br><br>
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
		
		$customerNumber= $_POST['customerNumber'];
		$customerName= $_POST['customerName'];
		$contactLastName= $_POST['contactLastName'];
		$contactFirstName= $_POST['contactFirstName'];
		$phone= $_POST['phone'];
		$addressLine1= $_POST['addressLine1'];
		$addressLine2= $_POST['addressLine2'];
		$city= $_POST['city'];
		$state= $_POST['state'];
		$postalCode= $_POST['postalCode'];
		$country= $_POST['country'];
		$salesRepEmployeeNumber= $_POST['salesRepEmployeeNumber'];
		$creditLimit= $_POST['creditLimit'];
		$orderNumber= $_POST['orderNumber'];
		$orderDate= $_POST['orderDate'];
		$requiredDate= $_POST['requiredDate'];
		$shippedDate= $_POST['shippedDate'];
		$status= $_POST['status'];
		$comments= $_POST['comments'];
		$productCode= $_POST['productCode'];
		$quantityOrdered= $_POST['quantityOrdered'];
		$priceEach= $_POST['priceEach'];
		$orderLineNumber= $_POST['orderLineNumber'];
		$checkNumber= $_POST['checkNumber'];
		$paymentDate= $_POST['paymentDate'];
		$amount= $_POST['amount'];
		
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if(mysqli_connect_error())
			die("Connection failed".mysqli_connect_error());
		
		$sql1 = "INSERT INTO customers VALUES ( 
										'$customerNumber',
										'$customerName',
										'$contactLastName',
										'$contactFirstName',
										'$phone',
										'$addressLine1',
										'$addressLine2',
										'$city',
										'$state',
										'$postalCode',
										'$country',
										'$salesRepEmployeeNumber',
										'$creditLimit'
										)";
		$sql2 = "INSERT INTO orders VALUES ( 
										'$orderNumber',
										'$orderDate',
										'$requiredDate',
										'$shippedDate',
										'$status',
										'$comments',
										'$customerNumber'
										)";
		$sql3 = "INSERT INTO orderdetails VALUES ( 
										'$orderNumber',
										'$productCode',
										'$quantityOrdered',
										'$priceEach',
										'$orderLineNumber'
										)";
		$sql4 = "INSERT INTO payments VALUES ( 
										'$customerNumber',
										'$checkNumber',
										'$paymentDate',
										'$amount'
										)";
		
		if($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE){
		echo "<script> alert('Submitted Successfully!')</script>";
		}
		else echo "<script> alert('Submission Failed!')</script>".$conn->error;
			
		$conn->close();
	}									
?>
</html>