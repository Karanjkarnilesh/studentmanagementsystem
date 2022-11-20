<?php

// if (isset($_SESSION['uid'])) {
//   echo "";
// } else {
//   header('location:../adminlogin.php');
// }
?>
<!doctype html>
<html lang="en">

<head>
  <?php include '../mainview/head.html' ?>
  <title>Dashboard</title>
</head>

<body>

  <?php include '../mainview/adminnavbar.php' ?>
  <div class="container">
    <div class="form-center">
      <a href="../addStudent.php"><button type="button" class="btn btn-secondary">Insert Student</button></a>
      <a href="../student/updatedata.php"><button type="button" class="btn btn-secondary">Update Student</button></a>
      <a href="../student/delete.php"><button type="button" class="btn btn-secondary">Delete Student</button></a>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  <?php include '../mainview/footer.html' ?>
</body>

</html>