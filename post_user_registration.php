<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");

$usr_obj = $_POST['post_user_registration'];

            $user_name = $usr_obj["username"];
            $user_email = $usr_obj["useremail"];
            $user_pass = $usr_obj["userpassword"];         



          // error_log("\n Password:" . $user_pass , 3, "C:/xampp/apache/logs/error.log");

           insert_usr_rec(
            $user_name,
            $user_email,
            $user_pass
            );          
    ?>