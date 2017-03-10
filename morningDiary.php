<?php
include("./includes/db_connection.php"); // To connect to Database
include("./includes/session.php"); // Start Session variables
include("./includes/functions.php"); // Required php functions
confirm_logged_in(); // Function
include('./includes/header.php'); // Bring in the Menus, etc
?>



  
  <!-- Jhorton Bootstrap-Datepicker REQUIRES! jQuery --> 
  <!-- jQuery is brought in from header.php --> 
<script src="Jhorton/jquery.timepicker.js" type="text/javascript"></script>
<link href="Jhorton/jquery.timepicker.css"  type="text/css" rel="stylesheet" />
<script src="Jhorton/lib/bootstrap-datepicker.js" type="text/javascript"></script>
<link href="Jhorton/lib/bootstrap-datepicker.css" type="text/css" rel="stylesheet" />
<script src="Jhorton/lib/site.js" type="text/javascript"></script>
<link href="Jhorton/lib/site.css" type="text/css" rel="stylesheet" />
<!-- *********************************** end date-picker dependencies *** -->




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




	<!-- Brings in the Obect and Questions --> 
	<script src="morningQuestionsScripts.js" type="text/javascript"></script>
	<!-- Object and Question Vars are now accessible -->




	<!-- Tip generation DIV elements -->

	<div class="modal fade" id="morning_tip" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" >Here is your Morning Tip</h4>
				</div>
				<div class="modal-body" id="push_morning_tip">
					<p></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>




<script>
$(function() {
$("#stepExample1").timepicker({ "step": 10 });
$("#stepExample2").timepicker({
"step": function(i) {
return (i%2) ? 15 : 45;
}
});
});
</script>



	<!-- Tips generation JScript and Logic -->
	<script type="text/javascript" src="assets/Morning_Tips.json"></script>
	<script type="text/javascript" src="assets/Standard_Tips.json"></script>
	





	<script>




		var questionBank = [qs1, qs2, qs3, qs4, qs5];
		var questions = new morningQuestion("", "", false, "", false, "", "0", "0", "0", "0", "0", "0"); 
		var ctr = 0; 
		document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
		

		function nextQuestion()
		{
			if(ctr < 4) 
			{
				ctr++;
				document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
				return false;
			}
		}




// Question 1 Scripts
function q1script() {
	var a = document.getElementById('stepExample1').value;
	var b = document.getElementById('stepExample2').value;
	questions.setBedTime(a);
	questions.setWakeTime(b);
}

function checkQuestion2() {

	
	var a = document.getElementById('inputProblemsFallingAsleepId').innerHTML;



	if (a == "Yes?") {
		document.getElementById('inputProblemsFallingAsleepId').innerHTML = "No";
		var a = document.getElementById('inputMinutesToFallAsleepId').innerHTML;
		document.getElementById('q2NextButton').innerHTML = "Continue"
		
	} 


	if (a == "No") { 
		document.getElementById('inputProblemsFallingAsleepId').innerHTML = "Yes?";
		var a = document.getElementById('inputMinutesToFallAsleepId').innerHTML;
		document.getElementById('q2NextButton').innerHTML = "No. Please continue!"
}

}








// Question 2 Scripts
function q2script() {
	var a = document.getElementById('inputProblemsFallingAsleepId').value;
	var b = document.getElementById('inputMinutesToFallAsleepId').value;
	questions.setProblemsFallingAsleep(a);
	questions.setMinutesToFallAsleep(b);
}





// Question 3 Scripts
function q3script() {
	var a = document.getElementById('inputDidWakeDuringTheNightId').value;
	var b = document.getElementById('inputMinutesToFallBackToSleepId').value;
	questions.setDidWakeDuringTheNight(a);
	questions.setMinutesToFallBackToSleep(b);
}

function checkQuestion3() {

	
	var a = document.getElementById('inputDidWakeDuringTheNightId').innerHTML;



	if (a == "Yes?") {
		document.getElementById('inputDidWakeDuringTheNightId').innerHTML = "No";
		var a = document.getElementById('inputMinutesToFallBackToSleepId').innerHTML;
		document.getElementById('q3NextButton').innerHTML = "Continue"
		
	} 


	if (a == "No") { 
		document.getElementById('inputDidWakeDuringTheNightId').innerHTML = "Yes?";
		var a = document.getElementById('inputMinutesToFallBackToSleepId').innerHTML;
		document.getElementById('q3NextButton').innerHTML = "No. Please continue!"
}

}









// Question 4 Scripts
function q4script(choice) {
	questions.setHowDidYouFeel(choice);
}


