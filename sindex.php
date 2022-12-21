<?php
include 'connect.php';
include 'head2.php';
?>
<html>

<head>
    <link rel='stylesheet' href='index.css'>
    <style>
    .table {
        font-family: Montserrat, sans-serif;
    }
    </style>
    <title>Ticket-X</title>
</head>
<div>
    <center><img src="icons/login.png" /></center>
</div>

<h2>
    <center><b>User Login</center></b>
</h2>
<form method='post' action='authenticate.php'>
    <div>
        <table align="center" class="table" id="table1">
            <tr class="notrborder">
                <td><input style="border-radius: 100px;" type="email" name="email" placeholder="Email" maxlength='50'>
                </td>
            </tr>
            <tr class="notrborder">
                <td><input style="border-radius: 100px;" type="password" name="password" placeholder="Password"
                        maxlength='50'></td>
                </td>
            </tr>
            <tr>
                <td colspan='2'><button type='Submit' class="btn-grad" name='login_submit'><b>Login</b></button></td>
            </tr>
            <tr class="notrborder">
                <td colspan='2'><a class="btn-grad" href="register.php"><b class="custxt">Register</b></a></td>
            </tr>
        </table>
    </div>
    <div align="center">
        <br>

    </div>

    </table>
</form>

</body style="background-color: F5F1F0;">
<?php include 'footer.php';
?>

</html>