<?php
include 'connection.php';
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['comments'];
if ($message == "" || $name=='' || $email =="") {
	$_SESSION['flash_message'] = "The fields cannot be empty.... Fill in all the fields to send message";
	header('Location: contact.php');
	exit();
}
$query = mysql_query("INSERT INTO contact VALUES('$name', '$email' , '$message')");
$_SESSION['flash_message'] = "Message was successfully sent";
header('Location: loginn.php');
mysql_close($conn);
?>