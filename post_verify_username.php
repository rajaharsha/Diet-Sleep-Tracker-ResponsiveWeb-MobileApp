<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");

    $username = $_POST['myData'];

    if (!find_username($username))
    	echo 'ok';
    else 
    	echo 'notok';
 ?>