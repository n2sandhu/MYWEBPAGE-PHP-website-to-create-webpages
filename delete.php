<?php
session_start();
include('connection.php');
$fname=$_POST['namely'];
$filename = $_POST['filename'];
$file = "template1/".$filename;
mysql_query("DELETE FROM website WHERE Website_Name = '$fname' ");
mysql_query("DELETE FROM website_info WHERE title = '$fname' ");
unlink($file);
header("location: admin.php");
mysql_close($conn);
?>