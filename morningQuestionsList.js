
	


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










