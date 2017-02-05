<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
?>

<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
 
            <button type="button" class="btn btn-primary btn-lg btn-block btn-info" onclick="location.href='morningdiary.php';"> 
            <img src="img/sunrise.png" class="center-block" alt="CoachZ" width="100" height="100">
            <h3><b>Log Your Morning Diary</b></h3>
            </button>

            <br>

            <button type="button" class="btn btn-primary btn-lg btn-block btn-warning" onclick="location.href='eveningdiary.php';">
<img src="img/sunset.png" class="center-block" alt="CoachZ" width="100" height="100">
            <h3><b>Log Your Evening Diary</b></h3>

            </button>

        </div>  
        <div class="col-md-4"></div>
      </div>
</div>            

<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->