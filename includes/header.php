<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coach Z</title>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Timepicker CSS styles are here --> 
  <link rel="stylesheet" type="text/css"    href="js/jquery-timepicker-master/lib/site.css" />
  <link rel="stylesheet" type="text/css"    href="js/jquery-timepicker-master/jquery.timepicker.css" />.
  <link rel="stylesheet" type="text/css"    href="js/jquery-timepicker-master/lib/bootstrap-datepicker.css" />
  <link rel="icon" href="assets/favicon.ico">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/jumbotron.css" rel="stylesheet">
  <script src="assets/js/ie-emulation-modes-warning.js"></script>


  <!-- ************************************************************************************** -->
  <!-- SWITCHERY Switches -->
  <script src="assets/switchery-master/dist/switchery.js" /></script>
  <script src="assets/switchery-master/dist/switchery.css" /></script>
  <script src="js/jquery.min.js"></script> 
 
  <!-- ************************************************************************************** --> 

  <script type="text/javascript">
    var elem = document.querySelector('.js-switch');
    var init = new Switchery(elem);</script>
    <script src="includes/morningQuestionsScripts.js"></script> <!-- Grab script file -->



    <link rel="stylesheet" type="text/css" href="styles.css"> 
    <link rel="stylesheet" type="text/css" href="css/styles2.css">





  </head>

  <body>


<!-- Navigation and login Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Coach Z</a>
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

    
    <!-- Bring in Navigation Bar and Jumbotron -->
    <?php include("jumboTron.html"); ?>








