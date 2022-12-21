<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>


<style>
.container {
    border-spacing: 10px;

    font-family: Montserrat, sans-serif;
    font-size: 18px !important;
    border: 2px solid grey;
    margin-top: 50px;
    margin-bottom: 200px;
    padding-top: 50px;
    padding-right: 120px;
    padding-bottom: 50px;
    padding-left: 150px;
    align-content: center;

}
</style>

<html>

<head>
    <link rel='stylesheet' href='index.css'>
    <br><br>
    <h1 text-transform: capitalize;>
        <center><b>TicketX Booking Portal</center></b>
    </h1>

    <div class="container">

        <td><a href='book.php'><button class="btn-grad"><img src="icons/head-train.png" width=32
                        height=32 />&nbsp&nbspBook Train Tickets </button></a></td>
        </tr>
        <br> <br>

        <tr>

            <td><a href='bookbus.php'><button class="btn-grad"><img src="icons/head-bus.png" width=32
                            height=32 />&nbsp&nbspBook Bus Tickets</button></a></td>
            </td>
        </tr>
        </table>
        </tr>
    </div>
    <?php include 'footer.php';
?>

</html>