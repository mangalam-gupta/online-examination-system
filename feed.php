<?php
include_once 'dbConnection_online_examination.php';
$ref = @$_GET['q'];
$id = uniqid();
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$date = date("Y-m-d");
$time = date("h:i:sa");
$feedback = $_POST['feedback'];
$q = mysqli_query($con,"INSERT INTO feedback VALUES('$id','$name','$email','$subject','$feedback','$date','$time')") or die("Error");
header("location:$ref?q=Thank you for your valuable Feedback");
?>