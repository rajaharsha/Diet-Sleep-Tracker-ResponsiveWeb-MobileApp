<?php
// Checks if a Active session is created for a user or not.
$userid = '';
$username = '';  
$btcmp_log_day_val = '';
$btcmp_user_log_count = '';
if (isset($_SESSION["uid"])){ $userid = $_SESSION["uid"]; };
if (isset($_SESSION["username"])){ $username = $_SESSION["username"]; };
if (isset($_SESSION["btcmp_log_day_val"])){ $btcmp_log_day_val = $_SESSION["btcmp_log_day_val"];};
if (isset($_SESSION["btcmp_user_log_count"])){ $btcmp_user_log_count = $_SESSION["btcmp_user_log_count"];};
//if (isset($_SESSION["btcmp_user_mode"])){ $btcmp_user_mode = $_SESSION["btcmp_user_mode"];}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coach Z</title>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Coach Z or Sleep App">
  <meta name="author" content="Raja Harsha Chinta & Brian Watkins">

  <!-- 1. Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- 2. jQuery MUST come before the Bootstrap.min.js !!!!!!!! :)   --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  

  <!-- 3. Bootstrap core JavaScript --> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!-- animation.css --> 
  <link rel="stylesheet" type="text/css" href="css/animation.css">







  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <script src="assets/js/ie-emulation-modes-warning.js"></script>






  <!-- custom styles -->
  <link rel="stylesheet" type="text/css" href="css/styles.css"> 
  <link rel="stylesheet" type="text/css" href="css/styles2.css">

  <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
  


</head>

<body>


  <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="assets/js/ie10-viewport-bug-workaround.js"></script>


  <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
 

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="menu.php">CoachZ</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">

        <ul class="nav navbar-nav navbar-right">
          <?php

          if($userid){
            echo "
            <li>
              <a href='menu.php'>Menu</a>
            </li>            
            <li>
              <a href='diary.php'>Diary</a>
            </li>
            <li>
              <a href='logout.php'>Logout</a>                           
            </li>
            ";
          }
          else {  

            echo "<li><a href='index.php'>Login</a></li>         
            <li><a href='user_registration.php'>Register</a></li>";
          }
          ?>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </nav>


  <!-- Navigation and login Bar -->

