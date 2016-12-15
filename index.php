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
        <div class="col-md-4">
       
       <h2>About</h2>
          <p>Coach Z is a website aimed to help college students improve their sleep. Sleep disturbances are common among young adults, and can impact academic performance, physical health, and mental health. Sleep is a vital aspect of health and Coach Z offers sleep tips to help users work towards and maintain healthy sleep hapbits. The website has two modes, bootcamp mode and refresher mode.</p>
        </div>
        
        <div class="col-md-4">
          <h2>Refresher</h2>
          <p>Refresher mode allows users to keep a sleep diary at their own pace. In refresher mode users do not receive diary completion reminders, but can complete entries as they determine to be helpful. Users will receive a random sleep tip after every completed diary entry.</p>
          </div>
        
        <div class="col-md-4">
          <h2>Bootcamp</h2>
          <p>Bootcamp mode is a two-week experience where users are provided with daily reminders to complete a morning and evening sleep diary. Upon completion of diary entries, two customized sleep tips are provided to users each day. In addition to sleep tips, students can utilize graphs calculated from their daily diary entries to track their total sleep time and sleep efficiciency scores throughout bootcamp.</p>
        </div>
        
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