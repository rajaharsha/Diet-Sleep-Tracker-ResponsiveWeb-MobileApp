function morningQuestion( // Create the morningQuestion prototype
    bedTime, // String
	wakeTime, // String
	problemsFallingAsleep, // Boolean
	minutesToFallAsleep, // String || Int
	didWakeDuringTheNight, // Boolean
	minutesToFallBackToSleep, // String / Int
	howDidYouFeel, // String || Int || BitWise
	anythingBotherYourSleep // String to Hex ??? */
	) {

	// Parameters
	this.bedTime = bedTime;
	this.wakeTime = wakeTime;
	this.problemsFallingAsleep = problemsFallingAsleep;
	this.minutesToFallAsleep = minutesToFallAsleep;
	this.didWakeDuringTheNight = didWakeDuringTheNight;
	this.minutesToFallBackToSleep = minutesToFallBackToSleep;
	this.howDidYouFeel = howDidYouFeel;
	this.anythingBotherYourSleep = anythingBotherYourSleep;


	// Methods
	this.setBedTime = function setBedTime(time) {
		this.bedTime = time;
	}

	this.setWakeTime = function setWakeTime(time) {
		this.wakeTime = time;
	}

	this.setProblemsFallingAsleep = function setProblemsFallingAsleep(problems) {

		this.problemsFallingAsleep = problems;
	}

	this.setMinutesToFallAsleep = function setMinutesToFallAsleep(mins) {
		this.minutesToFallAsleep = mins;
	}

	this.setDidWakeDuringTheNight = function setDidWakeDuringTheNight(didwake) {
		this.didWakeDuringTheNight = didwake;
	}

	this.setMinutesToFallBackToSleep = function setMinutesToFallBackToSleep(mins) {
		this.minutesToFallBackToSleep = mins;
	}

	this.setHowDidYouFeel = function setHowDidYouFeel(choice) {
		this.howDidYouFeel = choice;
	}

	this.setAnythingBotherYourSleep = function setAnythingBotherYourSleep(valueString) {
		this.anythingBotherYourSleep = valueString;
	}

	this.viewAll = function viewAll(){
			window.alert(
				" " + this.bedTime + "\n" +
				" " + this.wakeTime + "\n" + 
				" " + this.problemsFallingAsleep + "\n" + 
				" " + this.minutesToFallAsleep + "\n" + 
				" " + this.didWakeDuringTheNight + "\n" + 
				" " + this.minutesToFallBackToSleep + "\n" + 
				" " + this.howDidYouFeel + "\n" + 
				" " + this.anythingBotherYourSleep + "\n"
				);
		}
}









		var qs1 = '\
		<div class="row" >\
		<div class="col-md-4"></div>\
		<div class="col-md-4" id="question1"> \
		<div class="form-group" >\
		<form onSubmit="return !!(false & nextQuestion());">\
		\
		<h3>Bed Time</h3>  <input  type="text" class="form-control" id="inputBedTimeId"   name="BedTime"  required >  \
		<h3>Wake Time</h3> <input  type="text" class="form-control" id="inputWakeTimeId"  name="WakeTime" required > \
		\
		<input class="form-control btn-default" id="submitButton1" onclick="q1script()"  type="submit" value="Next" />\
		\
		</form>\
		</div>\
		</div>\
		</div>\
		';


		var qs2 = ' \
		<div class="row" >\
		<div class="col-md-4"></div>\
		<div class="col-md-4" id="question2"> \
		<div class="form-group" >\
		\
		<form onSubmit="return !!(false & nextQuestion());">\
		\
		<h3>Did you have any problems falling asleep last night?</h3> \
		<h4 styles="display: inline-block">No</h4><label class="switch" >\
		<input type="checkbox">\
		<div class="slider round"></div>\
		</label>\
		<h4>Yes</h4>\
		\
		<h4 type="text" name="minutesTryingToFallAsleep"></h4>\
		\
		<h3>How many minutes did it take you to fall asleep? </h3>\
		<input class="form-control" id="inputMinutesToFallAsleepId" type="number" name="WakeTime">\
		<input class="form-control btn btn-default" id="submitButton1" onclick="q2script()" type="submit" value="Next" />\
		\
		</form>\
		</div>\
		</div>\
		</div>\
		';



		var qs3 = ' \
		<div class="row">\
		<div class="col-md-4"></div>\
		<div class="col-md-4" id="question3">\
		<div class="form-group">\
		<form onSubmit="return !!(false & nextQuestion());">\
		<h3>Last night did you wake up at all during the night?</h3>\
		<h4 styles="display: inline-block">No</h4>\
		<label class="switch">\
		<input id="inputDidWakeDuringTheNightId" type="checkbox">\
		<div class="slider round"></div>\
		</label>\
		<h4>Yes</h4>\
		<h4 type="text" name="minutesTryingToFallAsleep"></h4>\
		<h3>How many minutes did it take you to fall asleep? </h3>\
		<input class="form-control" id="inputMinutesToFallBackToSleepId" type="Number" name="WakeTime">\
		<input class="form-control btn btn-default" id="submitButton1" onclick="q3script()" type="submit" value="Next" />\
		</form>\
		</div>\
		</div>\
		</div>\
		';


		var qs4 = ' \
		<div class="row">\
		<div class="col-md-4"></div>\
		<div class="col-md-4" id="question4">\
		<div class="form-group">\
		<form onSubmit="return !!(false & nextQuestion());">\
		<h3>When you woke up this morning, how did you feel?</h3>\
		<h3>Sleepy - Somewhat Sleepy - Alert</h3>\
		<label class="switch">\
		<input id="sleepyId" type="checkbox">\
		<div class="slider round"></div>\
		</label>\
		<label class="switch">\
		<input id="somewhatSleepyId" type="checkbox">\
		<div class="slider round"></div>\
		</label>\
		<label class="switch">\
		<input id="alertId" type="checkbox">\
		<div class="slider round"></div>\
		</label>\
		<br/><br/><input class="form-control btn btn-default" id="submitButton1" onclick="q4script()" type="submit" value="Next" />\
		</form>\
		</div>\
		</div>\
		</div>';



		var qs5 = ' \
		<div class="row">\
		<div class="col-md-4"></div>\
		<div class="col-md-4" id="question5">\
		<div class="form-group">\
		\
		<form onSubmit="return !!(false);">\
		<h3>Did anything bother your sleep last night?</h3>\
		<h2>Check all that apply</h2>\
		\
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
		<input class="form-control btn btn-default" onclick="q5script()" onclick="q5script()" id="submitButton1" type="submit" value="Next" />\
\
		</form>\
		\
		</div>\
		</div>\
\
		</div>';















