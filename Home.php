<html>
<head>
<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body style="background-image: url(photo1.png); background-size: cover; ">
<br><br><br><br><br><br><br><br>
<h1 style="text-align: center">Welcome to the site!</h1>
<br>
	<div class="dropdown" style="margin-left: 625px">
	  <button class="dropbtn">View</button>
	  <div class="dropdown-content">
		<a href="DisplayOffices.php">Offices</a>
		<a href="DisplayEmployees.php">Employees</a>
		<a href="DisplayCustomers.php">Customers</a>
		<a href="DisplayOrders.php">Orders</a>
		<a href="DisplayOrderDetails.php">Order Details</a>
		<a href="DisplayProducts.php">Products</a>
		<a href="DisplayProductLines.php">Product Lines</a>
		<a href="DisplayPayments.php">Payments</a>
	  </div>
	</div>
	<br><br>
	<div class="dropdown" style="margin-left: 628px">
	  <button class="dropbtn">Add</button>
	  <div class="dropdown-content">
		<a href="office.php">Office</a>
		<a href="employee.php">Employee</a>
		<a href="customer.php">Customer</a>
		<a href="product.php">Product</a>
		<a href="productline.php">Product Line</a>
	  </div>
	</div>
</body>
</html>