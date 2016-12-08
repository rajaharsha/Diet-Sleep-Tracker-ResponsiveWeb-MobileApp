<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script type="text/javascript">
    
  var qs1 = '\
  <div class="form-group" id="question1">\
  <h3>Bed Time:  </h3><input type="Number" name="BedTime">\
  <h3>Wake Time: </h3><input type="Number" name="WakeTime">\
  </div>';

  var qs2 = '\
  <div class="form-group" id="question2">\
  <h3>Did you have any problems falling asleep last night?</h3>\
  <h3> Yes or no?</h3>\
  <h3>How many minutes did it take you?</h3>\
  </div>';

  var qs3 = '\
  <div class="form-group" id="question3">\
  <h3>Last night did you wake up at all during the night?</h3>\
  <h3> Yes or no?</h3>\
  <h3>Number of minutes awake?</h3>\
  </div>';

  var qs4 = '\
  <div class="form-group" id="question4">\
  <h3>When you woke up this morning, how did you feel?</h3>\
  <h3>Sleepy - Somewhat Sleepy - Alert</h3>\
  </div>';

  var qs5 = '\
  <div class="form-group" id="question5">\
  <h3>Did anything bother your sleep last night?</h3>\
  <h2>Check all that apply</h2>\
  <p><input type="Checkbox" name="Noise"> Noise</p>\
  <p><input type="Checkbox" name="Light"> Light</p>\
  <p><input type="Checkbox" name="Stress/Worry"> Stress/Worry</p>\
  <p><input type="Checkbox" name="Room Temperature"> Room Temperature</p>\
  <p><input type="Checkbox" name="None of the above"> None of the above</p>\
  </div>';



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
          <p>Your sleep journal Questionairre.  </p>
        </div>
      </div>


      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h1>Welcome to your Morning Diary</h1>
          </div>


        </div>
        <hr>


        <!-- This the the small code to add a Time DatePicker --> 
        <!-- I need admin rights to my system to install the required -->
        <!-- packages to use this in full. --> 
        <!-- Website Reference: https://eonasdan.github.io/bootstrap-datetimepicker/#minimum-setup --> 



<!-- 
        <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
    </div>
  </div> -->

  <!-- End of BootStrap DatePicker Code --> 




  <form  id="questions">











    <label id="q1" class="btn btn-default">Next</label>
    <label id="q2" class="btn btn-default">Back</label>


  </form>












  <script>
   var x1 = document.getElementById('question1');
   var x2 = document.getElementById('question2');
   var x3 = document.getElementById('question3');
   var x4 = document.getElementById('question4');
   var x5 = document.getElementById('question5');
   var questionBank = [x1, x2, x3, x4, x5];
   var ctr = 0;
   for (i = 0; i < questionBank.length; i++ )
   {
     questionBank[i].style.display = 'none';

   }

   $(document).ready(function(){



    $("#q1").click(function() {


      if (ctr <= 5) {


        if (ctr == 0) {
          questionBank[ctr].style.display = 'block';

        }   

        if (ctr > 0){
          questionBank[ctr-1].style.display = 'none';
          questionBank[ctr].style.display = 'block';
        }  
ctr++; //3
}
})



    $("#q2").click(function() {

      if (ctr >= 4) {
        questionBank[ctr-1].style.display = 'none';  
        questionBank[ctr-2].style.display = 'block';
      } else { 
        questionBank[ctr-2].style.display = 'block';
        questionBank[ctr-1].style.display = 'none';
        ctr--;
      }

    })
  });

</script>
<hr>

<p id="demo"> demo</p>

<script type="text/javascript">

  document.getElementById("demo").innerHTML = qs1;

</script>


<footer>
  <p>&copy; 2016 Coach Z, Inc. Old Dominion University </p>
</footer>
</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>
