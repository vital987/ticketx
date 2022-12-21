<?php
include 'connect.php';
include 'head2.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
?>

<html>

<head>
    <style>
    .formm {
        font-family: Montserrat, sans-serif;
        font-size: 18px !important;

    }
    </style>
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
    <title> Registration Page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="formm">
        <h2 align="center"><b>Enter Payment Details</b> </h2>


        <!--<center><img src="logohead.png" width='35%'></center> -->
        <form method='post' action='buspayaction.php'>
            <table align="center">
                <tr>
                    <td colspan='2'><input style="border-radius: 100px;" type="Number" name="cno" placeholder="Card number" maxlength='50'>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'><input style="border-radius: 100px;" type="Text" name="name" placeholder="Cardholder name" maxlength='50'></td>
                </tr>
                <tr>
                    <td><input style="border-radius: 100px;" type="Number" name="Em" placeholder='MM' maxlength='2'></td>
                    <td><input style="border-radius: 100px;" type="Number" name="Ey" placeholder='YY' maxlength='2'></td>
                </tr>
                <tr>
                    </h3>
                    <td colspan='2'><input style="border-radius: 100px;" type="Password" name="Cvv" placeholder="CVV" maxlength='3'></td>
                </tr>
                <tr>
                    <td colspan='2'><input style="border-radius: 100px;" type="Password" name="Pin" placeholder="PIN" maxlength='4'></td>
                </tr>
                <tr>
                    <td colspan='3'>
                        <center><button class="btn-grad" type='Submit'
                                name='register_submit'>Complete Payment</Button></center>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <br>


    </div>
    <?php include 'footer.php';
?>


</html>