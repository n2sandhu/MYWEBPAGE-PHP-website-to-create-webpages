<?php
	session_start();
	if (!isset($_SESSION["login_status"]) || ($_SESSION["login_status"] != true) )
	{

		header("Location:/ice/login.html");
		exit();
	}
	$user = $_SESSION['username'];

		
?>