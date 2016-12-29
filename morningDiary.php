<?php
// Bring in any JavaScript Functions 
include("./includes/cz_functions.js");

// Bring in header data
include("./includes/header.php");
?>



<body> <!-- Starting the Morning Questions --> 

  <!-- Bring in Navigation Bar and Jumbotron -->
  <?php include("jumboTron.html"); ?>

  <!-- Bring in Navigation Buttons for paging through questions --> 
  <?php include("pagingNavigation.html") ?>


  <!-- Display questions HERE -->
  <form name="questionsDisplayForm" id="questions"> 
    <p id="questionDisplay"> </p>  
  </form>

</body>







<!-- All these scripts could be imported last from another file --> 
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/switchery-master/switchery.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- Bring in the questions -->
<script src="js/morningQuestionsList.js"></script>

<!-- Bring in the paging code -->
<script src="js/pagingQuestions.js"></script> 

<script src="js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">
  var elem = document.querySelector('.js-switch');
  var init = new Switchery(elem);
</script>





<!-- Bring in the Footer --> 
<?php require_once("./includes/footer.php"); // Footer ?>





