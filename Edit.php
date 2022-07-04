<?php

if(isset($_COOKIE['status'])){

$email = $_REQUEST['email'];

$file = fopen('employee.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("||", $data); 
		if($email == trim($user[2])) {
			$userName = trim($user[0]);
            $userPass = trim($user[1]);
			$email = trim($user[2]);
			$phnNum = trim($user[3]);
			$nid = trim($user[4]);
			$DOB = trim($user[5]);
			$gender = trim($user[6]);
			$status = trim($user[7]);
			$bGroup = trim($user[8]);
			$religion = trim($user[9]);
			$address = trim($user[10]);
			break;
		}	
	}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Edit Profile</title>
	
</head>
<body>
		<?php echo '<h2>Update your Information!!</h2>'; ?>
		<br>
		<form action="Edit.php" method="post">
			<table border="1">
					<tr>
					<th colspan = "2">INFORMATION</th>
					</tr>
				<tr>
					<td>Name  </td>
					<td><input type="text" name="name" value="<?php echo $userName; ?>"></td>
				</tr>
				<tr>
					<td>Password  </td>
					<td><input type="text" name="password" value="<?php echo $userPass; ?>"></td>
				</tr>
				<tr>
					<td>E-mail  </td>
					<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
				</tr>
				<tr>
					<td>Phone No </td>
					<td><input type="text" name="phnNum" value="<?php echo $phnNum; ?>"></td>
				</tr>
				<tr>
					<td>NID  </td>
					<td><input type="text" name="nid" value="<?php echo $nid; ?>"></td>
				</tr>
				<tr>
					<td>DOB  </td>
					<td><input type="text" name="DOB" value="<?php echo $DOB; ?>"></td>
				</tr>
				<tr>
					<td>Gender  </td>
					<td><input type="text" name="gender" value="<?php echo $gender; ?>"></td>
				</tr>
				<tr>
					<td>Status  </td>
					<td><input type="text" name="status" value="<?php echo $status; ?>"></td>
				</tr>
				<tr>
					<td>Blood Group  </td>
					<td><input type="text" name="bGroup" value="<?php echo $bGroup; ?>"></td>
				</tr>
				<tr>
					<td>Religion  </td>
					<td><input type="text" name="religion" value="<?php echo $religion; ?>"></td>
				</tr>
				<tr>
					<td>Address  </td>
					<td><input type="text" name="address" value="<?php echo $address; ?>"></td>
				</tr>
			</table>
				<p>Are you sure want to UPDATE your information?</p>
				<input type="submit" name="submit" value="Update" >
				<input type="submit" name="cancel" value="Cancel" >
		</form>

<?php 

		if(isset($_POST['submit'])){

			
			$userName = $_REQUEST['name'];
			$password = $_REQUEST['password'];
			$email = $_REQUEST['email'];
			$phnNum = $_REQUEST['phnNum'];
			$nid = $_REQUEST['nid'];
			$DOB = $_REQUEST['DOB'];
			$gender = $_REQUEST['gender'];
			$status = $_REQUEST['status'];
			$bGroup = $_REQUEST['bGroup'];
			$religion = $_REQUEST['religion'];
			$address = $_REQUEST['address'];

			$user = $userName."||".$password."||".$email."||".$phnNum."||".$nid."||".$DOB."||".$gender."||".$status."||".$bGroup."||".$religion."||".$address."\r\n";

			$file = fopen('employee.txt', 'w+');
			fwrite($file, $user);
			header('location: Profile.php?email='.$email);

		}elseif(isset($_POST['cancel'])){
			header('location: Profile.php?email='.$email);
		}

?>

</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>