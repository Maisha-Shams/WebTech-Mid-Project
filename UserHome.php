<?php
session_start();
if (isset($_COOKIE['status'])) {

	$email = $_SESSION["userEmail"];


?>

<html>

<head>
	<title>Home</title>
</head>

<body>

	<center>
		<h1>Welcome, <?php echo $_SESSION["user"]; ?></h1>
	</center>


	<h3><a href="<?php echo $href = 'Profile.php?email=' . $email; ?>"> Profile </a></h3>
	<h3><a href="<?php echo $href = 'addCustForm.php?email=' . $email; ?>"> Add Customer </a></h3>
	<h3><a href="<?php echo $href = 'viewCustomer.php?email=' . $email; ?>"> View Customer List </a></h3>
	<h3><a href="TransactionHistory.php"> View Transactions</a></h3>
	<h3><a href="logout.php"> Logout </a></h3>

</body>

<?php 
	}else{
		echo "invalid request!";
	} 
?>
</html>