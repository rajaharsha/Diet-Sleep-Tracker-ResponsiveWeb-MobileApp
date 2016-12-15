<!-- Reference for all files that are being included in the page-->
<?php
include("./includes/cz_functions.js");
include("./includes/header.php");
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Coach Z</h1>
        <p>Coach Z, is a virtual sleep bootcamp, for students. An interactive sleep diary, which provides customized feeback based on diary responses! </p>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">





      <form method="get" action="checkpage()">

        <div class="col-md-4">

          <button type="submit" formaction="sleepDiary.php" class="btn btn-primary btn-lg">Sleep Diary</button>

       </div>

        <div class="col-md-4">
          <button type="submit" formaction="page4.php" class="btn btn-primary btn-lg">Archives</button>
       </div>

        <div class="col-md-4">
          <button type="button" formaction="page5.php" class="btn btn-primary btn-lg">Sleep Tracker</button>
        </div>

        </form>




      </div>

      <hr>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>


<?php
  require_once("./includes/footer.php");
?>