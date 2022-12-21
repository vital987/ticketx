<style>
.ticket {
    font-family: Montserrat, sans-serif;
}

.ticketdesign {
   background: linear-gradient(to bottom, rgba(2,232,137,1) 0%, rgba(7,142,222,1) 19%, #d9d9d9 19%, #d9d9d9 100%);
    height: 29em;
    float: left;
    object-position: center;
    padding: 1.2em;
    margin-top: 100px;
    border-bottom: solid 20px #0080ff;
}


.ticketstructure {
    align-content: center;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    width: auto;
}

h1 {
    font-size: 40px;
    margin-top: 0;
    font-family: Montserrat, sans-serif;


}

h2 h3 {
    font-size: 20px;
    margin-top: 0;
    font-family: Montserrat, sans-serif;
    color: black;
}

span {
    color: black;
}

#options {
    align-content: center;
    align-items: center;
    text-align: center;
}

.printable {
    padding-left:10px;
    text-align: left;
}
</style>

     <?php
          include 'connect.php';
		  $pid=$_GET['pid'];
			$sel="SELECT * FROM `bustransactions` WHERE `T_No.` =$pid";
			$rs=$connect->query($sel);
			while($row=$rs->fetch_assoc())
			{

				?>


     <div class="ticket " id="printable">
         <div class="ticketdesign ticketstructure">

             <h1 align="center">
             <b style="font-family: Roboto; font-weight: bold; ">
            <img src="icons/head-bus.png" />&nbsp;TicketX<img src="icons/head-train.png" />
            </b>
            </h1>
             <div class="title">
                 <h2 align="left"><span>TicketX ID : &nbsp; <?php echo $row['T_No.'] ?></span></h2>
                 <h2 align="left"><span>Time : &nbsp <?php echo $row['Date'] ?></span></h2>
                 <h2 align="left"><span>Name : &nbsp <?php echo $row['Name'] ?></span></h2>
                 <h2 align="left"><span>Bus No : &nbsp <?php echo $row['Bus_No'] ?></span></h2>
                 <h2 align="left"><span>No of Passengers :&nbsp <?php echo $row['NoOfpass'] ?> </span></h2>
                 <h2 align="left"><span>Amount : &nbsp ₹<?php echo $row['Amt'] ?> </span></h2>
                 <h2 align="left"><span>From: <?php echo $row['source'] ?><br>To: <?php echo $row['dest'] ?> </span></h2>
                 <h3 align="center"><span>Happy Journey</span></h3>
             </div>
         </div>
     </div>


     <?php
		}
		?>

     </div>
