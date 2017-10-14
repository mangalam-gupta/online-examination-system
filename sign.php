<?php
include_once 'dbConnection_online_examination.php';
ob_start();
$name = $_POST['name'];
$name = ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$college = $_POST['college'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$college = stripslashes($college);
$college = addslashes($college);
$phone = stripslashes($phone);
$phone = addslashes($phone);
$password = stripslashes($password);
$password = addslashes($password);
$password = hash('sha512',$password);

$q3 = mysqli_query($con,"INSERT INTO user VALUES ('$name','$gender','$college','$email','$phone','$password')");
if($q3){
	session_start();
	$_SESSION["email"] = $email;
	$_SESSION["name"] = $name;
	
	header("location:account.php?q=1");
}
else{
header("location:signup.php?q7=Email already registered!!");
}
ob_end_flush();
?>