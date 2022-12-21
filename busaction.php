<?php


include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}

include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];

$no = $_POST['number'];

if ($source == $dest)
{
  echo"<h1><center>Selected source and destination same , Please refill the details  </center></h1><br><br>";
  echo'<center>

<td><form action="bookBUS.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Go back</h3></span></a></td></button></form><br><br>';
}
else{
$sql_price="SELECT * FROM `pricebus` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = $row["Price"]*$no  ;
$busnum = $row["Bus_No."]  ;

echo "<br><br><br><h3><center>Total fare of bus number <b>".$busnum."</b> from <b>".$source." to ".$dest."</b> is  : ₹ <b>".$final."</b> </center></h3><br><br>";
echo'<center>
<td><form action="buspay.php"><style>.btn-grad {background-image: linear-gradient(to right, #00f190 0%, #00a0fc  51%, #00f190  100%)}
.btn-grad {
   padding: 15px 45px;
   text-align: center;
   text-transform: uppercase;
   transition: 0.5s;
   background-size: 200% auto;
   color: #000;    
   font-family: Roboto;
   font-weight: bold;
   border: none;
   border-radius: 100px;
 }

 .btn-grad:hover {
   background-position: right center; /* change the direction of the change here */
   color: #000;
 }

</style><button class="btn-grad"><span>Checkout</span></a></td></button></form><br><br>

<td><form action="bookBUS.php"><button class="btn-grad" type="submit"; align=center;><span>Go&nbsp;back</span></a></td></button></form><br><br>';
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['busnum']=$busnum;
$_SESSION['NoOfpass']=$no;
}
?>