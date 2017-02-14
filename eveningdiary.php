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




<!-- Present questions HERE -->
<div class="container">
  <div class="row" id="mainRow">
    <div class="col-md-12">
      <div class="col-xs-1 col-md-4 col-lg-4"></div>
      <div class="col-xs-10 col-md-4 col-lg-4" id="question1">
        <div class="form-group">
          <div id="questionDisplay"> <!-- Where the question is displayed --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="eveningQuestionsScripts.js"></script> 
  <script src="eveningQuestionsList.js"></script>
<!-- End Question Block --> 




  <script>
// Initial Values ****************************
var eqs_answers = {};
var questionBank = [qs1, qs2, qs3, qs4, qs5, qs6, qs7]; // Seven questions
var ctr = 0; // start at first question

// Upon page refresh, the page gets loaded with the first question
document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
// Initial Values ****************************










// Next Question ************************
// Changes to next question
function nextQuestion()
{
  if(ctr < 7) // 0 through 6 - Seven Questions
  {
    //alert(ctr);
    ctr++;
    document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
    return false;
  }
}
// Next Question *************************









// Question 1 ******************************************
// No Caffeine was used. All set to zero (0)
// Needs to be refactored to one Function. 
function noCaffeine() { // Could be merged as one function later
eqs_answers['eq1_Morning'] = "0"; // Integers or strings. 
eqs_answers['eq1_Afternoon'] = "0";
eqs_answers['eq1_Evening'] = "0";
nextQuestion();
}

// If Caffeine was used, the new form will appear
function showCaffeineMenu() { // Could be merged as one function later
  document.getElementById("questionDisplay").innerHTML = qs1partb;
}

// After each selection is changed, this data gets updated. 
function getCaffeineResults() { // collect selected data
  a = document.getElementById('eq1a').value;
  b = document.getElementById('eq1b').value;
  c = document.getElementById('eq1c').value;
  eqs_answers['eq1_Morning'] = a;
  eqs_answers['eq1_Afternoon'] = b;
  eqs_answers['eq1_Evening'] = c;
}
// Question 1 ******************************************

// Question 2 ******************************************
// One or a Zero Boolean
function question2(choice) { 
eqs_answers['eq2_Exercise'] = choice;
nextQuestion();
}
// Question 2 ******************************************

// Question 3 ******************************************
// One or a Zero Boolean
function question3(choice) { 
eqs_answers['eq3_Alcohol'] = choice;
nextQuestion();
}
// Question 3 ******************************************

// Question 4 ******************************************
// One or a Zero Boolean
function question4(choice) { 
eqs_answers['eq4_Nap'] = choice;
nextQuestion();
}
// Question 4 ******************************************

// Question 5 ******************************************
// One or a Zero Boolean
function question5(choice) { 
eqs_answers['eq4_Mood'] = choice;
nextQuestion();
}
// Question 5 ******************************************



// Question 6 ******************************************
function question6(choice) {
  switch (choice) {
    case 1: // case 1, comes from first button
      id = "eqs7op1"; // get the id
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 2:
      id = "eqs7op2";
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 3:
      id = "eqs7op3";
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 4:
      id = "eqs7op4";
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 5:
      id = "eqs7op5";
      var background = document.getElementById(id).style.backgroundColor;
      document.getElementById(id).value = "true";
      clearOtherChoices();
      break;
    default:
      id = "None";
  }

}

function clearOtherChoices() { // Clears all choices when NOTA is clicked

  for (i = 1; i < 5; i++) { // Loop through other choices
    document.getElementById('eqs7op' + i).style.backgroundColor = "white";
    document.getElementById('eqs7op' + i).style.color = "black";
    document.getElementById('eqs7op' + i).value = "false";
  }
}


function checkColor(myColor, myId) {
  document.getElementById("eqs7op5").value = "false"; // Ensure NOTA is Reset
  var id = myId;
  var background = myColor;
  if (background != "black") {
    document.getElementById(id).style.backgroundColor = "black";
    document.getElementById(id).style.color = "white";
    document.getElementById(id).value = "true";


  } else {
    document.getElementById(id).style.backgroundColor = "white";
    document.getElementById(id).style.color = "black";
    document.getElementById(id).value = "false";

  }
}

function submitQuestion6() {

  a = document.getElementById("eqs7op1").value;
  b = document.getElementById("eqs7op2").value;
  c = document.getElementById("eqs7op3").value;
  d = document.getElementById("eqs7op4").value;
  e = document.getElementById("eqs7op5").value;
  a = (a != "true") ? "false" : "true"; // verfies that there IS a value
  b = (b != "true") ? "false" : "true"; // verfies that there IS a value
  c = (c != "true") ? "false" : "true"; // verfies that there IS a value
  d = (d != "true") ? "false" : "true"; // verfies that there IS a value
  e = (e != "true") ? "false" : "true"; // verfies that there IS a value


  // Now, send the data to the object
  eqs_answers['eq6_Phone'] =          a;
  eqs_answers['eq6_ReadHomework'] =   b;
  eqs_answers['eq6_WatchTV'] =        c;
  eqs_answers['eq6_PlayVideoGames'] = d;
  eqs_answers['eq6_None'] =           e;

  
  

nextQuestion(); // Move to #7 Question, then prepare to parse to PHP. 

// Call database functionality........ 

}

// Question 6 ******************************************





// Question 7 ******************************************
function question7(choice) { 
eqs_answers['eq7_TimeOfDay'] = choice;
// Last Question
}
// Question 7 ******************************************



// Set Values PHP Values
function evg_ans_submit() {
  

  $.ajax({
    url: 'post_evg_answers.php',
    type: 'post',
    success: function(data) {
      alert ('Posted Successfully')
    },
    data: {post_evg_answers:eqs_answers},
    error: function(xhr, desc, err) {
      console.log(xhr);
      console.log("Details: " + desc + "\nError:" + err);
    }
  }); 

};





</script>




<?php require_once("./includes/footer.php"); ?>



























<!--
// $(document).ready(function(){

//  $("#coach_z_reg").click(function(){
//    var reg_form = document.getElementById("newuser");
//    user_reg['username'] = form_value[0],value;
//    alert(user_reg['username']);
//  });







