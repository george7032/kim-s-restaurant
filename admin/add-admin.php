<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="fullname" placeholder="What is your name">
                    </td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td>
                        <input type="text" name="username" placeholder="Enter Username">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include('partials/footer.php');?>

<?php
//process the data from the form to the database
//check if the button is clicked or not

if(isset($_POST['submit']))
{
    //get data from the forms
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);//password encription with md5

    //sql query to save the data in the database
    $sql = "INSERT INTO tbl_admin SET
    fullname = '$fullname',
    username = '$username',
    password = '$password'
    ";

    //exceute query and add data in db


    //$res = mysqli_query($conn, $sql) or die(mysqli_error());


}
?>

