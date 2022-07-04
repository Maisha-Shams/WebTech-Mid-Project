<?php
error_reporting(0)
?>
<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if ($email == null || $password == null) {
	echo "null Account Number/Password...";
} else {
	echo "no User Found! please register";
	$file = fopen('employee.txt', 'r');

	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("||", $data);
		if ($email == trim($user[2]) && $password == trim($user[1])) {
			setcookie('status', 'true', time() + 3600, '/');
			session_start();
			$_SESSION["user"] = trim($user[0]);
			$_SESSION["userEmail"] = trim($user[2]);
			header('location: UserHome.php?email=' . $email);
		}
	}

	echo "no User Found! please register";
	//header("Refresh:2;url=Registration.php");
}


?>