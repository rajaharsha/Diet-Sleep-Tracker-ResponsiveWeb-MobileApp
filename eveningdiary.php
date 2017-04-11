<?php 
include("./includes/db_connection.php");
include("./includes/session.php");
include("./includes/functions.php");
confirm_logged_in();

include('./includes/header.php');
?>


  <script type="text/javascript" src="assets/Evening_Tips.json"></script>
  <script type="text/javascript" src="assets/Standard_Tips.json"></script>

<?php $btcmp_user_mode = get_user_mode($userid); ?>


<!-- Present questions HERE -->
<div class="container">
<!--   <div class="row" id="mainRow"> -->
  <div>
    <div class="row">
      <div class="col-xs-1 col-md-4 col-lg-4"></div>
      <div class="col-xs-12 col-md-4 col-lg-4" id="question1">
        <div class="form-group">
          <div id="questionDisplay"> <!-- Where the question is displayed --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="eveningQuestionsList.js"></script>
<!-- End Question Block --> 

<!-- Tip generation DIV elements -->

  <!-- Modal -->
  <div class="modal fade" id="evening_tip" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Here is your Evening Tip</h4>
        </div>
        <div class="modal-body" id="push_evening_tip" >
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



  <script>

// Initial Values ****************************
var eqs_answers = {};
var questionBank = [qs1, qs2, qs3, qs4, qs5, qs6, qs7]; // Seven questions
var ctr = 0; // start at first question

// Upon page refresh, the page gets loaded with the first question
document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
// Initial Values ****************************




var userid = '<?php echo $userid; ?>';
eqs_answers['uid'] = userid;

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
// end function Next Question *************************









// Question 1 ******************************************
function noCaffeine() { 
eqs_answers['eq1_caffeine'] = 'No';
eqs_answers['eq1_Morning'] = '0'; 
eqs_answers['eq1_Afternoon'] = '0';
eqs_answers['eq1_Evening'] = '0';
}


function changeButton() {
  var checkValue = document.getElementById("q2NextButton").innerHTML;


if (checkValue == "No. Continue"){
    document.getElementById("q2NextButton").innerHTML = "Continue";
} else {
    document.getElementById("q2NextButton").innerHTML = "No. Continue";
}

}


function getCaffeineResults() {
  morningValue = document.getElementById('eq1a').textContent;
  afternoonValue = document.getElementById('eq1b').textContent;
  eveningValue = document.getElementById('eq1c').textContent;
  eqs_answers['eq1_caffeine'] = 'Yes';
  eqs_answers['eq1_Morning'] = morningValue;
  eqs_answers['eq1_Afternoon'] = afternoonValue;
  eqs_answers['eq1_Evening'] = eveningValue;


}
  console.log(eqs_answers);



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
}

// end Question 1 ******************************************












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

  var op1 = document.getElementById("eqs6op1").value;
  var op2 = document.getElementById("eqs6op2").value;
  var op3 = document.getElementById("eqs6op3").value;
  var op4 = document.getElementById("eqs6op4").value;
  var op5 = document.getElementById("eqs6op5").value;
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


var evg_tip_message = '';
var cur_evg_day = '';
var btcmp_log_day_val = '';
var btcmp_user_mode = '';

var btcmp_user_mode = '<?php echo $btcmp_user_mode; ?>';

var btcmp_log_day_val = parseInt('<?php echo $btcmp_log_day_val;?>');
var cur_evg_day = btcmp_log_day_val + 1;

if (btcmp_user_mode != 'B'){cur_evg_day = '';};

eqs_answers['cur_evg_day'] = cur_evg_day;
eqs_answers['btcmp_user_mode'] = btcmp_user_mode;

var btcmp_user_log_count = '';
var btcmp_user_log_count = parseInt('<?php echo $btcmp_user_log_count;?>');

var tip_code = '';

