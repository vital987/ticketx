<style>
.table {
    font-family: Montserrat, sans-serif;
    align-items: center
}
</style>
<link rel="stylesheet" type="text/css" href="index.css">
<?php
include 'connect.php' ;
include 'head2.php';

$email = $_POST['email'];
$password = $_POST['password'];
$sql_admindatabase = "Select * from admindatabase where email = '$email' and password='$password' ";
$result_admindatabase = mysqli_query($connect, $sql_admindatabase);
if(mysqli_num_rows($result_admindatabase) <= 0)
{
echo "<center><h1><b>Incorrect Password.<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="adminindex.php"><button class=""btn-grad"><span>Admin Login</span></button></a></td></tr></table></center>';
}

else
{
	
	header("location:admin.php");
	$row_admindatabase = mysqli_fetch_array($result_admindatabase);
	session_start();
	$_SESSION['email']=$email;
	$_SESSION['name']=$row_admindatabase['Name'];
	$_SESSION['userid']=$row_admindatabase['UserID'];
	$_SESSION['log']= '1' ;
}
?>