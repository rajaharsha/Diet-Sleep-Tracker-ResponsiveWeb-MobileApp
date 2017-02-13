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


var qs5 = ' \
<form onSubmit="return !!(false & q5script(2) ); ">\
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
<div class="col-xs-12 col-md-12 col-lg-12"><label for="submitButton1"></label><input class="form-control btn btn-primary" id="submitButton1" type="submit" value="Submit" />\
</div>\
\
</div>\
</div>\
</form>\
';















