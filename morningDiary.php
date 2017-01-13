<?php include('./includes/header.php'); ?><!-- Bring in the Jumbotron and Navigation bars --> 
<div id="questionDisplay"></div>  <!-- Present questions HERE -->
<script src="morningQuestionsScripts.js"></script> 
<script>

	var questionBank = [qs1, qs2, qs3, qs4, qs5];
	var questions = new morningQuestion("", "", false, "", false, "", "0", "00001"); 
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
	window.alert("Question 1" );
}


// Question 2 Scripts
function q2script() {
	window.alert("Question 2" );
}


// Question 3 Scripts
function q3script() {
	window.alert("Question 3" );
}

// Question 4 Scripts
function q4script() {
	window.alert("Question 4" );
}

// Question 5 Scripts
function q5script(choice) { // anything bother the sleeper last night	

var a, b, c, d, e = false; // declares all values to bool

if (choice == "0") { // If user selects <none> 
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
var a = a ? 1 : 0; // Ternary (conditional ) operator		
var b = b ? 1 : 0; // variableName = (conditiona) ? value1:value2		
var c = c ? 1 : 0; // value1 if true, value2 if false		
var d = d ? 1 : 0;		
var e = e ? 1 : 0;	

var result = "" + a + b + c + d + e;

// Sets the questions object parameter with final result of questions 5
questions.setAnythingBotherYourSleep(result);

}




</script>


<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->












