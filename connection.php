<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password ="";
$mysql_database = "ice";
$prefix = "";
$conn = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to db");
$db_select = mysql_select_db($mysql_database,$conn) or die ("Could not select db");

?>