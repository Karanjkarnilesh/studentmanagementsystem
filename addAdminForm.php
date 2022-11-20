<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $rawPassword = $_POST['password'];

    include 'connection/conn_db.php';

    $password = password_hash($rawPassword, PASSWORD_DEFAULT);
    $data = [
        'email' => $email,
        'password' => $password
    ];
    $sql = "INSERT INTO admin(email,password) VALUES('$email','$password')";
    $stmt = mysqli_query($con,$sql);
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../mainview/head.php' ?>
    <title>Add Admin Form </title>
</head>

<body>
    <?php include '../mainview/navbar.html' ?>
    <div class="container">
        <div class="form-center">
            <form method="post" action="">
                <div class="mb-2">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="mb-2">
                    <input class="form-control" type="text" name="password" placeholder="Password">
                </div>
                <div class="mb-2">
                    <input type="submit" name="submit" value="login" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</body>

</html>