<?php
include "auth.php";
include('connection.php');
$heading = $_POST['heading'];
$desc = $_POST['desc'];
$username = $_SESSION['username'];
mysql_query("INSERT INTO blogs(heading, descp ,username) VALUES('$heading' , '$desc' , '$username')");
header("location: blog.php");
mysql_close($conn);

?>