<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");



    $user_login = $_POST['myData'];
    $user_name = $user_login["username"];
    $user_password = $user_login["userpassword"];

    error_log("Inside query\n" . $user_name . $user_password , 3, "C:/xampp/apache/logs/error.log");

    if (find_user_login($user_name,$user_password))
    	error_log("Inside query\n" . 'gREAT db result did come', 3, "C:/xampp/apache/logs/error.log");

/*    	echo 'ok';*/
    else 
/*    	error_log("Inside query\n" . ' NO db result did come', 3, "C:/xampp/apache/logs/error.log");
*/    	echo 'notok';
 ?>