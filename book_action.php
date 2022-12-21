<?php

include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$type = $_POST['type'];
$no = $_POST['number'];

if ($source == $dest)
{
  echo"<h1><center>Source & Destination cannot be same, refill the details.</center></h1><br><br>";
  echo'<center>

';
}
else{
	echo "<h1><center><b>Route Selection</center></b></h1>";
$sql_price="SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `type` LIKE '$type' AND `class` = '$class'";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = $row["Price"]  ;
$Route = $row["Route"];
$final=$final*$no;
echo "  <br><br><br><h3><center>Total <b>".$class." Class , ".$type."</b> Journey type fare from <b>".$source." to ".$dest."</b> is  : ₹ <b>".$final."</b> and route via <b>".$source." ".$Route." ".$dest."</b></center></h3><br><br>";
echo'
<style>
  .btn-grad {background-image: linear-gradient(to right, #00f190 0%, #00a0fc  51%, #00f190  100%)}
 .btn-grad {
    padding: 15px 45px;
    text-align: center;
    transition: 0.5s;
    background-size: 200% auto;
    color: #000;
    font-size: 20px;
    font-family: Roboto;
    font-weight: bold;
    border: none;
    border-radius: 100px;
    display: block;
  }

  .btn-grad:hover {
    background-position: right center; /* change the direction of the change here */
    color: #000;
  }
</style>
<center>
<td><form action="pay.php"><button class="btn-grad"><span>Proceed</span></a></td></button></form>
';
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['Class']=$class;
$_SESSION['Type']=$type;
$_SESSION['NoOfpass']=$no;
$_SESSION['Route']=$source.$Route.$dest;


}

?>
<br>
<center>
    <td>
        <form action="book.php"><button class="btn-grad"><span>Go back</span></a>
    </td></button></form><br><br>

    <?php include 'footer.php';
?>