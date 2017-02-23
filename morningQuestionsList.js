


var qs1 = '\
<div class="container-fluid">\
\
<form onSubmit="return !!(false & nextQuestion());">\
\
\
<div class="progress">\
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
  aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">\
    1/5 Complete (success)\
  </div>\
</div>\
\
<div class="row">\
<div class="text-center col-xs-5 col-md-6 col-lg-6"><label for="inputBedTimeId"><h4>Bed Time</h4></label></div>\
<div class="           col-xs-7 col-md-8 col-lg-8"><input type="time" class="form-control" id="inputBedTimeId" name="BedTime"  required ></div>\
</div>\
\
<div class="row">\
<div class="text-right col-xs-5 col-md-6 col-lg-6"><label for="inputWakeTimeId"><h4>Wake Time</h4></label></div>\
<div class="           col-xs-7 col-md-8 col-lg-8"><input type="time" class="form-control" id="inputWakeTimeId" name="WakeTime" required >\
</div>\
\
</div>\
<br />\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="q1script()" >\
<span>Continue</span>\
</button>\
</div>\
\
</form>\
\
</div>\
';











var qs2 = ' \
\
<div class="container-fluid">\
<form onSubmit="return !!(false & nextQuestion());">\
\
<div class="progress">\
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">\
    2/5 Complete (success)\
  </div>\
</div>\
\
<div class="row">\
\
\
			<div class="row">\
			<div class="col-xs-12 text-center">\
			<h3 id="part1">Did you have any problems falling asleep last night?</h3> \
			</div>\
			</div>\
			\
			\
			\
			\
			<div class="row" id="part1">\
					<div class="col-xs-3"></div>\
					\
					<div class="col-xs-3 text-center">\
					<h4>Yes</h4>\
					</div>\
					\
					<div class="col-xs-3 text-center">\
					<h4>No</h4>\
					</div>\
					\
					<div class="col-xs-3"></div>\
			</div>\
			\
			\
			<div class="row">\
					<div class="col-xs-3"></div>\
					\
					<div class="col-xs-3 text-center">\
					<input type="radio" name="q2" onclick="checkQuestion2()" id="inputProblemsFallingAsleepId">\
					</div>\
					\
					<div class="col-xs-3 text-center">\
					<input type="radio" name="q2" onclick="checkQuestion2()" id="inputProblemsFallingAsleepId">\
					</div>\
					\
					<div class="col-xs-3"></div>\
			</div>\
			\
			\
			\
			\
			<div class="row" id="part2" style="visibility: hidden;">\
					<div class="row">\
						<div class="col-xs-12 text-center">\
						<h3>How many minutes did it take you to fall asleep?</h3> \
						</div>\
					</div>\
					\
					\
							<div class="row">\
									<div class="col-xs-4"></div>\
										<div class="col-xs-4">\
											<input class="form-control text-center " id="inputMinutesToFallAsleepId" min="0" type="number" name="WakeTime">\
										</div>\
										<div class="col-xs-4"></div>\
									</div>\
							</div>\
							\
<br\>						\
							\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="q2script()" >\
<span>Continue</span>\
</button>\
</div>\
</div>\
</div\
			\
\
\
</div> <!-- End of Row -->\
</form> <!-- End of form --> \
</div> <!-- End of Container-fluid --> \
';




















var qs3 = ' \
<div class="container-fluid">\
<div class="row">\
<form onSubmit="return !!(false & nextQuestion());">\
\
<div class="progress">\
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">\
    3/5 Complete (success)\
  </div>\
</div>\
\
<div class="row">\
\
	<div class="row">\
	<div class="col-xs-12 text-center">\
	<h3>Last night did you wake up at all during the night?</h3> \
	</div>\
	</div>\
	\
	<div class="row">\
	<div class="col-md-3"></div>\
	<div class="col-md-2 noTag text-center">\
	<h4>No</h4>\
	</div>\
	\
	<div class="col-md-3 sliderTag text-center"><label class="switch">\
	<input id="inputDidWakeDuringTheNightId" type="checkbox">\
	<div class="slider round"></div>\
	</label>\
	</div>\
	\
	<div class="col-md-2 yesTag text-center"><h4>Yes</h4></div>\
	<br/>\
	</div>\
	\
	\		<div class="row">\
				<div class="col-xs-12 text-center">\
				<h3>How many minutes did it take you to fall asleep?</h3> \
				</div>\
			</div>\
			\
			<div class="row">\
				<div class="col-md-3"></div>\
				<div class="col-md-6 text-center">\
				<input class="form-control text-center" id="inputMinutesToFallBackToSleepId" type="Number" min="0"  name="WakeTime">\
				</div>\
			</div>\
	<br/>\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="q3script()" >\
<span>Continue</span>\
</button>\
</div>\
</div>\
	\
\
</form>  <!-- Form --> \
</div>   <!-- Row --> \
</div>   <!-- Container-fluid --> \
';











