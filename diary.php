<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
?>

<br>

<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <button type="button" class="btn btn-primary btn-lg btn-block btn-info" onclick="location.href='morningdiary.php';"> 
            <?php 
            echo "<div><h4>" . (14-$btcmp_log_day_val) . " Days More</h4></div>";
            ?>
            <div>    
            <img src="img/sunrise.png" class="center-block" alt="CoachZ" width="100" height="100">
            </div>
            <div>
            <h3><b>Log Your Morning Diary</b></h3>
            </div>
            </button>
            <br>

            <button type="button" class="btn btn-primary btn-lg btn-block btn-warning" onclick="location.href='eveningdiary.php';">
            <?php 
            echo "<div><h4>" . (14-$btcmp_log_day_val) . " Days More</h4></div>";
            ?>
            <div>
            <img src="img/sunset.png" class="center-block" alt="CoachZ" width="100" height="100">
            </div>
            <div>
            <h3><b>Log Your Evening Diary</b></h3>
            </div>
            </button>

        </div>  
        <div class="col-md-4"></div>
      </div>
</div>            

<br><br>
<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->