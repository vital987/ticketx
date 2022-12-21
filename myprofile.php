<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<h2>
    <center><b>Profile Details</center>
    </b>
</h2>

</script>
<br>


<table class="table table-striped">


    <tr>
        <th>Name</th>
        <td><?php echo $_SESSION['name'] ?></td>
    </tr>

    <tr>
        <th>Email</th>
        <td><?php echo $_SESSION['email'] ?></td>
    </tr>

    <tr>
        <th>User Id</th>
        <td><?php echo $_SESSION['userid'] ?></td>
    </tr>

    <tr>
        <th>Gender</th>
        <td><?php echo $_SESSION['Gender'] ?></td>
    </tr>

    <tr>
        <th>Date of Birth</th>
        <td><?php echo $_SESSION['dob'] ?></td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><?php echo $_SESSION['phone'] ?></td>
    </tr>


</table>
<?php include 'footer.php';
?>