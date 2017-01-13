<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");

    $email = $_POST['myData'];
//    error_log("Inside query\n" . $email , 3, "C:/xampp/apache/logs/error.log");

    if (!find_useremail($email))
    	echo 'ok';
    else 
    	echo 'notok';
 ?>