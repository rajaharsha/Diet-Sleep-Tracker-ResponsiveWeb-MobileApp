<!-- Reference for all files that are being included in the page-->
<?php
include("./includes/cz_functions.js");
include("./includes/header.php");
?>


<!-- for the Apple-like switch -->
<link rel="stylesheet" href="assets/switchery-master/switchery.css" />
<script src="assets/switchery-master/switchery.js"></script>

<script src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">


<script type="text/javascript">
  var elem = document.querySelector('.js-switch');
  var init = new Switchery(elem);
</script>



<script src="includes/morningQuestionsScripts.js"></script> <!-- Grab script file -->



<script type="text/javascript">
// Variables that hold the html for each question




function toFallAsleep() {
  var person = prompt("How many minutes did it take you to fall asleep?", "Minutes to fall asleep....");
  if (person != null) {
    document.getElementsByID("minutesTryingToFallAsleep".innerHTML = person);
  }
}


var qs11 = ' \
<div class="container"> \
  <div class="row"> \
    <div class="col-sm-6"> \
      <div class="form-group"> \
        <div class="input-group date" id="datetimepicker3"> \
          \
          <input type="text" onchange="setQuestion1()" class="form-control" /> \
          <span class="input-group-addon"> \
            <span class="glyphicon glyphicon-time"></span> \
          </span>\
        </div>\
      </br>\
      <div class="input-group date" id="datetimepicker3"> \
        \
        <input type="text" onchange="setQuestion1()" class="form-control" /> \
        <span class="input-group-addon"> \
          <span class="glyphicon glyphicon-time"></span> \
        </span>\
      </div>\
    </div>\
  </div>\
  <script type="text/javascript">\
    $(function () { \
      $("#datetimepicker3").datetimepicker({ \
        format: "LT" }); }); \
        ';
        



        var qs1 = '\
        <div class="form-group" id="question1"> \
          <h3>Bed Time:  </h3><input id="inputBedTimeId" onchange="setQuestion1()" type="Number" name="BedTime"> \
          <h3>Wake Time: </h3><input id="inputWakeTimeId" onchange="setQuestion1()" type="Number" name="WakeTime"> \
        </div>'; 

        var qs2 = ' \
        <div class="form-group" id="question2"> \
          <h3>Did you have any problems falling asleep last night?</h3> \
          <h4 styles="display: inline-block">No</h4><label class="switch" >\
          <input id="inputProblemsFallingAsleepId" onchange="setQuestion2()" type="checkbox">\
          <div class="slider round"></div>\
          \
        </label><h4>Yes</h4> \
        <h4 type="text" name="minutesTryingToFallAsleep"></h4>\
        <h3>How many minutes did it take you to fall asleep? </h3> \
        \
        <input id="inputMinutesToFallAsleepId" onchange="setQuestion2()" type="Number" name="WakeTime">\
      </div>';



      var qs3 = ' \
      <div class="form-group" id="question3"> \
        <h3>Last night did you wake up at all during the night?</h3> \
        <h4 styles="display: inline-block">No</h4>\
        <label class="switch" >\
          <input id="inputDidWakeDuringTheNightId" onchange="setQuestion3()" type="checkbox">\
          <div class="slider round"></div>\
        </label>\
        <h4>Yes</h4> \
        \
        \
        <h4 type="text" name="minutesTryingToFallAsleep"></h4>\
        <h3>How many minutes did it take you to fall asleep? </h3> \
        <input id="inputMinutesToFallBackToSleepId" onchange="setQuestion3()" type="Number" name="WakeTime">\
      </div>';





      var qs4 = ' \
      <div class="form-group" id="question4"> \
        <h3>When you woke up this morning, how did you feel?</h3> \
        <h3>Sleepy - Somewhat Sleepy - Alert</h3> \
        \
        <label class="switch" >\
          <input id="sleepyId" onchange="setQuestion4(1)" type="checkbox">\
          <div class="slider round"></div>\
        </label>\
        \
        <label class="switch" >\
          <input id="somewhatSleepyId" onchange="setQuestion4(2)" type="checkbox">\
          <div class="slider round"></div>\
        </label>\
        \
        <label class="switch" >\
          <input id="alertId" onchange="setQuestion4(3)" type="checkbox">\
          <div class="slider round"></div>\
        </label>\
        \
      </div>';









      var qs5 = ' \
      <div class="form-group" id="question5"> \
        <h3>Did anything bother your sleep last night?</h3> \
        <h2>Check all that apply</h2> \
        <p><input type="Checkbox" id="noiseId" onclick="setQuestion5(0)" name="Noise"> Noise</p> \
        <p><input type="Checkbox" id="lightId" onclick="setQuestion5(0)" name="Light"> Light</p> \
        <p><input type="Checkbox" id="worryId" onclick="setQuestion5(0)" name="Stress/Worry"> Stress/Worry</p> \
        <p><input type="Checkbox" id="tempId" onclick="setQuestion5(0)" name="Room Temperature"> Room Temperature</p> \
        <p><input type="Checkbox" id="noneId" onclick="setQuestion5(1)" name="None of the above"> None of the above</p> \
      </div>';


      var questionBank = [qs1, qs2, qs3, qs4, qs5];

    </script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>Sleep Diary</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="stylesheet" type="text/css" href="css/styles2.css">
    </head>

    <body>


      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Coach Z</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
            </form>
          </div><!--/.navbar-collapse -->
        </div>
      </nav>


      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1>Coach Z</h1>
          <p>Welcome to your Morning Diary Questionnaire.</p>
        </div>
      </div>




      <!-- End of BootStrap DatePicker Code --> 
      <script type="text/javascript">
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem);
      </script>

      <div class="questionButtonDiv">
        <label id="q2" class="btn btn-default">Back</label>
        <label id="q1" class="btn btn-default">Next</label>
      </div>


    </div>


    <form  id="questions">
      <p id="questionDisplay"> </p>
    </form>


    <button onclick="viewAll()">button</button>

  <script> // pages through the questions

   document.getElementById("questionDisplay").innerHTML = questionBank[0];
   var ctr = 0; // start at first question

   $(document).ready(function(){
    $("#q1").click(function() {  // NEXT Button
      if(ctr < 4) {
       ctr++;
       document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
       if (ctr >= 4) {ctr = 4;}
     }
   })

    $("#q2").click(function() {
      if( ctr >= 1){
       ctr--;
       document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
       if (ctr == 0) {ctr = 0;}
     }
   })
  });
</script>

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