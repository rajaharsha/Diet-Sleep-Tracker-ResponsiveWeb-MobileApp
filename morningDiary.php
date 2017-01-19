<?php include('./includes/header.php'); ?><!-- Bring in the Jumbotron and Navigation bars --> 
<div id="questionDisplay"></div>  <!-- Present questions HERE -->
<script src="morningQuestionsScripts.js"></script> 
<script>

	var questionBank = [qs1, qs2, qs3, qs4, qs5];
	var questions = new morningQuestion("", "", false, "", false, "", "0", "0", "0", "0", "0", "0"); 
	var ctr = 0; 

	document.getElementById("questionDisplay").innerHTML = questionBank[ctr];

	function nextQuestion(){
		if(ctr < 4) {
			ctr++;
			document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
			return false;
		}
	}

// Question 1 Scripts
function q1script() {
	// Maybe add validations here......

	// Set the object parameters......
	a = document.getElementById('inputBedTimeId').value;
	b = document.getElementById('inputWakeTimeId').value;
	questions.setBedTime(a);
	questions.setWakeTime(b);
	//window.alert(questions.bedTime + " " + questions.wakeTime);
}


// Question 2 Scripts
function q2script() {
	// Maybe add validations here......

	// Set the object parameters......
	a = document.getElementById('inputProblemsFallingAsleepId').value;
	b = document.getElementById('inputMinutesToFallAsleepId').value;
	questions.setProblemsFallingAsleep(a);
	questions.setMinutesToFallAsleep(b);
}


// Question 3 Scripts
function q3script() {
	// Maybe add validations here......

	// Set the object parameters......
	a = document.getElementById('inputDidWakeDuringTheNightId').value;
	b = document.getElementById('inputMinutesToFallBackToSleepId').value;
	questions.setDidWakeDuringTheNight(a);
	questions.setMinutesToFallBackToSleep(b);
}

// Question 4 Scripts
function q4script(choice) {
	questions.setHowDidYouFeel(choice);

}

function fiveVal() {



}

// Question 5 Scripts
function q5script(choice) { // anything bother the sleeper last night	



var a, b, c, d, e = false; // declares all values to bool

if (choice == "0") { // If user selects "None of the above"
// clear all other check boxes

document.getElementById('noiseId').checked = false;		
document.getElementById('lightId').checked = false;		
document.getElementById('worryId').checked = false;		
document.getElementById('tempId').checked = false;
// re-evaluates the checkboxes
a = document.getElementById('noiseId').checked // true/false		
b = document.getElementById('lightId').checked // true/false		
c = document.getElementById('worryId').checked // true/false		
d = document.getElementById('tempId').checked  // true/false		
e = document.getElementById('noneId').checked  // true/false
} 		

if (choice == "1") { // if is 1, read all blocks, 
a = document.getElementById('noiseId').checked // true/false		
b = document.getElementById('lightId').checked // true/false		
c = document.getElementById('worryId').checked // true/false		
d = document.getElementById('tempId').checked  // true/false
    document.getElementById('noneId').checked = false; // set NONE back to NO CHECK	
e = document.getElementById('noneId').checked  // true/false
}

// creates a bitwise string. 
var f = a ? 1 : 0; // Ternary (conditional ) operator		
var g = b ? 1 : 0; // variableName = (conditiona) ? value1:value2		
var h = c ? 1 : 0; // value1 if true, value2 if false		
var i = d ? 1 : 0;		
var j = e ? 1 : 0;	

questions.setNoise(f);
questions.setLight(g);
questions.setStress(h);
questions.setTemp(i);
questions.setNota(j);

var va = questions.getNoise();
var vb = questions.getLight();
var vc = questions.getStress();
var vd = questions.getTemp();
var ve = questions.getNota();

}




</script>


<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->












