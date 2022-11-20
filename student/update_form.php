<?php 
session_start();
if(isset($_SESSION['uid']))
{
    echo "";

}else{
    header("location: ../adminlogin.php");
}
?>
<?php
include '../connection/conn_db.php';

if(isset($_GET['sid']))
{
    $id=$_GET['sid'];
    $sql="SELECT * FROM `student` WHERE `id`='$id'";
    $run=mysqli_query($con,$sql);
    $data=mysqli_fetch_assoc($run);
}
?>
<?php
if (isset($_POST['submit'])) {
    $roll = $_POST['rollno'];
    $username = $_POST['username'];
    $city = $_POST['city'];
    $pnumber = $_POST['pnumber'];
    $standard = $_POST['standard'];
    $imagename = $_FILES['image']['name'];
    $tempname = @$_FILES['image']['temp_name'];
    $sid=$_GET['sid'];
    move_uploaded_file($tempname, "theme/image/$imagename");

    $sql = "UPDATE `student` SET `name`='$username',`rollno`='$roll',`standard`='$standard',`pnumber`='$pnumber',`city`='$city',`image`='$imagename' WHERE `id`='$sid'";
    $run = mysqli_query($con, $sql);
   
    if ($run == true) { ?>
        <script>
            alert('Data Updated Successfully');
            
        </script>
<?php
 header('location:updatedata.php')?>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include '../mainview/head.html'?>
    <title>Update User</title>
</head>
<body>
    <?php include '../mainview/adminnavbar.php'?>
    <div class="container">
        <div class="">
            <form method="post" action="" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="roll" class="form-label">rollNo</label>
        <input type="text" class="form-control" id="roll" placeholder="RollNo" name="rollno" value="<?php echo $data['rollno']?>">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" placeholder="Full Name" name="username" value="<?php echo $data['name']?>">
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" placeholder="City" name="city" value="<?php echo $data['city']?>">
    </div>
    <div class="mb-3">
        <label for="pnumber" class="form-label">Parent Contact</label>
        <input type="text" class="form-control" id="pnumber" placeholder="Parent Contoct number" name="pnumber" value="<?php echo $data['pnumber']?>">
    </div>
    <div class="mb-3">
        <label for="standerd" class="form-label">Standard</label>
        <input type="number" class="form-control" id="standerd" placeholder="Standard" name="standard" value="<?php echo $data['standard']?>">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" name="image" id="image" value="<?php echo $data['image']?>">
    </div>
    <div class="mb-3">
        <input type="hidden" name="sid" value="<?php echo $data['id']?>">
        <input type="submit" class="form-control btn btn-success" id="submit" name="submit" value="submit">
    </div>
            </form>
        </div>
    </div>
</body>
</html>