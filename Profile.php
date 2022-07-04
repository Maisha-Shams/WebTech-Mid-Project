<?php

if(isset($_COOKIE['status'])){

$email = $_REQUEST['email'];

$file = fopen('employee.txt', 'r');
	
	while (!feof($file)) {
		$data = fgets($file);
		$user = explode("||", $data); 
		if($email == trim($user[2])) {
			$userName = trim($user[0]);
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

	<title>Profile</title>
	
</head>
<body>
		<?php echo '<h2>Profile - ' . $userName . '</h2>'; ?>
		<br>
		<table border="1">
			
<?php
	

			echo '<tr>';
			echo '<th colspan = "2">INFORMATION</th>';
			echo '</tr>';
			echo'<tr>';
			echo '<td>Name  </td>';
			echo"<td>$userName</td>";
			echo'</tr>';
			echo'<tr>';
			echo '<td>Email  </td>';
			echo'<td>'.$email.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Phone No </td>';
			echo'<td>'.$phnNum.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>NID  </td>';
			echo'<td>'.$nid.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>DOB  </td>';
			echo'<td>'.$DOB.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Gender  </td>';
			echo'<td>'.$gender.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Status  </td>';
			echo'<td>'.$status.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Blood Group  </td>';
			echo'<td>'.$bGroup.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Religion  </td>';
			echo'<td>'.$religion.'</td>';
			echo'</tr>';
			echo'<tr>';
			echo '<td>Address  </td>';
			echo'<td>'.$address.'</td>';
			echo'</tr>';

?>
		</table>
<br>
<a href="<?php echo $href = 'UserHome.php?email='.$email; ?>"> Go Home </a> <br>
<a href="<?php echo $href = 'Edit.php?email='.$email; ?>"> Edit Profile</a> <br>
<a href="<?php echo $href = "Delete.php?email=$email & userName=$userName"?>">Delete Profile </a> <br/>

</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>