<!--Registration Page-->


<?php     
include 'connect.php';                           
include 'head2.php'
?>



<html>

<head>
    <style>
    .table {
        font-family: Montserrat, sans-serif;
    }
    </style>
    <link rel='stylesheet' href='index.css'>
    <title> Registration Page </title>
</head>
<div>
    <center><img src="icons/signup.png" /></center>
</div>
<div>
    <h2>
        <center><b>User Registeration</center></b>
    </h2>

    <body>
        <form method='post' action='register_insert.php'>
            <table align="center" class="table" id="table1">
                <tr class="notrborder">
                    <td colspan='3'><input style="border-radius: 100px;" type="Text" name="name" placeholder="Name"
                            maxlength='50' required></td>
                </tr>
                <tr class="notrborder">
                    <td colspan='3'><input style="border-radius: 100px;" type="email" name="email" placeholder="Email"
                            maxlength='50' required></td>
                </tr>
                <tr class="notrborder">
                    <td><input type="Radio" name="Gender" value="M">
                        <p style="font-family: Roboto; font-weight: bold; color: #e8eeef">Male</p>
                    </td>
                    <td><input type="Radio" name="Gender" value="F" required>
                        <p style="font-family: Roboto; font-weight: bold; color: #e8eeef">Female</p>
                    </td>
                    <td><input type="Radio" name="Gender" value="T" required>
                        <p style="font-family: Roboto; font-weight: bold; color: #e8eeef">Transgender</p>
                    </td>
                </tr>
                <tr class="notrborder">
                    <td colspan='3'><input style="border-radius: 100px;" type="Text" name="dob" maxlength='50'
                            placeholder='DOB (YYYY-MM-DD)' required></td>
                </tr>
                <tr class="notrborder">
                    <td colspan='3'><input style="border-radius: 100px;" type="password" name="password"
                            placeholder="Password" maxlength='50' required></td>
                    </td>
                </tr>
                <tr class="notrborder">
                    <td colspan='3'><input style="border-radius: 100px;" type="tel" name="phone" placeholder="Phone"
                            maxlength='10' required></td>
                    </td>
                </tr>
                <tr>
                    <td colspan='3'>
                        <center><button class="btn-grad" type='Submit'
                                style="background-color:black ; border-color:black" name='register_submit'
                                required>Submit</Button></center>
                    </td>
                </tr>
                <tr class="notrborder">
                    <td colspan='3'><a href="sindex.php" class="btn-grad">Already Registered? Login Here</a></td>
                </tr>
</div>
</table>
</form>
</body>



<?php include 'footer.php';
?>

</html>