// Question 6 ******************************************
function question5(choice) {
  switch (choice) {
    case 1: // case 1, comes from first button
      id = "mqs5op1"; // get the id
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 2:
      id = "mqs5op2";
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 3:
      id = "mqs5op3";
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 4:
      id = "mqs5op4";
      var background = document.getElementById(id).style.backgroundColor;
      checkColor(background, id);
      break;
    case 5:
      id = "mqs5op5";
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
    document.getElementById('mqs5op' + i).style.backgroundColor = "white";
    document.getElementById('mqs5op' + i).style.color = "black";
    document.getElementById('mqs5op' + i).value = "false";
  }
}


function checkColor(myColor, myId) {
  document.getElementById("mqs5op5").value = "false"; // Ensure NOTA is Reset
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





// // Question 5 Scripts
// function q5script(choice) {
// var a = document.getElementById('noiseId').checked // true/false		
// var b = document.getElementById('lightId').checked // true/false		
// var c = document.getElementById('worryId').checked // true/false		
// var d = document.getElementById('tempId').checked  // true/false		
// var e = document.getElementById('noneId').checked  // true/false
// if (choice == "0") { 
// 	document.getElementById('noiseId').checked = false;		
// 	document.getElementById('lightId').checked = false;		
// 	document.getElementById('worryId').checked = false;		
// 	document.getElementById('tempId').checked = false;
// 	a = false;		
// 	b = false;		
// 	c = false;		
// 	d = false;		
// 	e = true;
// } 		
// if (choice == "1") { 
// document.getElementById('noneId').checked = false; // deselect Nota	
// e = false; // set Nota to false
// }
// // validate data first
// var f = a ? 1 : 0; // Ternary (conditional ) operator		
// var g = b ? 1 : 0; // variableName = (conditional) ? value1:value2		
// var h = c ? 1 : 0; // 1 if true, 0 if false		
// var i = d ? 1 : 0;		
// var j = e ? 1 : 0;	
// var finalResult = f + g + h + i + j; // if NOT zero, then can be submitted. 
// // only happens if the user has made a selection and pressed submit. 
// if (choice == "2"  && finalResult != 0) {
// // set object parameters to true and false 
// questions.setNoise(a);
// questions.setLight(b);
// questions.setStress(c);
// questions.setTemp(d);
// questions.setNota(e);
// submitMorningQuestions();
// } else if (choice == "2"  && finalResult == 0){
// 	window.alert("Please make a selection");
// }
// }
















var mqs_answers = {};
var mng_tip_message = '';
var cur_mor_day = '';
var btcmp_log_day_val = '';

var btcmp_log_day_val = parseInt('<?php echo $btcmp_log_day_val;?>');
var cur_mor_day = btcmp_log_day_val + 1;

var btcmp_user_log_count = '';
var btcmp_user_log_count = parseInt('<?php echo $btcmp_user_log_count;?>');


function submitMorningQuestions() {

	mqs_answers['mq1_bedTime'] 				= questions.bedTime;
	mqs_answers['mq1_wakeTime'] 			= questions.wakeTime;
	mqs_answers['mq2_problemsFallingAsleep'] = questions.problemsFallingAsleep;
	mqs_answers['mq2_minutesToFallAsleep'] 	= questions.minutesToFallAsleep;
	mqs_answers['mq3_didWakeDuringTheNight'] = questions.didWakeDuringTheNight;
	mqs_answers['mq3_minutesToFallBackToSleep'] = parseInt(questions.minutesToFallBackToSleep);
	mqs_answers['mq4_howDidYouFeel'] 		= questions.howDidYouFeel;
	mqs_answers['mq5_noise'] 				= questions.noise;  
	mqs_answers['mq5_light'] 				= questions.light;
	mqs_answers['mq5_stress'] 				= questions.stress;
	mqs_answers['mq5_temp'] 				= questions.temp;
	mqs_answers['mq5_nota'] 				= questions.nota;	

	console.log(mqs_answers);


// Send to Database???????? the morning questions??






	if (cur_mor_day < 15) {
		alert (cur_mor_day);

// Day - 1 - Morning //

if (cur_mor_day == 1){mng_tip_message = Standard_Tips.S[0].S1;}

// Day - 2 - Morning //

if (cur_mor_day == 2){ 


	if(questions.problemsFallingAsleep == 'on'){
		alert ('1');

			if(questions.problemsFallingAsleep == 'on'){



		local_array = [];
		local_array.push(Morning_Tips.Q2[0].M8);
		local_array.push(Morning_Tips.Q2[0].M9);


		var randomIndex = Math.floor(Math.random() * local_array.length); 
		var mng_tip_message = local_array[randomIndex];
	}
	if(questions.problemsFallingAsleep == ''){
		alert ('2');
		local_array = [];
		local_array.push(Morning_Tips.Q2[0].M10);
		local_array.push(Morning_Tips.Q2[0].M11);

		var randomIndex = Math.floor(Math.random() * local_array.length); 
		var mng_tip_message = local_array[randomIndex];				
	}

					var randomIndex = Math.floor(Math.random() * local_array.length); 
					var mng_tip_message = local_array[randomIndex];
				}
			if(questions.problemsFallingAsleep == ''){
					local_array = [];
					local_array.push(Morning_Tips.Q2[0].M10);
					local_array.push(Morning_Tips.Q2[0].M11);


	if(questions.problemsFallingAsleep == 'off'){
		var mng_tip_message = Morning_Tips.Q2[0].M14;				
	}
}		

/*  Day 3 Tip 1:
If “no” on morning question 3 then: M15 
If “yes” and <15 mins awake on morning question 3 then: M16 
If “yes” and >16 mins awake on morning question 3 then: M17 or M18
If no response on morning question 3 then: M19
*/

if (cur_mor_day == 3){

	if (questions.didWakeDuringTheNight == ''){
		var mng_tip_message = Morning_Tips.Q3[0].M15;
	}

	if (questions.didWakeDuringTheNight == 'on'){

		if (parseInt(questions.minutesToFallBackToSleep) <= 15){

			var mng_tip_message = Morning_Tips.Q3[0].M15;
		}
		if (parseInt(questions.minutesToFallBackToSleep) > 16){


			local_array = [];
			local_array.push(Morning_Tips.Q3[0].M17);
			local_array.push(Morning_Tips.Q3[0].M18);

			var randomIndex = Math.floor(Math.random() * local_array.length); 
			var mng_tip_message = local_array[randomIndex];	
		}
		if  (questions.minutesToFallBackToSleep == ''){

			var mng_tip_message = Morning_Tips.Q3[0].M19;
		}				
	}

	if (questions.didWakeDuringTheNight == 'off'){
		var mng_tip_message = Morning_Tips.Q3[0].M15;
	}
}

/*
Day 4 Tip 1: S4	
*/

if (cur_mor_day == 4){mng_tip_message = Standard_Tips.S[0].S4;}


		/* Skipped Day 5 because the requirement points to Eventing Tips in Morning Tips section - Need to Validate from Megg
			    Day 5 Tip 1:
		If “morning” in evening question 1 then: E1 or E2
		If “afternoon” in evening question 1 then: E3
		If “evening” in evening question 1 then: E4 or E5
		If “no caffeine” in evening question 1 then: E6
		If no response in evening question 1 then: E7
		*If more than box is checked (morning and afternoon, or all three)- provide a tip for each time of day where caffeine use was reported
		*/

		if (cur_mor_day == 5) {mng_tip_message = 'Have a nice day.'}

		/*
		Day 6 Tip 1:
		If “noise” on morning question 5 then: M26
		If “light” on morning question 5 then: M27 
		If “stress/worry” on morning question 5 then: M29 
		If “room temperature” on morning question 5 then: M32 
		If “none of the above” or no response on morning question 5 then: M34 or M35
		*morning question 5 is check all that apply question, so I was thinking for every box the user checks they get a tip.  So if they check noise and light they get a tip for each.
		*/

		if (cur_mor_day == 6) {

			local_array = [];
			mng_tip_message = ''

			if (questions.noise == true){local_array.push(Morning_Tips.Q5[0].M26);} 
			if (questions.light == true){local_array.push(Morning_Tips.Q5[0].M27);}
			if (questions.stress == true){local_array.push(Morning_Tips.Q5[0].M29);}
			if (questions.temp == true){local_array.push(Morning_Tips.Q5[0].M32);}

			local_array_length = local_array.length;
			for (i=0; i<local_array_length; i++){
				mng_tip_message += local_array[i] + "<br><br>";


			}	

			if (questions.nota == true){
				
				local_array = [];
				local_array.push(Morning_Tips.Q5[0].M34);
				local_array.push(Morning_Tips.Q5[0].M35);

				var randomIndex = Math.floor(Math.random() * local_array.length); 
				var mng_tip_message = local_array[randomIndex];	
			}
		}

		/*
		Day 7 Tip 1: S3
		*/
	    if (cur_mor_day == 7){mng_tip_message = Standard_Tips.S[0].S3;}

		/*
		Day 8 Tip 1:
		If “sleepy” on morning question 4 then: M20 or M21 or M22
		If “somewhat sleepy” on morning question 4 then: M23
		If “alert” on morning question 4 then: M24
		If no response on morning question 4 then: M25
		*/
		if (cur_mor_day == 8) {

			if (questions.howDidYouFeel == 'Sleepy') {

				local_array = [];
				local_array.push(Morning_Tips.Q4[0].M20);
				local_array.push(Morning_Tips.Q4[0].M21);
				local_array.push(Morning_Tips.Q4[0].M22);

				var randomIndex = Math.floor(Math.random() * local_array.length); 
				var mng_tip_message = local_array[randomIndex];	
			}

			if (questions.howDidYouFeel == 'Somewhat Sleepy') {mng_tip_message = Standard_Tips.Q4[0].M23;}
			if (questions.howDidYouFeel == 'Alert') {mng_tip_message = Standard_Tips.Q4[0].M24;}
			if (questions.howDidYouFeel == '') {mng_tip_message = Standard_Tips.Q4[0].M25;}
		} 

		/*
		Day 9 Tip 1: S5
		*/
	    if (cur_mor_day == 9){mng_tip_message = Standard_Tips.S[0].S5;}		
	    /*
	    Day 10 Tip 1:
		If “no” on morning question 2 then: M7
		If “yes” on morning question 2 then: M12 or M13
		If no response on morning question 2 then: M14
	    */
	    if (cur_mor_day == 10){
	    	if (questions.problemsFallingAsleep == 'no') {mng_tip_message = Standard_Tips.Q2[0].M7;}
	    	if (questions.problemsFallingAsleep == 'yes') {

				local_array = [];
				local_array.push(Morning_Tips.Q2[0].M12);
				local_array.push(Morning_Tips.Q2[0].M13);

				var randomIndex = Math.floor(Math.random() * local_array.length); 
				var mng_tip_message = local_array[randomIndex];	
	    	}
	    	if (questions.problemsFallingAsleep == '') {mng_tip_message = Standard_Tips.Q2[0].M14;}
	    }

		/*
		Day 11 Tip 1:
		If sleep time calculated from morning question 1 is less than 7 hours then: M1 or M2
		If sleep time calculated from morning question 1 is between 7-9 hours then: M5
		If sleep time calculated from morning question 1 is greater than 9 hours then: M3 or M4
		If no response on morning question 1 then: M6
		*/

		function diff_minutes(dt2, dt1) 
		 {

		  var diff =(dt2.getTime() - dt1.getTime()) / 1000;
		  diff /= 60;
		  return Math.abs(Math.round(diff));
		  
		 }

		if (cur_mor_day == 11) {

			var bt = new Date("January 01, 1001 " + questions.bedTime);
			var wt = new Date("January 01, 1001 " + questions.wakeTime);
			sleep_hrs = diff_minutes(bt,wt) / 60;
			if (sleep_hrs > 12) {sleep_hrs = (24 - sleep_hrs);}
			
			if (sleep_hrs < 7) {
				local_array = [];
				local_array.push(Morning_Tips.Q1[0].M1);
				local_array.push(Morning_Tips.Q1[0].M2);

				var randomIndex = Math.floor(Math.random() * local_array.length); 
				var mng_tip_message = local_array[randomIndex];	
			}

			if (sleep_hrs >= 7 && sleep_hrs <= 8){mng_tip_message = Standard_Tips.Q1[0].M5;}
			if (sleep_hrs > 9){
				local_array = [];
				local_array.push(Morning_Tips.Q1[0].M3);
				local_array.push(Morning_Tips.Q1[0].M4);

				var randomIndex = Math.floor(Math.random() * local_array.length); 
				var mng_tip_message = local_array[randomIndex];	
			}
		}

		/*
		Day 12 Tip 2: S8
		Tip 2 is choosed because Tip 1 is pointing to Evening Questions.
		*/

		if (cur_mor_day == 12){mng_tip_message = Standard_Tips.S[0].S8;}

		/*
		Day 13 Tip 1: S9
		*/	

		if (cur_mor_day == 13){mng_tip_message = Standard_Tips.S[0].S9;}

		/*
		Day 14 Tip 1:
		If at least 15 out of 28 diary entries were completed then: S11
		If less than 15 diary entries were completed then: S12
		*/	
		if (cur_mor_day == 14){

			if (btcmp_user_log_count < 15) {mng_tip_message = Standard_Tips.S[0].S12;}
			if (btcmp_user_log_count > 15) {mng_tip_message = Standard_Tips.S[0].S11;}
		}

};



$.ajax({
	url: 'post_mng_answers.php',
	type: 'post',
	data: {post_mng_answers:mqs_answers},
	success: function(data) {	
		var div = document.getElementById('push_morning_tip');
		div.innerHTML = div.innerHTML + mng_tip_message;
		alert ('Posted Successfully');
	},
	error: function(xhr, desc, err) {
		console.log(xhr);
		console.log("Details: " + desc + "\nError:" + err);
	}
});
}
}


</script>
<?php require_once("./includes/footer.php"); ?>



