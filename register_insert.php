<!-- Script to add newly registered people in to the Database -->

<style>
.table {
    font-family: Montserrat, sans-serif;
    align-items: center
}
</style>
<link rel="stylesheet" type="text/css" href="index.css">


<?php
include 'connect.php';
include 'head2.php';

$name = $_POST['name'];
$email = $_POST['email'];
$dob  = $_POST['dob'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];
$Phone = $_POST['phone'];

$sql_userdatabase="Insert into userdatabase(Name ,Email , Gender, password , dob , Phone) values ('$name' , '$email' , '$Gender', '$password', '$dob', '$Phone')";

if(mysqli_query($connect, $sql_userdatabase) == true)
{
	echo "<center><h1><b>You have been sucessfully registered<b> </h1></center><br><br>";
	echo '<center><table><tr><td><a href="sindex.php"><button class="btn-grad"><span>Login</span></button></a></td></tr></table></center>';
}
else
{
	echo "<center><h1><b>Registration unsuccessful, try again.<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="register.php"><button class="btn-grad"><span>Register</span></button></a></td></tr></table></center>';}

?>