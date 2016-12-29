<!-- header.php --> 



<?php
include('./includes/header.php');
?>







 
<!-- Bring in Navigation Buttons for paging through questions --> 
<?php include("pagingNavigation.html") ?>


<!-- Display questions HERE -->
<form name="questionsDisplayForm" id="questions"> 
  <p id="questionDisplay"></p>  
</form>





</body>  <!-- The header has the open body tag --> 

<!-- Bring in the questions -->
<script src="js/morningQuestionsList.js"></script>

<!-- Bring in the paging code -->
<script src="js/pagingQuestions.js"></script> 

<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">
  var elem = document.querySelector('.js-switch');
  var init = new Switchery(elem);
</script>


<script src="assets/switchery-master/switchery.js"></script>




<!-- timepicker requirements --> 
  <script>$(function() { $('#inputBedTimeId').timepicker(); });</script>
  <script>$(function() { $('#inputWakeTimeId').timepicker(); });</script>
  


  <script type="text/javascript"            src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <script type="text/javascript"            src="js/jquery-timepicker-master/jquery.timepicker.js"></script>
  <script type="text/javascript"            src="js/jquery-timepicker-master/lib/bootstrap-datepicker.js"></script>
  <script type="text/javascript"            src="js/jquery-timepicker-master/lib/site.js"></script>
  




<!-- Bring in the Footer --> 
<?php require_once("./includes/footer.php"); // Footer ?>





