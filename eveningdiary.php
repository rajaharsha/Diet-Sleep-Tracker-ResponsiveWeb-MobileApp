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

  <script src="js/eveningQuestionsList.js"></script>

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