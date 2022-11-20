<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location:adminlogin.php');
}
include 'connection/conn_db.php';
if (isset($_GET['sid'])) {
    $id = $_GET['sid'];
    $sql = "DELETE FROM `student` WHERE `id`='$id'";
    $run = mysqli_query($con, $sql);
    if ($run == true) { ?>
        <script>
            alert("Student Deleted Successfully");
        </script>
<?php
        header('location:adminlogin.php');
    }
}
?>