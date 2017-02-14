<?php
include("./includes/db_connection.php");
include("./includes/session.php");
include("./includes/functions.php");
confirm_logged_in();
include('./includes/header.php');
?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Coach Z Application (Web) ">
  <meta name="author" content="Brian Watkins & Raja Harsha Chinta">
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

	<script src="morningQuestionsScripts.js"></script> <!-- Questions -->

<!-- Tips generation JScript and Logic -->
	<script type="text/javascript" src="assets/Morning_Tips_test.json"></script>
	<script>


		var div = document.getElementById('push_morning_tip');
		div.innerHTML = div.innerHTML + 'Populate Morning Tip Here';

	</script>




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
function checkQuestion2() {
	a = document.getElementById('inputProblemsFallingAsleepId').checked;
	if (a == true) {
		document.getElementById('part2').style.visibility = "visible";
	}
	if (a == false) {
		document.getElementById('part2').style.visibility = "hidden";
	}
}
// Question 2 Scripts
function q2script() {
	a = document.getElementById('inputProblemsFallingAsleepId').value;
	b = document.getElementById('inputMinutesToFallAsleepId').value;
	questions.setProblemsFallingAsleep(a);
	questions.setMinutesToFallAsleep(b);
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

	mqs_answers['mq1_bedTime'] 				= questions.bedTime;
	mqs_answers['mq1_wakeTime'] 			= questions.wakeTime;
	mqs_answers['mq2_problemsFallingAsleep'] = questions.problemsFallingAsleep;
	mqs_answers['mq2_minutesToFallAsleep'] 	= questions.minutesToFallAsleep;
	mqs_answers['mq3_didWakeDuringTheNight'] = questions.didWakeDuringTheNight;
	mqs_answers['mq3_minutesToFallBackToSleep'] = questions.minutesToFallBackToSleep;
	mqs_answers['mq4_howDidYouFeel'] 		= questions.howDidYouFeel;
	mqs_answers['mq5_noise'] 				= questions.noise;
	mqs_answers['mq5_light'] 				= questions.light;
	mqs_answers['mq5_stress'] 				= questions.stress;
	mqs_answers['mq5_temp'] 					= questions.temp;
	mqs_answers['mq5_nota'] 					= questions.nota;

function submitMorningQuestions() {
	
	//	console.log(mqs_answers);
	$.ajax({
		url: 'post_mng_answers.php',
		type: 'post',
		data: {post_mng_answers:mqs_answers},
		success: function(data) {
			alert ('Posted Successfully');
		},
		error: function(xhr, desc, err) {
			console.log(xhr);
			console.log("Details: " + desc + "\nError:" + err);
		}
	});
}

	console.log(mqs_answers);

// build logic for tip generation Raja

	var btcmp_morning_val = '<?php echo $btcmp_morning_val;?>';
	var cur_mor_day = btcmp_morning_val + 1;


	if (cur_mor_day < 15) {
		if (cur_mor_day = 1){}
	};

// *****************************************************************

</script>
<?php require_once("./includes/footer.php"); ?>