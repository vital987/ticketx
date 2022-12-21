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
#font {
    font-family: Montserrat, sans-serif;
    font-size: 18px !important;

}
</style>

<link rel='stylesheet' href='index.css'>


</head>
<?php
   $result = mysqli_query($connect , "SELECT * FROM `bustransactions` WHERE `email`='".$_SESSION['email']."' ORDER BY `T_No.` DESC LIMIT 1");
  while ($row = mysqli_fetch_assoc($result)):
    $tno = $row["T_No."];
    $_SESSION['tno']= $tno ;
  ?>

<body>
    <h2 align="center"><b>Booking Summary</b>
    </h2>
    <br>


    <table class="table table-striped" id="font">

        <tr>
            <th>Ticket No</th>
            <td><?php echo $row['T_No.']; ?></td>
        </tr>

        <tr>
            <th>Name</th>
            <td><?php echo $_SESSION['name'] ?></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><?php echo $_SESSION['email'] ?></td>
        </tr>



        <tr>
            <th>Source Station</th>
            <td><?php echo $_SESSION['source'] ?></td>
        </tr>

        <tr>
            <th>Destination</th>
            <td><?php echo $_SESSION['dest'] ?></td>
        </tr>

        <tr>
            <th>Amount</th>
            <td>₹&nbsp&nbsp<?php echo $_SESSION['final'] ?></td>
        </tr>


    </table>



    <table align="Center">
        <tr>
            <td>
            <td><a href="busprint.php?pid='<?php echo $_SESSION['tno']?>' " target="_blank"><button
                        class="btn-grad">Print</button></a></td>
            </td>
            </td>
        </tr>
</body>
<?php endwhile; ?>


</html>
