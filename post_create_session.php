<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");



    $user_login = $_POST["myData"];
    $user_name = $user_login["username"];
    $new_location = "morningDiary.php";
  	error_log("I am here:----------\n" . $user_name , 3, "C:/xampp/apache/logs/error.log");	
  	header("Location: " . $new_location)
/*    redirect_to("morningDiary.php");
*/
 ?>