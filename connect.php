<?php
$hostname 	= 'ticketx-db';
$username	= 'root';
$password	= 'passpass';
$dbname		= 'train';
$connect	=  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
