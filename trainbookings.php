<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<div>

</div>
<style>
table#database_table {
    font-size: 16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
}

#database_table td,
#database_table th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#database_table tr:nth-child(even) {
    background-color: #f2f2f2
}

#database_table th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: #323232;
    color: white;
}
</style>


<head>
    <title>TicketX</title>

</head>

<body>
    <h2>
        <center><b>Train Bookings</center></b>
    </h2>

    <div class="container">
        <br />
        <table id="database_table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Date & Time </th>
                    <th>Booking ID </th>
                    <th>Name</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Class</th>
                    <th>Type</th>
                    <th>Amount Paid</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>

<?php
$sql_transactions="SELECT * FROM `transactions`  WHERE  `email`='".$_SESSION['email']."' " ;
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){

echo'<tr class="class="table table-striped table-bordered"">
        <td>'.$row["Date"].'</td>
        <td>'.$row["T_No."].'</td>
        <td>'.$row["Name"].'</td>
        <td>'.$row["source"].'</td>
        <td>'.$row["dest"].'</td>
        <td>'.$row["Class"].'</td>
        <td>'.$row["Type"].'</td>
        <td>₹&nbsp&nbsp'.$row["Amt"].'</td>
        <td><a  href="print.php?pid='.$row["T_No."].' " target="_blank">View</a></td>
       

';
}
?>
            </tbody>
        </table>
    </div>
    <script>
    $(document).ready(function() {
        $('#database_table').DataTable({
            "order": [
                [1, "desc"]
            ]
        });
    });
    </script>