<?php
// define("DB_DATABASE", 'student_db');
// define("DB_USERNAME", 'root');
// define("DB_PASSWORD", '');
// define("DB_SERVER", 'localhost');


    $con =mysqli_connect('localhost' ,'root','','student_db' );
    // set the PDO error mode to exception
    if($con){
    echo "Connected successfully";
  } else {
    echo "Connection failed: ";
  }
