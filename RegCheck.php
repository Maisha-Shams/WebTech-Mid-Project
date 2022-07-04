<?php

$userName = $_REQUEST['name'];
$password = $_REQUEST['password'];
$cPassword = $_REQUEST['cPassword'];
$email = $_REQUEST['email'];
$phnNum = $_REQUEST['phnNum'];
$nid = $_REQUEST['nid'];
$DOB = $_REQUEST['DOB'];
$gender = $_REQUEST['gender'];
$status = $_REQUEST['status'];
$bGroup = $_REQUEST['bGroup'];
$religion = $_REQUEST['religion'];
$address = $_REQUEST['address'];


if ($password == null ) {
	echo "null password/name...";
} elseif ($password != $cPassword) {
	echo "Password Doesn't Match";
} 
else if ($userName==null)
{
    echo "please enter your name!";
}

else if(str_word_count($userName)<2)
{
    echo "please enter name more than two words!";
}
else if($userName[0]== "0" ||$userName[0]== "1"||$userName[0]== "2"||$userName[0]== "3"||$userName[0]== "4"||$userName[0]== "5"||$userName[0]== "6"||$userName[0]== "7"||$userName[0]== "8"||$userName[0]== "9")
{
    echo "Please enter letter first!";
}
else if(strlen($phnNum )<11)
{
    echo "please enter a valid Phone No.!";
}

else {
	$user = $userName . "||" . $password . "||" . $email . "||" . $phnNum . "||" . $nid . "||" . $DOB . "||" . $gender . "||" . $status . "||" . $bGroup . "||" . $religion . "||" . $address . "\r\n";
	$file = fopen('employee.txt', 'a');
	fwrite($file, $user);
	header('location: Login.php');
}
