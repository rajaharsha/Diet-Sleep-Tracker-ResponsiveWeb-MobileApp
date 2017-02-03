<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
?>

<!-- Bring in the Jumbotron and Navigation bars --> 

<script>




  </script>



<div id="questionDisplay"></div>  <!-- Present questions HERE -->

<script src="morningQuestionsScripts.js"></script> 
<script>

var questionBank = [qs1, qs2, qs3, qs4, qs5];
var questions = new morningQuestion("", "", false, "", false, "", "0", "00001"); 
var ctr = 0; 

document.getElementById("questionDisplay").innerHTML = questionBank[ctr];




function nextQuestion(){
      if(ctr < 4) {
       ctr++;
       document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
       return false;
    }
  }
  </script>


<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->












