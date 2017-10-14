<?php
include_once 'dbConnection_online_examination.php';
$ref = @$_GET['q'];
$email = $_POST['uname'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);
$result = mysqli_query($con,"SELECT email FROM admin WHERE email = '$email' and password = '$password'") or die('ERROR');
$count = mysqli_num_rows($result);
if($count==1){
	session_start();
	if(isset($_SESSION['email'])){
		session_unset();
	}
	$_SESSION["name"] = 'Admin';
	$_SESSION["key"] = 'mangalam7550851438';
	$_SESSION["email"] = $email;
	header("location:dash.php?q=0");
}
else
	header("location:$ref?w= Warning : Access Denied");
?>