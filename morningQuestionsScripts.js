function morningQuestion( // Create the morningQuestion prototype
    bedTime, // String
	wakeTime, // String
	problemsFallingAsleep, // Boolean
	minutesToFallAsleep, // String || Int
	didWakeDuringTheNight, // Boolean
	minutesToFallBackToSleep, // String / Int
	howDidYouFeel, // String || Int || BitWise
	noise, 
	light, 
	stress, 
	temp, 
	nota
	) {

	// Parameters - Constructor - defaults to Private (verify)
	this.bedTime = bedTime;
	this.wakeTime = wakeTime;
	this.problemsFallingAsleep = problemsFallingAsleep;
	this.minutesToFallAsleep = minutesToFallAsleep;
	this.didWakeDuringTheNight = didWakeDuringTheNight;
	this.minutesToFallBackToSleep = minutesToFallBackToSleep;
	this.howDidYouFeel = howDidYouFeel;
	this.noise = noise;
	this.light = light;
	this.stress = stress;
	this.temp = temp;
	this.nota = nota;

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


	this.setNoise = function setNoise(valueString) {
		this.noise = valueString;
	}
	this.setLight = function setLight(valueString) {
		this.light = valueString;
	}
	this.setStress = function setStress(valueString) {
		this.stress = valueString;
	}
	this.setTemp = function setTemp(valueString) {
		this.temp = valueString;
	}
	this.setNota = function setNota(valueString) {
		this.nota = valueString;
	}


	this.getNoise = function getNoise() {
		return this.noise;
	}
	this.getLight = function getLight() {
		return this.light;
	}
	this.getStress = function getStress() {
		return this.stress;
	}
	this.getTemp = function getTemp() {
		return this.temp;
	}
	this.getNota = function getNota() {
		return this.nota;
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
		<h3 id="part1" >Did you have any problems falling asleep last night?</h3> \
		\
		<div class="row" id="part1">\
			<div class="col-xs-3"></div>\
			<div class="col-xs-3"><h4>Yes</h4></div>\
			<div class="col-xs-3"><h4>No</h4></div>\
			<div class="col-xs-3"></div>\
		</div>\
\
\
		<div class="row">\
			<div class="col-xs-3"></div>\
			<div class="col-xs-3">\
			<input type="radio" name="q2" onclick="checkQuestion2()" id="inputProblemsFallingAsleepId">\
			</div>\
	\
			<div class="col-xs-3">\
			<input type="radio" name="q2" onclick="checkQuestion2()" id="inputProblemsFallingAsleepId">\
			</div>\
			<div class="col-xs-3"></div>\
		</div>\
		\
		\
		<div id="part2" style="visibility: hidden;">\
		<h4 name="minutesTryingToFallAsleep"></h4>\
		<h3>How many minutes did it take you to fall asleep? </h3>\
		<div class="col-xs-4"></div>\
		\
		<div class="col-xs-4">\
		<input class="form-control" id="inputMinutesToFallAsleepId" type="number" name="WakeTime">\
		</div>\
		<div class="col-xs-4"></div>\
		</div>\
		\
		\
		\
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
		\
		<div class="col-lg-4" id="question4">\
		<div class="form-group">\
        \
        <div class="row">\
		<div class="col-md-4"></div>\
	    <div class="col-md-4">\
		<h3>When you woke up this morning, how did you feel?</h3>\
		</div>\
		<div class="col-md-4"></div>\
		</div>\
		\
		\
		\
		<form onSubmit="return !!(false & nextQuestion());">\
		\
		\
		<div class="col-md-3">\
		<div class="col=md-5">\
		<label>Sleepy</label>\
		</div>\
		<div class="col-md-5">\
		<input class="form-control" onclick="q4script(1)" type="radio" id="InputSleepyId" name="feel" required>\
		</div>\
		</div>\
		\
		<div class="col-md-3" >\
		<div class="col-md-5" >\
		<label>Somewhat Sleepy</label>\
		</div>\
		<div class="col-md-5">\
		<input class="form-control  onclick="q4script(2)" type="radio" id="InputSomewhatSleepyId" name="feel" required>\
		</div>\
		</div>\
		\
		<div class="col-lg-4" >\
		<label>Alert</label><input class="form-control"  onclick="q4script(3)" type="radio" id="inputAlertId" name="feel" required>\
		</div>\
		\
		<br/>\
		<input class="form-control btn btn-default" id="submitButton1" type="submit" value="Next" />\
		</form>\
		<div class="col-md-4"></div>\
		</div>\
		</div>\
		\
		</div>';



		var qs5 = ' \
		<div class="row">\
		<div class="col-md-4"></div>\
		<div class="col-md-4" id="question5">\
		<div class="form-group">\
		\
		<form onSubmit="return !!(false & q5script(2) ); ">\
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
		<input class="form-control btn btn-default" id="submitButton1" type="submit" value="Submit" />\
\
		</form>\
		\
		</div>\
		</div>\
\
		</div>';
















