<html>
	<head>
	</head>
	<body>
	<br>
	<input type="button" onclick="location.href='Home.php';" value="Home">
	<br>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="products">
			
			
			<fieldset>
				<legend><h1><i>PRODUCTS</i></h1></legend>
				<p style="font-size: 15pt">
				Product Code : <input type="text" name="productCode"  required =""><br>
				Product Name : <input type="text" name="productName"  required =""><br> 
				Product Line : <input type="text" name="productLine"  required =""><br> 
				Product Scale : <input type="text" name="productScale"  required =""><br> 
				Product Vendor : <input type="text" name="productVendor"  required =""><br>
				Product Description : <input type="text" name="productDescription"  ><br> 
				Quantity in Stock : <input type="number" name="quantityInStock"  required =""><br> 
				Buy Price : <input type="number" name="buyPrice"  required ="" placeholder="1.0" step="0.01" min="0" max="1000000"><br>
				Manufacturer Suggested Retail Price(MSRP) : <input type="number" name="MSRP"  required ="" placeholder="1.0" step="0.01" min="0" max="100000"><br> 
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
	
			$productCode= $_POST['productCode'];
			$productName= $_POST['productName'];
			$productLine= $_POST['productLine'];
			$productScale= $_POST['productScale'];
			$productVendor= $_POST['productVendor'];
			$productDescription= $_POST['productDescription'];
			$quantityInStock= $_POST['quantityInStock'];
			$buyPrice= $_POST['buyPrice'];
			$MSRP= $_POST['MSRP'];
	
	
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if(mysqli_connect_error())
			die("Connection failed".mysqli_connect_error());
	
		$sql1 = "INSERT INTO products VALUES ( 
									'$productCode',
									'$productName',
									'$productLine',
									'$productScale',
									'$productVendor',
									'$productDescription',
									'$quantityInStock',
									'$buyPrice',
									'$MSRP'	
									)";
									
		if($conn->query($sql) === TRUE){
		echo "<script> alert('Submitted Successfully!')</script>";
		}
		else echo "<script> alert('Submission Failed!')</script>".$conn->error;
		
			
		$conn->close();
	}	
	?>
</html>