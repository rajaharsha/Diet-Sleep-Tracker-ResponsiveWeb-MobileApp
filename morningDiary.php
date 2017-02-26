<?php
include("./includes/db_connection.php"); // To connect to Database
include("./includes/session.php"); // Start Session variables
include("./includes/functions.php"); // Required php functions
confirm_logged_in(); // Function
include('./includes/header.php'); // Bring in the Menus, etc
?>


<!-- Not going to affect the code Basic Meta--> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Coach Z Application (Web) ">
<meta name="author" content="Brian Watkins & Raja Harsha Chinta">
<!-- ****************************** End Meta ********* --> 

  
  <!-- jQuery --> 
  <script src="js/jquery.min.js"></script>
<script src="Jhorton/jquery.timepicker.js" type="text/javascript"></script>
<link href="Jhorton/jquery.timepicker.css"  type="text/css" rel="stylesheet" />
<script src="Jhorton/lib/bootstrap-datepicker.js" type="text/javascript"></script>
<link href="Jhorton/lib/bootstrap-datepicker.css" type="text/css" rel="stylesheet" />
<script src="Jhorton/lib/site.js" type="text/javascript"></script>
<link href="Jhorton/lib/site.css" type="text/css" rel="stylesheet" />





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
	a = document.getElementById('inputBedTimeId').value;
	b = document.getElementById('inputWakeTimeId').value;
	questions.setBedTime(a);
	questions.setWakeTime(b);
}
function checkQuestion2(choice) {
	
	if (choice == "1") {
		document.getElementById('part2').style.visibility = "visible";
	}
	if (choice == "0") {
		document.getElementById('part2').style.visibility = "collapse";
	}
}
// Question 2 Scripts
function q2script() {
	a = document.getElementById('inputProblemsFallingAsleepId').value;
	b = document.getElementById('inputMinutesToFallAsleepId').value;
	questions.setProblemsFallingAsleep(a);
	questions.setMinutesToFallAsleep(b);
}




function checkQuestion3(choice) {
	
	if (choice == "1") {
		document.getElementById('part2').style.visibility = "visible";
	}
	if (choice == "0") {
		document.getElementById('part2').style.visibility = "collapse";
	}
}
// Question 3 Scripts
function q3script() {
	a = document.getElementById('inputDidWakeDuringTheNightId').value;
	b = document.getElementById('inputMinutesToFallBackToSleepId').value;
	questions.setDidWakeDuringTheNight(a);
	questions.setMinutesToFallBackToSleep(b);
}











// Question 4 Scripts
function q4script(choice) {
	questions.setHowDidYouFeel(choice);
}
// Question 5 Scripts
function q5script(choice) {
var a = document.getElementById('noiseId').checked // true/false		
var b = document.getElementById('lightId').checked // true/false		
var c = document.getElementById('worryId').checked // true/false		
var d = document.getElementById('tempId').checked  // true/false		
var e = document.getElementById('noneId').checked  // true/false
if (choice == "0") { 
	document.getElementById('noiseId').checked = false;		
	document.getElementById('lightId').checked = false;		
	document.getElementById('worryId').checked = false;		
	document.getElementById('tempId').checked = false;
	a = false;		
	b = false;		
	c = false;		
	d = false;		
	e = true;
} 		
if (choice == "1") { 
document.getElementById('noneId').checked = false; // deselect Nota	
e = false; // set Nota to false
}
// validate data first
var f = a ? 1 : 0; // Ternary (conditional ) operator		
var g = b ? 1 : 0; // variableName = (conditional) ? value1:value2		
var h = c ? 1 : 0; // 1 if true, 0 if false		
var i = d ? 1 : 0;		
var j = e ? 1 : 0;	
var finalResult = f + g + h + i + j; // if NOT zero, then can be submitted. 
// only happens if the user has made a selection and pressed submit. 
if (choice == "2"  && finalResult != 0) {
// set object parameters to true and false 
questions.setNoise(a);
questions.setLight(b);
questions.setStress(c);
questions.setTemp(d);
questions.setNota(e);
submitMorningQuestions();
} else if (choice == "2"  && finalResult == 0){
	window.alert("Please make a selection");
}
}














var mqs_answers = {};
var mng_tip_message = '';
var cur_mor_day = 0;
var btcmp_morning_val = 0;

var btcmp_morning_val = parseInt('<?php echo $btcmp_morning_val;?>');
var cur_mor_day = btcmp_morning_val + 1;


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

	if (cur_mor_day < 15) {
		alert (cur_mor_day);

// Day - 1 - Morning //

if (cur_mor_day == 1){mng_tip_message = Standard_Tips.S[0].S1;}

// Day - 2 - Morning //

if (cur_mor_day == 2){ 

	if(questions.problemsFallingAsleep == 'on'){
		alert ('1');

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

</script>
<?php require_once("./includes/footer.php"); ?>