var qs4 = ' \
<div class="container-fluid">\
<div class="row">\
<form onSubmit="return !!(false & nextQuestion());">\
	\
\
<div class="progress">\
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">\
    4/5 Complete (success)\
  </div>\
</div>\
\
	\
	<div class="row">\
		<div class="col-xs-12 text-center">\
		<h3>When you woke up this morning, how did you feel?</h3>\
		</div>\
	</div>\
	\
	\
	\
	<!-- Sleepy Checkbox -->\
	<div class="row">\
		<div class="col-xs-12">\
		<label id="q4Label" for="InputSleepyId"><input onclick="q4script(1)" type="radio" id="InputSleepyId" name="feel" required>\
		Sleepy</label>\
		</div>\
	</div>\
	\
	\
	\
	\
	<!-- Somewhat Sleepy Checkbox --> \
	<div class="row">\
		<div class="col-xs-12">\
		<label id="q4Label"  for="InputSomewhatSleepyId"><input onclick="q4script(2)" type="radio" id="InputSomewhatSleepyId" name="feel" required>\
		Somewhat Sleepy</label> \
		</div>\
	</div>\
	\
	\
	\
	\
	<!-- Alert Checkbox --> \
	<div class="row">\
		<div class="col-xs-12"><label id="q4Label"  for="InputAlertId"><input onclick="q4script(3)" type="radio" id="InputAlertId" name="feel" required>\
		Alert</label> \
		</div>\
	</div> \
	\
	\
	\
	<input class="form-control btn-primary" id="submitButton1" type="submit" value="Continue" />\
\
\
\
\
\
</form>\
</row>\
</div>\
';












var qs5 = '<form onSubmit="return !!(false & q5script(2) ); ">\
\
<div class="progress">\
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">\
    5/5 Complete (success)\
  </div>\
</div>\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
<h3>Did anything bother your sleep last night?</h3>\
<h4>Check all that apply</h4>\
</div>\
\
\
\
<div class="col-xs-4 col-md-4 col-lg-4"></div>\
\
<div class="col-xs-8 col-md-6 col-lg-6">\
\
		<div class="checkbox">\
		<label><input type="Checkbox" onclick="q5script(1)" id="noiseId"  name="Noise">Noise</label>\
		</div>\
		\
		<div class="checkbox">\
		<label><input type="Checkbox" onclick="q5script(1)" id="lightId"  name="Light">Light</label>\
		</div>\
		\
		<div class="checkbox">\
		<label><input type="Checkbox" onclick="q5script(1)" id="worryId"  name="Stress/Worry">Stress/Worry</label>\
		</div>\
		\
		<div class="checkbox">\
		<label><input type="Checkbox" onclick="q5script(1)" id="tempId"   name="Room Temperature">Room Temperature</label>\
		</div>\
		\
		<div class="checkbox">\
		<label><input type="Checkbox" onclick="q5script(0)" id="noneId"   name="None of the above">None of the above</label>\
		</div>\
\
</div>\
\
<div class="row">\
\
<div class="col-xs-12 col-md-12 col-lg-12"><label for="submitButton1"></label><input \
class="form-control btn btn-primary" \
id="submitButton1" \
type="submit" \
value="Submit" \
data-toggle="modal" \
data-target="#morning_tip" /><!-- MODAL Drop down - TIPs --> \ 
\
</div>\
\
</div>\
</div>\
</form>\
';

	


		var questionBank = [qs1, qs2, qs3, qs4, qs5]; // found in morningQuestionsScripts.js
	
		var ctr = 0; 

		var questions = new morningQuestion("", "", false, "", false, "", "0", "0", "0", "0", "0", "0");




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







function q2script() {
	a = document.getElementById('inputProblemsFallingAsleepId').value;
	b = document.getElementById('inputMinutesToFallAsleepId').value;
	questions.setProblemsFallingAsleep(a);
	questions.setMinutesToFallAsleep(b);
}








function q3script() {
	a = document.getElementById('inputDidWakeDuringTheNightId').value;
	b = document.getElementById('inputMinutesToFallBackToSleepId').value;
	questions.setDidWakeDuringTheNight(a);
	questions.setMinutesToFallBackToSleep(b);
}







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

mqs_answers['mq1_bedTime'] 					= questions.bedTime;
mqs_answers['mq1_wakeTime'] 				= questions.wakeTime;
mqs_answers['mq2_problemsFallingAsleep'] 	= questions.problemsFallingAsleep;
mqs_answers['mq2_minutesToFallAsleep'] 		= questions.minutesToFallAsleep;
mqs_answers['mq3_didWakeDuringTheNight'] 	= questions.didWakeDuringTheNight;
mqs_answers['mq3_minutesToFallBackToSleep'] = questions.minutesToFallBackToSleep;
mqs_answers['mq4_howDidYouFeel'] 			= questions.howDidYouFeel;
mqs_answers['mq5_noise'] 					= questions.noise;
mqs_answers['mq5_light'] 					= questions.light;
mqs_answers['mq5_stress'] 					= questions.stress;
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










