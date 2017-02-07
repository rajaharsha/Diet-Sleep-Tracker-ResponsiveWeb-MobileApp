<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");



    $user_login = $_POST["myData"];
    $user_name = $user_login["username"];
    $user_password = $user_login["userpassword"];

    if (find_user_login($user_name,$user_password))
    	echo 'ACCESS_GRANTED';
/*		redirect_to("morningDiary.php");
*/    else 
    	echo 'ACCESS_DENIED';
 ?>