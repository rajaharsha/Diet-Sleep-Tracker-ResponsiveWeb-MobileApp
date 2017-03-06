<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
?>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<br>


<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
<style>
  .toggle.android { border-radius: 0px;}
  .toggle.android .toggle-handle { border-radius: 0px; }
</style>
<input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info">

        </div>  
        <div class="col-md-4"></div>
      </div>
</div>            

<br><br>
<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->