// Set Values PHP Values
function evg_ans_submit() {


    if (cur_evg_day < 15) {

// Day 1 Tip 2: S2 //

      if (cur_evg_day == 1){
                              tip_code = 'S2';
                              evg_tip_message = Standard_Tips.S[0].S2;
      }

 /*
Day 2 Tip 2:
If “phone” on evening question 6 then: E32 or E33
If “read or homework” on evening question 6 then: E34
If “tv” on evening question 6 then: E35
If “videogames” on evening question 6 then: E36
If “none” on evening question 6 then: E37 or E38
If no response on evening question 6 then: E37 or E38

evening question 6 is check all that apply question, so I was thinking for every box the user checks that get a tip.  So if they check phone and tv they get a tip for each.
*/
      if (cur_evg_day == 2){

        if (eqs_answers['eq6_Phone'] == true){
                                                local_array = ['E32','E33'];
                                                var randomIndex = Math.floor(Math.random() * local_array.length);
                                                tip_code = local_array[randomIndex];
                                                if (tip_code == 'E32') {var evg_tip_message = Evening_Tips.Q6[0].E32;};
                                                if (tip_code == 'E33') {var evg_tip_message = Evening_Tips.Q6[0].E33;};
          }

        if (eqs_answers['eq6_ReadHomework'] == true){
                                                      tip_code = 'E34';
                                                      evg_tip_message = Evening_Tips.Q6[0].E34;
        }
        
        if (eqs_answers['eq6_WatchTV'] == true){
                                                  tip_code = 'E35';  
                                                  evg_tip_message = Evening_Tips.Q6[0].E35;
        }
        
        if (eqs_answers['eq6_PlayVideoGames'] == true){
                                                        tip_code = 'E36';
                                                        evg_tip_message = Evening_Tips.Q6[0].E36;
        }

        if (eqs_answers['eq6_None'] == true){
                                              local_array = ['E37','E38'];
                                              var randomIndex = Math.floor(Math.random() * local_array.length);
                                              tip_code = local_array[randomIndex];
                                              if (tip_code == 'E37') {var evg_tip_message = Evening_Tips.Q6[0].E37;};
                                              if (tip_code == 'E38') {var evg_tip_message = Evening_Tips.Q6[0].E38;};
        }

        if (eqs_answers['eq6_None'] == ''){
                                            local_array = ['E37','E38'];
                                            var randomIndex = Math.floor(Math.random() * local_array.length);
                                            tip_code = local_array[randomIndex];
                                            if (tip_code == 'E37') {var evg_tip_message = Evening_Tips.Q6[0].E37;};
                                            if (tip_code == 'E38') {var evg_tip_message = Evening_Tips.Q6[0].E38;};       
        }          
      }


/*Day 3 Tip 1:
If “no” on morning question 3 then: M15
If “yes” and <15 mins awake on morning question 3 then: M16
If “yes” and >16 mins awake on morning question 3 then: M17 or M18
If no response on morning question 3 then: M19
Day 3 Tip 2: E28 or E30 
*/
      if (cur_evg_day == 3){
/*          local_array = [];
          local_array.push(Evening_Tips.Q5[0].E28);
          local_array.push(Evening_Tips.Q5[0].E30);
          var randomIndex = Math.floor(Math.random() * local_array.length);
          var evg_tip_message = local_array[randomIndex];  */

          local_array = ['E28','E30'];
          var randomIndex = Math.floor(Math.random() * local_array.length);
          tip_code = local_array[randomIndex];
          if (tip_code == 'E28'){var evg_tip_message = Evening_Tips.Q5[0].E28;};
          if (tip_code == 'E30'){var evg_tip_message = Evening_Tips.Q5[0].E30;};
      }

/*

 PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING

Day 4 Tip 2: 
Add up the past 4 responses for evening question 2, if “yes” has been answered two or more times then: E8
Add up the past 4 responses for evening question 2, if “yes” has been answered less then two times then: E11
*/

      if (cur_evg_day == 4){}

/*
Day 5 Tip 2:
If “no” on evening question 4 then: E23
If “yes” on evening question 4 then: E25
*/

      if (cur_evg_day == 5){

        if (eqs_answers['eq4_Nap'] == 'No'){
                                              tip_code = 'E23';
                                              var evg_tip_message = Evening_Tips.Q4[0].E23;
                                           }

        if (eqs_answers['eq4_Nap'] == 'Yes'){
                                              tip_code = 'E25';
                                              var evg_tip_message = Evening_Tips.Q4[0].E25
                                            };
      }

/*
Day 6 Tip 2:
If “yes” on evening question 3 then: E15 or E16 or E17 or E18 or E19
If “no” on evening question 3 then: E20 or E21
*/

      if (cur_evg_day == 6){
        
        if (eqs_answers['eq3_Alcohol'] == 'Yes'){
          local_array = ['E15','E16','E17','E18','E19'];
          var randomIndex = Math.floor(Math.random() * local_array.length);
          tip_code = local_array[randomIndex];
          if (tip_code == 'E15'){var evg_tip_message = Evening_Tips.Q3[0].E15;};           
          if (tip_code == 'E16'){var evg_tip_message = Evening_Tips.Q3[0].E16;};
          if (tip_code == 'E17'){var evg_tip_message = Evening_Tips.Q3[0].E17;};
          if (tip_code == 'E18'){var evg_tip_message = Evening_Tips.Q3[0].E18;};
          if (tip_code == 'E19'){var evg_tip_message = Evening_Tips.Q3[0].E19;};
        }

        if (eqs_answers['eq3_Alcohol'] == 'No'){
          local_array = ['E20','E21'];
          var randomIndex = Math.floor(Math.random() * local_array.length);
          tip_code = local_array[randomIndex];
          if (tip_code == 'E20'){var evg_tip_message = Evening_Tips.Q3[0].E20;};
          if (tip_code == 'E21'){var evg_tip_message =  Evening_Tips.Q3[0].E21;};          
        }
      }


/*
Day 7 Tip 2:
If “morning” on evening question 7 then: E39
If “afternoon” on evening question 7 then: E40
If “evening” on evening question 7 then: E41 or E42
*/
      if (cur_evg_day == 7){
        if (eqs_answers['eq7_TimeOfDay'] == 'Morning') {
                                                         tip_code = 'E39'; 
                                                         var evg_tip_message = Evening_Tips.Q7[0].E39;}
        if (eqs_answers['eq7_TimeOfDay'] == 'Afternoon') {
                                                           tip_code = 'E40';
                                                           var evg_tip_message = Evening_Tips.Q7[0].E40;} 
        if (eqs_answers['eq7_TimeOfDay'] == 'Evening') {
          local_array = ['E41','E42'];          
          var randomIndex = Math.floor(Math.random() * local_array.length);
          tip_code = local_array[randomIndex];
          if (tip_code == 'E41'){var evg_tip_message = Evening_Tips.Q7[0].E41;};
          if (tip_code == 'E42'){var evg_tip_message = Evening_Tips.Q7[0].E42;};}
        }

/*
Day 8 Tip 2: S10
*/
      if (cur_evg_day == 8){  
                              tip_code = 'S10';
                              evg_tip_message = Standard_Tips.S[0].S10;}

/*  PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING 


Day 9 Tip 2:
If “noise” on morning question 5 then: M26
If “light” on morning question 5 then: M28
If “stress/worry” on morning question 5 then: M30 or M31
If “room temperature” on morning question 5 then: M33
If “none of the above” or no response on morning question 5 then: M34 or M35
*morning question 5 is check all that apply question, so I was thinking for every box the user checks they get a tip.  So if they check noise and light they get a tip for each.
*/

      if (cur_evg_day == 9){}


/* Day 10 Tip 2: S7 */
      if (cur_evg_day == 10){ tip_code = 'S7';
                              evg_tip_message = Standard_Tips.S[0].S7;}

/*

 PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING PENDING

Day 11 Tip 2:
Add up the past 11 responses for evening question 2, if “yes” has been answered four or more times then: E9 or E10
Add up the past 11 responses for evening question 2, if “yes” has been answered less then four times then: E12 or E13
If no response on evening question 2 then: E14
*/
      if (cur_evg_day == 11){}

/*
Day 12 Tip 2:
If “phone” on evening question 6 then: E32 or E33
If “read/homework” on evening question 6 then: E34
If “tv” on evening question 6 then: E35
If “videogames” on evening question 6 then: E36
If “none” on evening question 6 then: E37 or E38
*evening question 6 is check all that apply question, so I was thinking for every box the user checks that get a tip.  So if they check phone and tv they get a tip for each. 
*/

      if (cur_evg_day == 12){
        if (eqs_answers['eq6_Phone'] = true){
          local_array = ['E32','E33'];
          var randomIndex = Math.floor(Math.random() * local_array.length);
          var tip_code = local_array[randomIndex];               
          if (tip_code == 'E32'){var evg_tip_message = Evening_Tips.Q6[0].E32;};
          if (tip_code == 'E33'){var evg_tip_message = Evening_Tips.Q6[0].E33;};
        }

        if (eqs_answers['eq6_ReadHomework'] = true){
          tip_code = 'E34';
          var evg_tip_message = Evening_Tips.Q6[0].E34;
        }

        if (eqs_answers['eq6_WatchTV'] = true){
          tip_code = 'E35';
          var evg_tip_message = Evening_Tips.Q6[0].E35;            
        }

        if (eqs_answers['eq6_PlayVideoGames'] = true){
          tip_code = 'E36';
          var evg_tip_message = Evening_Tips.Q6[0].E36;            
        }

        if (eqs_answers['eq6_None'] = true){
          local_array = ['E37','E38'];
          var randomIndex = Math.floor(Math.random() * local_array.length);
          var tip_code = local_array[randomIndex];
          if (tip_code == 'E37') {var evg_tip_message = Evening_Tips.Q6[0].E37;};                     
          if (tip_code == 'E38') {var evg_tip_message = Evening_Tips.Q6[0].E38;};
        }
      }

/* Day 13 Tip 2: E29 or E31 */

      if (cur_evg_day == 13){
          local_array = ['E29','E31'];
          var randomIndex = Math.floor(Math.random() * local_array.length);
          var tip_code = local_array[randomIndex];
          if (tip_code == 'E29'){var evg_tip_message = Evening_Tips.Q5[0].E29;};
          if (tip_code == 'E31'){var evg_tip_message = Evening_Tips.Q5[0].E31;};
      }

/* Day 14 Tip 2: S13* */

      if (cur_evg_day == 14){tip_code = 'S13';
                             evg_tip_message = Standard_Tips.S[0].S13;}

} else { evg_tip_message = 'Please choose Bootcamp mode to receive daily tips and sleep tracking features.'};

eqs_answers['tip_code'] = tip_code;

console.log(eqs_answers);

  $.ajax({
    url: 'post_evg_answers.php',
    type: 'post',
    data: {post_evg_answers:eqs_answers},    
    success: function(data) {
      var div = document.getElementById('push_evening_tip');
      div.innerHTML = evg_tip_message;
      document.getElementById('eqs_submit').disabled = true;
    },

    error: function(xhr, desc, err) {
      console.log(xhr);
      console.log("Details: " + desc + "\nError:" + err);
    }
  }); 

};

</script>

<?php require_once("./includes/footer.php"); ?>