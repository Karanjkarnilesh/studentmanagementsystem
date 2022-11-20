<?php


session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location:../adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../mainview/head.html' ?>
    <title>Update Student</title>
</head>
<?php include '../mainview/adminnavbar.php' ?>
<div class="container">
    <div class="form-center">
        <h1>Update Student</h1>

        <form action="" method="post">

            <div class="mb-3">
                <label for="standard" class="form-label">Enter Standard</label>
                <input type="number" class="form-control" id="standard" placeholder="Standard" name="standard" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="name" placeholder="Student Name" name="name" required>
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-success" id="submit" name="submit" value="Search" required>
            </div>

        </form>
    </div>

    <table class="table table-success table-striped">
  <tr>
      <th>NO.</th>
      <th>Image</th>
      <th>Name</th>
      <th>ROll No</th>
      <th>Edit</th>
  </tr>
  <?php
  if(isset($_POST['submit']))
  {
include('../connection/conn_db.php');
$standard=$_POST['standard'];
$username=$_POST['name'];
$sql="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$username%'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
    echo "<tr><td colspan='5'>No Record Found</td></tr>";
}
else{
    $count=0;
    while($data=mysqli_fetch_assoc($run))
    {
        $count++;
        ?>
        <tr style="align-items: center;">
        <td><?php echo $count?></td>
        <td><img src="../theme/<?php $data['image']?>" style="max-width: 100px;"></td>
        <td><?php echo $data['name']?></td>
        <td><?php echo $data['rollno']?></td>
        <td><a href="../deleteStudent.php?sid=<?php echo $data['id']?>">Delete</a></td>
        </tr>
<?php
    }
}


  }
  
  
  ?>
</table>
</div>

<body>

</body>

</html>