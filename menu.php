<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
?>



<div class="center">
      <!-- Example row of columns -->
      <div class="col-md-3"></div>
        <div class="col-md-2">
            <br>
            <button type="button" class="btn btn-primary btn-lg btn-block btn-info" onclick="location.href='diary.php';"> 
                  <img src="img/Sleep_Diary.png" class="center-block" alt="CoachZ" width="150" height="150">
            </button>
            <br>
        </div>
        <div class="col-md-2">

            <br>
            <button type="button" class="btn btn-primary btn-lg btn-block btn-info" onclick="location.href='coachz_tips.php';">  
                  <img src="img/CoachZ_Tips.png" class="center-block" alt="CoachZ" width="150" height="150">
            </button>
            <br>
        </div>  
        <div class="col-md-2">
            <br>
            <button type="button" class="btn btn-primary btn-lg btn-block btn-info" onclick="location.href='sleep_tracker.php';"> 
                  <img src="img/Sleep_Tracker.png" class="center-block" alt="CoachZ" width="150" height="150">
            </button>
            <br>
        </div>
        <div class="col-md-3"></div>
</div>            

<br><br>
<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->