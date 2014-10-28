<?php
	session_start();
	if (!isset($_SESSION["login_status"]) || ($_SESSION["login_status"] != true) )
	{
		$_SESSION['flash_message'] ='You need to log in to access this page';
		header("Location:loginn.php");
		exit();
	}
	$user = $_SESSION['username'];

		
?>