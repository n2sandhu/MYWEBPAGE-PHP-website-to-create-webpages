<?php
$myFile = "filename.php";
$fh = fopen($myFile, 'w') or die("error");
$stringData = "file_get_contents('template_new.php')";
fwrite($fh, $stringData);
header( 'Location: .. /index.php' ) ;
?>