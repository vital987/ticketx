<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
$name = $_POST['name'];

$sql_transactions="INSERT INTO bustransactions(email,source,dest,Name,Bus_No,NoOfpass,Amt)VALUES ('".$_SESSION['email']."','".$_SESSION['source']."','".$_SESSION['dest']."','" . $_SESSION['name'] . "','".$_SESSION['busnum']."','".$_SESSION['NoOfpass']."','".$_SESSION['final']."')";

if(mysqli_query($connect, $sql_transactions) == true)
{
echo "<h1><center>Your Ticket has been sucessfully booked<center></h1><br>";

}
header("location: busbookdone.php");
exit;
?>
