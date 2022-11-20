<?php

if (isset($_POST['submit'])) {
    include 'connection/conn_db.php';
    $roll = $_POST['rollno'];
    $username = $_POST['username'];
    $city = $_POST['city'];
    $pnumber = $_POST['pnumber'];
    $standard = $_POST['standard'];
    $imagename = $_FILES['image']['name'];
    $tempname = @$_FILES['image']['temp_name'];
    move_uploaded_file($tempname, "theme/image/$imagename");

    $sql = "INSERT INTO `student`(`name`,`rollno`,`standard`,`pnumber`,`city`,`image`) VALUES('$username','$roll','$standard','$pnumber','$city','$imagename')";
    
    $run = mysqli_query($con, $sql);
    if ($run == true) { ?>
        <script>
            alert('Data inserted Successfully')
        </script>
<?php

    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'mainview/head.html' ?>
    <title>Add Student</title>
</head>

<body>
    <?php include 'mainview/adminnavbar.php' ?>
    <div class="container">
        <?php include 'student/add_form.php' ?>
    </div>
    <?php include 'mainview/footer.html' ?>
</body>

</html>
