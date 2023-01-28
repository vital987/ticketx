<?php
$hostname 	= 'db-svc';
$username	= 'root';
$password	= 'adminx123';
$dbname		= 'train';
$connect	=  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
