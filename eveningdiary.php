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
  morningValue = document.getElementById('eq1a').value;
  afternoonValue = document.getElementById('eq1b').value;
  eveningValue = document.getElementById('eq1c').value;
  eqs_answers['eq1_Morning'] = morningValue;
  eqs_answers['eq1_Afternoon'] = afternoonValue;
  eqs_answers['eq1_Evening'] = eveningValue;
}




function updateCoffee(timeOfDay, plusMinus) {

   value = document.getElementById(timeOfDay).innerHTML; 
   counter = value;                 
          
          if (plusMinus == "plus" && counter != 10) {
            counter++;
            document.getElementById(timeOfDay).innerHTML = counter.toString();

          } else if (plusMinus == "minus" && counter != 0) {
            counter--;
            document.getElementById(timeOfDay).innerHTML = counter.toString(); 
          }


  eqs_answers['eq1_Morning'] = document.getElementById('eq1a').value;
  eqs_answers['eq1_Afternoon'] = document.getElementById('eq1b').value;
  eqs_answers['eq1_Evening'] = document.getElementById('eq1c').value;


}













// Question 1 ******************************************






// Question 2 ******************************************
// Yes or No
function question2(choice) { 
  if (choice == 0 ) {
eqs_answers['eq2_Exercise'] = "No";
} else {
  eqs_answers['eq2_Exercise'] = "Yes";
}
nextQuestion();
}
// Question 2 ******************************************

// Question 3 ******************************************
// One or a Zero Boolean
function question3(choice) { 
  if (choice == 0 ) {
     eqs_answers['eq3_Alcohol'] = "No";
} else {
    eqs_answers['eq3_Alcohol'] = "Yes";
}
nextQuestion();
}
// Question 3 ******************************************

// Question 4 ******************************************
// One or a Zero Boolean
function question4(choice) { 
  if (choice == 0 ) {
     eqs_answers['eq4_Nap'] = "No";
} else {
    eqs_answers['eq4_Nap'] = "Yes";
}
nextQuestion();
}
// Question 4 ******************************************

// Question 5 ******************************************
// One or a Zero Boolean
function question5(choice) { 
eqs_answers['eq5_Mood'] = choice;
nextQuestion();
}
// Question 5 ******************************************



// Question 6 ******************************************
function question6(choice) {
  switch (choice) {
    case 1: // case 1, comes from first button
      id = "eqs6op1"; // get the id
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 2:
      id = "eqs6op2";
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 3:
      id = "eqs6op3";
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 4:
      id = "eqs6op4";
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 5:
      id = "eqs6op5";
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
    document.getElementById('eqs6op' + i).style.backgroundColor = "white";
    document.getElementById('eqs6op' + i).style.color = "black";
    document.getElementById('eqs6op' + i).value = "false";
  }
}


function checkColor(myColor, myId) {
  document.getElementById("eqs6op5").value = "false"; // Ensure NOTA is Reset
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

  op1 = document.getElementById("eqs6op1").value;
  op2 = document.getElementById("eqs6op2").value;
  op3 = document.getElementById("eqs6op3").value;
  op4 = document.getElementById("eqs6op4").value;
  op5 = document.getElementById("eqs6op5").value;
  op1 = (op1 != "true") ? "false" : "true"; // verfies that there IS a value
  op2 = (op2 != "true") ? "false" : "true"; // verfies that there IS a value
  op3 = (op3 != "true") ? "false" : "true"; // verfies that there IS a value
  op4 = (op4 != "true") ? "false" : "true"; // verfies that there IS a value
  op5 = (op5 != "true") ? "false" : "true"; // verfies that there IS a value


  // Now, send the data to the object
  eqs_answers['eq6_Phone'] =          op1;
  eqs_answers['eq6_ReadHomework'] =   op2;
  eqs_answers['eq6_WatchTV'] =        op3;
  eqs_answers['eq6_PlayVideoGames'] = op4;
  eqs_answers['eq6_None'] =           op5;

  
  

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































function displayAllData() {


console.log ("" + 
  eqs_answers['eq1_Morning'] + " " +
  eqs_answers['eq1_Afternoon'] + " " +
  eqs_answers['eq1_Evening'] + " " +
  eqs_answers['eq2_Exercise'] + " " +
  eqs_answers['eq3_Alcohol'] + " " +
  eqs_answers['eq4_Nap'] + " " +
  eqs_answers['eq5_Mood'] + " " +
  eqs_answers['eq6_Phone'] + " " +
  eqs_answers['eq6_ReadHomework'] + " " +
  eqs_answers['eq6_WatchTV'] + " " +
  eqs_answers['eq6_PlayVideoGames'] + " " +
  eqs_answers['eq6_None'] + " " + 
  eqs_answers['eq7_TimeOfDay']


  );



}




















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







