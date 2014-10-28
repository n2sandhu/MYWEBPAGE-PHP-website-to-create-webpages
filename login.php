<?php
session_start();
include "connection.php";
$username = mysql_real_escape_string($_POST['username']);
$password = $_POST['password'];

$query = "SELECT mem_id,role from member where username='$username' and password ='$password'";
$query_result =  mysql_query($query,$conn);
$rows = mysql_num_rows($query_result);
$rowr = mysql_fetch_row($query_result);
$row = mysql_fetch_array($query_result);
echo $rowr[1];
//exit();

if($rows == 1 )
{
	$_SESSION['login_status'] = true;
	$_SESSION['username'] = $username;
	if ($rowr[1] == "admin") 
	{
		header('Location: index.php');
	}
	else
	{
		header('Location: index.php');
	}
}
else
{
	$_SESSION['flash_message'] = 'The username or the password is incorrect !!! Please try again or register';
	header('Location: loginn.php');
}
//usere is logging out
	if(isset($_GET["logout"]) )
	{
		session_destroy();
		header("Location: loginn.php");
	}
?>