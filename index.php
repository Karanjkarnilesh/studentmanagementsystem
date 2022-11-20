<!doctype html>
<html lang="en">

<head>
  <?php include 'mainview/head.html' ?>
  <title>Student Management System</title>
</head>

<body>

  <?php include 'mainview/adminnavbar.php' ?>
  <div class="container">
    <div class="form-center">
      <form method="post" action="">
        <table class="table table-striped">
          <tr>
            <td colspan="2">Student Information</td>
          </tr>
          <tr>
            <td>Choice Standard</td>
            <td>
              <select class="form-select" name="standard" aria-label="Default select example">
                <option selected>Standard</option>
                <option value="1">1th</option>
                <option value="2">2th</option>
                <option value="3">3th</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
                <option value="9">9th</option>
                <option value="10">10th</option>
                <option value="11">11th</option>
                <option value="12">12th</option>
              </select>
            </td>

          </tr>

          <tr>
            <td>Enter Rollno</td>
            <td><input class="form-control" type="text" name="rollno" placeholder="enter Roll no"></td>

          </tr>
          <tr>
            <td colspan="2"><input type="submit" class="btn btn-success" name="submit" value="Get Info"></td>
          </tr>
        </table>
      </form>
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

  <?php include 'mainview/footer.html' ?>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
  $standerd = $_POST['standard'];
  $rollno = $_POST['rollno'];
  include 'connection/conn_db.php';
  include 'function.php';
  showDetails($standerd, $rollno);
}

?>