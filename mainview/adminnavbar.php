<?php 
session_start();
if(isset($_SESSION['uid']))
{
  echo "";
}else{
  header('loation: ../adminlogin.php');
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <div class="title" style="text-align: center;">
      <h1 style="align-items: center;">Welcome To Student Management System</h1>
    </div>
    <?php if(@$_SESSION['uid']){?>
      <div class="" style="float: right;">
        <a href="../logout.php">
          <button class="btn btn-success" type="button" name="adminlogin">logout</button></a>
      </div>
      <?php }else {?>
      
    <div class="" style="float: right;">
      <a href="adminlogin.php">
        <button class="btn btn-success" type="button" name="adminlogin">Adminlogin</button></a>
    </div>
    <?php } ?>
  </div>
</nav>