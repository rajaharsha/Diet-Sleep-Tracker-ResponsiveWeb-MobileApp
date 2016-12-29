<!-- Reference for all files that are being included in the page-->
<?php
include("./includes/cz_functions.js");
include("./includes/header.php");
?>


<!-- for the Apple-like switch -->
<link rel="stylesheet" href="assets/switchery-master/switchery.css" />
<script src="assets/switchery-master/switchery.js"></script>

  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/styles2.css">

<script type="text/javascript">
var elem = document.querySelector('.js-switch');
var init = new Switchery(elem);
</script>




<script type="text/javascript">
// Variables that hold the html for each question


function toFallAsleep() {
var person = prompt("How many minutes did it take you to fall asleep?", "Minutes to fall asleep....");
if (person != null) {
  document.getElementsByID("minutesTryingToFallAsleep".innerHTML = person);
}
}


    
  var qs1 = '\
  <div class="form-group" id="question1"> \
      <h3> Did you drink any caffeinated drinks today? </h3>\
      <h4> Records number of caffeinated drinks consumed during each time of day. </h4>\
      <h3>Morning:  </h3><input type="Number" name="Morning">\
      <h3>Afternoon: </h3><input type="Number" name="Afternoon">\
      <h3>Evening: </h3><input type="Number" name="Evening">\
      <hr>\
  </div>'; 

  var qs2 = ' \
  <div class="form-group" id="question2"> \
  \
  \
  <h3>Did you exercised today?</h3> \
  \
  \
  <h4 styles="display: inline-block">No - Yes</h4>\
  <label class="switch">\
  <input type="checkbox" id="eq2">\
  <div class="slider round"></div>\
  </label>\
  \
  \
  <h4 type="text" name="minutesTryingToFallAsleep"></h4>\
  </div>';

  var qs3 = ' \
  <div class="form-group" id="question3"> \
  <h3>Did you drink Alcohol?</h3> \
  <h4 styles="display: inline-block">No - Yes</h4>\
  <label class="switch" >\
  <input type="checkbox" id="eq3">\
  <div class="slider round"></div>\
  </label>\
  </div>';

  var qs4 = ' \
  <div class="form-group" id="question4"> \
  <h3>Did you take a nap today?</h3> \
  <h4 styles="display: inline-block">No - Yes</h4>\
  <label class="switch" >\
  <input type="checkbox" id="eq4">\
  <div class="slider round"></div>\
  </label>\
  </div>';

  var qs5 = ' \
  <div class="form-group" id="question5"> \
  <h3>How is your mood today?</h3> \
  <form>\
    <div class="radio">\
      <label><input type="radio" name="optradio" value="Happy" id="eqs5op1"> Happy</label>\
      <label><input type="radio" name="optradio" value="Neutral" id="eqs5op2"> Neutral</label>\
      <label><input type="radio" name="optradio" value="Mad" id="eqs5op3"> Mad</label>\
      <label><input type="radio" name="optradio" value="Sad" id="eqs5op4"> Sad</label>\
    </div>\
  </form>\
  </div>';

  var qs6 = ' \
  <div class="form-group" id="question6"> \
  <h3>Do you do any of the followin in your bed?</h3> \
  <h2>Check all that apply</h2> \
  <p><input class="largerCheckbox" type="Checkbox" name="Use your phone" id="eqs6op1"> Use your phone</p> \
  <p><input type="Checkbox" name="Read or do homework" id="eqs6op2"> Read or do homework</p> \
  <p><input type="Checkbox" name="Watch TV" id="eqs6op3"> Watch TV</p> \
  <p><input type="Checkbox" name="Play video games" id="eqs6op4"> Play video games</p> \
  <p><input type="Checkbox" name="None of the above" id="eqs6op5"> None of the above</p> \
  </div>';

  var qs7 = ' \
  <div class="form-group" id="question5"> \
  <h3>During what time of day do you have the most energy and motivation?</h3> \
  <form>\
    <div class="radio">\
      <label><input type="radio" name="optradio" value="Early Morning" id="eqs7op1"> Early Morning</label>\
      <label><input type="radio" name="optradio" value="Afternoon" id="eqs7op2"> Afternoon</label>\
      <label><input type="radio" name="optradio" value="Evening" id="eqs7op3"> Evening</label>\
    </div>\
  </form>\
  </div>';


  var qs8 = '\
  <div class="questionButtonDiv">\
  <button id="eqs_submit" class="btn btn-default" onclick="evg_ans_submit()">Submit Your Response</button>\
  </div>\
  ';


 var questionBank = [qs1, qs2, qs3, qs4, qs5, qs6, qs7, qs8];

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
  <script src="assets/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

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
<!--
      <div class="jumbotron">
        <div class="container">
          <h1>Coach Z</h1>
          <p>Welcome to your Evening Diary Questionnaire.</p>
        </div>
      </div>
-->

  <!-- End of BootStrap DatePicker Code --> 
<script type="text/javascript">
  var elem = document.querySelector('.js-switch');
var init = new Switchery(elem);
</script>

<form  id="questions">
    <p id="questionDisplay"> </p>
</form>

<script src="includes/evening_questions_scripts.js"></script>

<div class="questionButtonDiv">
<label id="q2" class="btn btn-default">Back</label>
<label id="q1" class="btn btn-default">Next</label>

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