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
tr{
    border-style:hidden;
}
    </style>
    <title>TicketX</title>
</head>
<div>
    <center><img src="icons/admin.png" />
</div>
<br>
<br>

<body">
    <h1>
        <center><b>Admin Login</center></b>
    </h1>

    <form method='post' action='adminauthenticate.php'>
        <div>
            <table align="center" class="table">
                <tr>
                    <td><input style="border-radius: 100px;" type="email" name="email" placeholder="Email" maxlength='50'></td>
                </tr>
                <tr>
                    <td><input style="border-radius: 100px;" type="password" name="password" placeholder="Password" maxlength='50'></td>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <center><button type='Submit'class="btn-grad"name='login_submit'>Login</button></center>
                    </td>
                </tr>
            </table>


            </table>
    </form>

</body">

</html>