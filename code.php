<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$result = mysql_query("SELECT * FROM member WHERE username = '$username'");
$rows = mysql_num_rows($result);
if($rows == 1)
{
	$_SESSION['flash_message'] = "Username already exists.. Try again with a different username";
	header("location: loginn.php");
	exit();
}
mysql_query("INSERT INTO member(fname, lname, username, password)VALUES('$fname', '$lname', '$username', '$password')");
$_SESSION['flash_message'] = "Registered successfully";
header("location: loginn.php?remarks=success");
mysql_close($conn);
?>