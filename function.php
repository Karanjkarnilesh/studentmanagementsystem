<?php
  
function showDetails($standerd,$rollno){
    include ("connection/conn_db.php");
    $sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standerd'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0){
    $data=mysqli_fetch_assoc($run);
    ?>
<table class="table table-success table-striped">
 <tr>
     <th colspan="3">Student Details</th>
 </tr>
 <tr>
     <td rowSpan="5" ><img src="theme/image/<?php echo $data['image']?>"></td>
 <th> Roll No</th>
 <td><?php echo $data['rollno']?></td>
    </tr>
    <tr>
        <th>
Name</th>
<td><?php echo $data['name']?></td>
    </tr>
    <tr>
        <th>
City</th>
<td><?php echo $data['city']?></td>
    </tr>
    <tr>
        <th>
Standard</th>
<td><?php echo $data['standard']?></td>
    </tr>
    <tr>
        <th>
Parent Contact</th>
<td><?php echo $data['pnumber']?></td>
    </tr>
</table>
    <?php
}else{
    echo "<script>alert('No Student Found');</script>";
}
}
?>