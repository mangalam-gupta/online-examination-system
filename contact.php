<?php
include 'dbConnection_online_examination.php';
$ref = $_GET['q'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$q = mysqli_query($con,"INSERT INTO contact VALUES('$name','$email','$message')") or die("ERROR");

header("location:contactus.php?q=contact.php ")

?>