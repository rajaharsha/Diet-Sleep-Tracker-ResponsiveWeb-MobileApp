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


<script>
   var user_rec = {};
var questionBank = [qs1, qs2, qs3, qs4, qs5];
var ctr = 0; // start at first question


document.getElementById("questionDisplay").innerHTML = questionBank[ctr];



function nextQuestion()
{
  if(ctr < 6) 
  {
    ctr++;
    document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
    return false;
  }
}


function yesCaffeine() { // Could be merged as one function later

// show qs1partb code
document.getElementById("questionDisplay").innerHTML = qs1partb;

}

function noCaffeine() { // Could be merged as one function later
alert("No");
}






function q1script() { // collect selected data
  a = document.getElementById('eq1a').value;
  b = document.getElementById('eq1b').value;
  c = document.getElementById('eq1c').value;
  user_rec['eq1_Morning'] = a;
  user_rec['eq1_Afternoon'] = b;
  user_rec['eq1_Evening'] = c;
}




































   $(document).ready(function(){

    $("#coach_z_reg").click(function(){
      var reg_form = document.getElementById("newuser");
      user_reg['username'] = form_value[0],value;
      alert(user_reg['username']);
    });






    $("#q1").click(function() {  // NEXT Button
      if(ctr < 7) {

         if (ctr == 0){
           var form_value = document.getElementById("questions");
           user_rec['eq1_Morning'] = form_value[0].value;
           user_rec['eq1_Afternoon'] = form_value[1].value;
           user_rec['eq1_Evening'] = form_value[2].value;
         }

         else if (ctr == 1){
          var result = document.getElementById("eq2").checked;
          user_rec['eq2_Exercise'] = result;
         }

         else if (ctr == 2){
          var result = document.getElementById("eq3").checked;
          user_rec['eq3_Alcohol'] = result;
         }

         else if (ctr == 3){
          var result = document.getElementById("eq4").checked;
          user_rec['eq4_Nap'] = result;
         }         

         else if (ctr == 4){

           if (document.getElementById("eqs5op1").checked)(user_rec['eq5_Mood'] = document.getElementById("eqs5op1").value)
           else if(document.getElementById("eqs5op2").checked)(user_rec['eq5_Mood'] = document.getElementById("eqs5op2").value)
           else if(document.getElementById("eqs5op3").checked)(user_rec['eq5_Mood'] = document.getElementById("eqs5op3").value)
           else if(document.getElementById("eqs5op4").checked)(user_rec['eq5_Mood'] = document.getElementById("eqs5op4").value)
           else '';                     
         }

         else if (ctr == 5){

            if (document.getElementById("eqs6op1").checked)(user_rec['eq6_Phone'] = 'True')
            else (user_rec['eq6_Phone'] = 'False');

            if (document.getElementById("eqs6op2").checked)(user_rec['eq6_ReadHomeWork'] = 'True')
            else (user_rec['eq6_ReadHomeWork'] = 'False');

            if (document.getElementById("eqs6op3").checked)(user_rec['eq6_WatchTV'] = 'True')
            else (user_rec['eq6_WatchTV'] = 'False');

            if (document.getElementById("eqs6op4").checked)(user_rec['eq6_PlayVideoGames'] = 'True')
            else (user_rec['eq6_PlayVideoGames'] = 'False');

            if (document.getElementById("eqs6op5").checked)(user_rec['eq6_None'] = 'True')
            else (user_rec['eq6_None'] = 'False');
         }

         else if (ctr == 6){

           if (document.getElementById("eqs7op1").checked)(user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op1").value)
           else if(document.getElementById("eqs7op2").checked)(user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op2").value)
           else if(document.getElementById("eqs5op3").checked)(user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op3").value)
           else (user_rec['eq7_TimeOfDay'] = '');                   
         }       

         else '';

           ctr++;
           document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
           console.log(user_rec);
           if (ctr >= 7) {ctr = 7;}
         }
      })





    $("#q2").click(function() { // BACK Button
      if( ctr >= 1){

         if (ctr == 0){
           var form_value = document.getElementById("questions");
           user_rec['eq1_Morning'] = form_value[0].value;
           user_rec['eq1_Afternoon'] = form_value[1].value;
           user_rec['eq1_Evening'] = form_value[2].value;
         }

         else if (ctr == 1){
          var result = document.getElementById("eq2").checked;
          user_rec['eq2_Exercise'] = result;
         }

         else if (ctr == 2){
          var result = document.getElementById("eq3").checked;
          user_rec['eq3_Alcohol'] = result;
         }

         else if (ctr == 3){
          var result = document.getElementById("eq4").checked;
          user_rec['eq4_Nap'] = result;
         }

         else if (ctr == 4){

           if (document.getElementById("eqs5op1").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op1").value
              )
           else if(document.getElementById("eqs5op2").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op2").value 
              )
           else if(document.getElementById("eqs5op3").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op3").value 
              )
           else if(document.getElementById("eqs5op4").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op4").value 
              )
           else '';                     
         }

         else if (ctr == 5){

            if (document.getElementById("eqs6op1").checked)
              (
                user_rec['eq6_Phone'] = 'True'
              )
            else (user_rec['eq6_Phone'] = 'False');

            if (document.getElementById("eqs6op2").checked)
              (
                user_rec['eq6_ReadHomeWork'] = 'True'
              )
            else (user_rec['eq6_ReadHomeWork'] = 'False');

            if (document.getElementById("eqs6op3").checked)
              (
                user_rec['eq6_WatchTV'] = 'True'
              )
            else (user_rec['eq6_WatchTV'] = 'False');

            if (document.getElementById("eqs6op4").checked)
              (
                user_rec['eq6_PlayVideoGames'] = 'True'
              )
            else (user_rec['eq6_PlayVideoGames'] = 'False');

            if (document.getElementById("eqs6op5").checked)
              (
                user_rec['eq6_None'] = 'True'
              )
            else (user_rec['eq6_None'] = 'False');
         }

         else if (ctr == 6){

           if (document.getElementById("eqs7op1").checked)
              (
                user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op1").value
              )
           else if(document.getElementById("eqs7op2").checked)
              (
                user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op2").value 
              )
           else if(document.getElementById("eqs5op3").checked)
              (
                user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op3").value 
              )
           else (user_rec['eq7_TimeOfDay'] = '');                     
         }         

         else '';


           ctr--;
           console.log(user_rec);
           document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
           if (ctr == 0) {ctr = 0;}
         }
      })
  });





function toFallAsleep() {
var person = prompt("How many minutes did it take you to fall asleep?", "Minutes to fall asleep....");
if (person != null) {
  document.getElementsByID("minutesTryingToFallAsleep".innerHTML = person);
}
}


 

function evg_ans_submit() {
           var eqs_answers = {};
           eqs_answers['eq1_Morning'] = user_rec.eq1_Morning;
           eqs_answers['eq1_Afternoon'] = user_rec.eq1_Afternoon;
           eqs_answers['eq1_Evening'] = user_rec.eq1_Evening;
           eqs_answers['eq2_Exercise'] = user_rec.eq2_Exercise;
           eqs_answers['eq3_Alcohol'] = user_rec.eq3_Alcohol;
           eqs_answers['eq4_Nap'] = user_rec.eq4_Nap;
           eqs_answers['eq5_Mood'] = user_rec.eq5_Mood;
           eqs_answers['eq6_Phone'] = user_rec.eq6_Phone;
           eqs_answers['eq6_ReadHomeWork'] = user_rec.eq6_ReadHomeWork;
           eqs_answers['eq6_WatchTV'] = user_rec.eq6_WatchTV;
           eqs_answers['eq6_PlayVideoGames'] = user_rec.eq6_PlayVideoGames;
           eqs_answers['eq6_None'] = user_rec.eq6_None;
           eqs_answers['eq7_TimeOfDay'] = user_rec.eq7_TimeOfDay;

           console.log(eqs_answers);

           alert(eqs_answers.eq7_TimeOfDay);


        $.ajax({
        url: 'post_evg_answers.php',
        type: 'post',
        data: {post_evg_answers:eqs_answers},
        success: function(data) {
                                  alert ('Posted Successfully')
                                },
        error: function(xhr, desc, err) {
                                          console.log(xhr);
                                          console.log("Details: " + desc + "\nError:" + err);
                                        }
              }); 

      };





</script>


<?php require_once("./includes/footer.php"); ?>