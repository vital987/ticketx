<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
$name = $_POST['name'];

$sql_transactions="INSERT INTO transactions(email,source,dest,Name,Class,Type,NoOfpass,Amt,Route)VALUES ('".$_SESSION['email']."','".$_SESSION['source']."','".$_SESSION['dest']."','" . $_SESSION['name'] . "','".$_SESSION['Class']."' ,'".$_SESSION['Type']."','".$_SESSION['NoOfpass']."', '".$_SESSION['final']."','".$_SESSION['Route']."')";

if(mysqli_query($connect, $sql_transactions) == true)
{
echo "<h1><center>Your Ticket has been sucessfully booked<center></h1><br>";

}
header("location: bookdone.php");


?>
<?php include 'footer.php';
?>
