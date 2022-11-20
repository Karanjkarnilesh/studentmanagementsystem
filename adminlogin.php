<?php
session_start();
if(isset($_SESSION['uid']))
{
header("location:admin/admindashboard.php");
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $rawPassword = $_POST['password'];

    include 'connection/conn_db.php';

    $sql = "SELECT * FROM admin WHERE email='$email'";
    $result=mysqli_query($con,$sql);
   $row= mysqli_num_rows($result);
    if($row<1){
        ?>
        <script>alert('User not Found')
    window.open('adminlogin.php','_self')
    </script>
        <?php
    }
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $password=$row['password'];
    $id=$row['id'];

    if(password_verify($rawPassword,$password))
    {
        
        $_SESSION['uid']=$id;
        header('location: admin/admindashboard.php');
    }else{
        ?>
        <script>alert('Username or Password is not correct');
    window.open('adminlogin.php','_self');
    </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'mainview/head.html' ?>
    <title> Admin Login </title>
</head>

<body>
    <?php include 'mainview/navbar.html' ?>
    <div class="container">
        <div class="form-center">
            <h1> Admin Login</h1>
            <form method="post" action="">
                <div class="mb-2">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="mb-2">
                    <input class="form-control" type="text" name="password" placeholder="Password">
                </div>
                <div class="mb-2">
                    <input type="submit" name="login" value="login" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div>
            <a href="index.php"><input type="button" class="btn btn-primary"  value="Back To Home"></a>
        </div>
    </div>
</body>

</html>