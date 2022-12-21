<?php
include 'head2.php';

session_start();
?>
<html>

<head>
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
</head>

<body">
    <?php
session_destroy();
echo '<center><h2>Thank You for using TicketX<h2></center><br>';
echo '<center><table><tr><td><A href="index.php"><button class="btn-grad">Home</button></a></td></tr></table></center>';
?>
</body">

</html>
<?php include 'footer.php';
?>
