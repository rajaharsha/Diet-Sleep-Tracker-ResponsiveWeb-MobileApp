<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");

    $user_login = $_POST["myData"];
    $user_name = $user_login["username"];
    $new_location = "morningDiary.php";
  	header("Location: " . $new_location)

 ?>