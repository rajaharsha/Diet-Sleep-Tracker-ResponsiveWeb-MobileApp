<!-- Reference for all files that are being included in the page-->
<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
  include("./includes/cz_functions.js");
?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="js/eveningQuestionsList.js"></script>
  <link rel="icon" href="assets/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/styles2.css">
</head>






   <!-- Present questions HERE -->
<div class="container">
<div class="row" id="mainRow">
<div class="col-md-12">
<div class="col-xs-1 col-md-4 col-lg-4"></div>
<div class="col-xs-10 col-md-4 col-lg-4" id="question1">
<div class="form-group">
<div id="questionDisplay">
</div>
</div>
</div>
</div>
</div>
<script src="eveningQuestionsScripts.js"></script> 
<script>









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