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
    margin-top: 30px;
    margin-bottom: 50px;
    padding-top: 50px;
    padding-right: 50px;
    padding-bottom: 50px;
    padding-left: 150px;
    align-content: center;
}

.button {
    padding: 15px 32px;
    align-content: left;
    color: white;
    background-color: black;
}

#number {
    overflow: hidden;
    width: 600px;
}

.btn-grad {background-image: linear-gradient(to right, #00f190 0%, #00a0fc  51%, #00f190  100%)}
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


input[type=number] {
    width: 250px;
}
</style>


</script>
</head>

<body>
    <form method='post' action='busaction.php' align='center'>
        <div class="container">
            <section id="form" class="formborder">
                <div class="container2">
                    <form>



                        <div class="form-row row justify-content-around" name="source">
                            &nbsp

                            <div class="form-group col-md-5" name="source">
                                <label for="inputEmail4">SOURCE</label>
                                <select id="inputState" class="form-control" name="source">
                                    <option>Thane Railway Station</option>
                                    <option>Dadoji Kondadev Stadium</option>
                                    <option>Court Naka</option>
                                    <option>Kalwa Naka</option>
                                    <option>Shivaji Maharaj Hospital</option>
                                    <option>Vitawa / Paryache Maidan</option>
                                    <option>Sha Damodar Vitavkar Marg</option>
                                    <option>Ganpati Pada</option>
                                    <option>Mukund Company</option>
                                    <option>Ganesh Nagar</option>
                                    <option>Digha Gaon</option>
                                    <option>MSEB</option>
                                    <option>Reliable Plaza</option>
                                    <option>Airoli Naka</option>
                                    <option>Airoli Railway Station</option>
                                    <option>Bharat Bijali</option>
                                    <option>Siemens Company</option>
                                    <option>Rabale Police Station</option>
                                    <option>Rabale Naka</option>
                                </select>

                                <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
                            </div>






                            <div class="form-group col-md-5" name="dest">
                                <label for="inputPassword4">
                                    DESTINATION</label>
                                <select id="inputState" class="form-control" name="dest">

                                    <option>Thane Railway Station</option>
                                    <option>Dadoji Kondadev Stadium</option>
                                    <option>Court Naka</option>
                                    <option>Kalwa Naka</option>
                                    <option>Shivaji Maharaj Hospital</option>
                                    <option>Vitawa / Paryache Maidan</option>
                                    <option>Sha Damodar Vitavkar Marg</option>
                                    <option>Ganpati Pada</option>
                                    <option>Mukund Company</option>
                                    <option>Ganesh Nagar</option>
                                    <option>Digha Gaon</option>
                                    <option>MSEB</option>
                                    <option>Reliable Plaza</option>
                                    <option>Airoli Naka</option>
                                    <option>Airoli Railway Station</option>
                                    <option>Bharat Bijali</option>
                                    <option>Siemens Company</option>
                                    <option>Rabale Police Station</option>
                                    <option>Rabale Naka</option>
                                </select>

                                <!--<input type="password" class="form-control" id="inputPassword4" placeholder="TO">-->
                            </div>


                            <div class="form-row row justify-content-aroundd">
                                <div class="form-group col-md-10">
                                    <center><label for="inputState">
                                            QUANTITY
                                        </label></center>
                                    <center> <input type="number" name="number" required min="1" max="5"></center>
                                <br>
                                    <button class="btn-grad" type="submit" class="button" name="login_submit">Proceed</button>

                                </div>
                    </form>
                </div>

            </section>
        </div>





</body>

<?php include 'footer.php';
?>

</html>