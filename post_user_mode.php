<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");
  include("./includes/session.php");

$obj = $_POST['post_user_mode'];

$uid = $obj["uid"];           
$user_mode = $obj["user_mode"];


update_user_mode($uid,$user_mode);          

    ?>