function morningQuestion( // Create the morningQuestion prototype
bedTime, // String
wakeTime, // String
problemsFallingAsleep, // Boolean
minutesToFallAsleep, // String || Int
didWakeDuringTheNight, // Boolean
minutesToFallBackToSleep, // String / Int
howDidYouFeel, // String || Int || BitWise
noise, // Boolean
light, // Boolean 
stress, // Boolean
temp, // Boolean
nota // Boolean
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
if (choice == 1) {this.howDidYouFeel = 'Sleepy';}
if (choice == 2) {this.howDidYouFeel = 'Somewhat Sleepy';}
if (choice == 3) {this.howDidYouFeel = 'Alert';}
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
\
<div class=" container-fluid" id="question1">\
\
<form class="" onSubmit="return !!(false & nextQuestion());">\
\
\
<div class=" row progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">\
1/5 Complete (success)\
</div>\
</div>\
\
<div class=" well row" id="displayWell">\
	<div class="row">\
	<div class=" text-right col-xs-6 col-md-6 col-lg-6"><label for="inputBedTimeId"><h4>Bed Time</h4></label></div>\
	<div class="            col-xs-6 col-md-6 col-lg-6"><input id="stepExample1" type="text" class="time" required></div>\
	</div>\
\
	<div class="row">\
	<div class=" text-right col-xs-6 col-md-6 col-lg-6"><label for="inputWakeTimeId"><h4>Wake Time</h4></label></div>\
	<div class="            col-xs-6 col-md-6 col-lg-6"><input id="stepExample2" type="text" class="time" required>\
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
</div>\
';







var qs2 = ' \
\
<div class=" container-fluid">\
<form onSubmit="return !!(false & nextQuestion());">\
\
		<div class="progress">\
		<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
		aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">\
		2/5 Complete (success)\
		</div>\
		</div>\
								\
								<div class="well row" id="displayWell">\
								\
										<div class="row">\
										<div class="col-xs-12 text-center">\
										<h3 id="part1">Have any problems falling asleep last night?</h3> \
										</div>\
										</div>\
										\
										<div class="row">\
										<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
										<button class=" form-control btn btn-large btn-primary" \
										type="button" \
										data-toggle="collapse" data-target="#part2" \
										onclick="showPart2Q2()" \
										name="q2" \
										id="inputProblemsFallingAsleepId">Yes?</button>\
										</div>\
										</div>\
		\
	<div id="part2" class="collapse  ">\
				<div class="row">\
				<div class="col-xs-12 text-center">\
				<h3>How many minutes did it take you to fall asleep?</h3> \
				</div>\
				</div>\
				<div class="">\
				\
				<div class="col-xs-4 btn btn-primary glyphicon glyphicon-minus-sign" id="question_2_down" onclick=\'changeMinutes(0, "inputMinutesToFallAsleepId")\'></div>\
				\
				<div class="col-xs-4 well-sm text-center" style="color: #e1e6ef; font-size: 22px;  font-family: &#39;Patua One&#39;, cursive;" id="inputMinutesToFallAsleepId" name="WakeTime" contenteditable="false">0</div>\
				\
				<div class="col-xs-4 btn btn-primary glyphicon glyphicon-plus-sign" id="question_2_up" onclick=\'changeMinutes(1, "inputMinutesToFallAsleepId")\'></div>\
				\
				</div>\
				<br />\
				<br />\
	</div>\
		\
		<br />\
		\
		<div class="row">\
		<div class="col-xs-12 col-md-12 col-lg-12">\
		<button class=" form-control btn btn-large btn-primary" type="submit" onclick="q2script()" >\
		<span id="q2NextButton">No, Continue</span>\
		</button>\
		</div>\
		</div>\
		\
		\
		\
		\
		\
		\
</div> <!-- End of well row -->\
</form> <!-- End of form --> \
</div> <!-- End of Container-fluid --> \
';











var qs3 = ' \
\
<div class=" container-fluid">\
<form onSubmit="return !!(false & nextQuestion());">\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">\
3/5 Complete (success)\
</div>\
</div>\
<div class="row well" id="displayWell">\
\
<div class="row">\
<div class="col-xs-12 text-center">\
<h3 id="part1">Did you wake up at all during the night?</h3> \
</div>\
</div>\
\
<div class="row">\
\
\
<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
<button class="atch form-control btn btn-large btn-primary" type="button" data-toggle="collapse" data-target="#part2" onclick="showPart2Q3()" name="q3" id="inputDidWakeDuringTheNightId">Yes?</button>\
</div>\
\
\
</div>\
\
\
\
\
<div id="part2" class="collapse">\
\
<div class="row">\
				<div class="col-xs-12 text-center">\
				<h3>Minutes to fall back asleep?</h3> \
				</div>\
				</div>\
				<div class="">\
				\
				<div class="col-xs-4 btn btn-primary glyphicon glyphicon-minus-sign" id="question_2_down" onclick=\'changeMinutes(0, "inputMinutesToFallBackAsleepId")\'></div>\
				\
				<div class="col-xs-4 well-sm text-center" style="color: #e1e6ef; font-size: 22px;  font-family: &#39;Patua One&#39;, cursive;" id="inputMinutesToFallBackAsleepId" name="WakeTime" contenteditable="false">0</div>\
				\
				<div class="col-xs-4 btn btn-primary glyphicon glyphicon-plus-sign" id="question_2_up" onclick=\'changeMinutes(1, "inputMinutesToFallBackAsleepId")\'></div>\
				\
				</div>\
				<br />\
				<br />\
\
\
<div class="row">\
</div>\
</div>\
\
<br />\
\
<div class="row">\
	<div class="col-xs-12 col-md-12 col-lg-12">\
		<button class="form-control btn btn-large btn-primary" type="submit" onclick="q3script()" >\
			<span id="q3NextButton">No, Continue</span>\
		</button>\
	</div>\
</div>\
</div\
\
\
</div> <!-- End of Row -->\
</form> <!-- End of form --> \
</div> <!-- End of Container-fluid --> \
';




var qs4 = ' \
<?php \
$title = "After waking, how did you feel?";\
$choice1 = "Sleepy";\
$choice2 = "Somewhat Sleepy";\
$choice3 = "Alert";\
$submitTitle = "Continue"; ?> \
\
\
\
<div class="container-fluid">\
\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width:91%">\
4/5 Complete (Success)\
</div>\
</div>\
\
<div class="row">\
	<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
		<h3><?php echo $title ?></h3>\
		</div>\
	</div \
	\
	<br />\
	\
			<div class="row well" id="displayWell">\
			\
				<div class="row ">\
				<div class="col-xs-12 col-md-12 col-lg-12">\
				<button class="form-control btn btn-large btn-warning" type="submit" onclick="q4script(1)">\
				<span><?php echo $choice1; ?></span>\
				</button>\
				</div>\
				</div>\
				\
				<br />\
				\
				<div class="row ">\
				<div class="col-xs-12 col-md-12 col-lg-12">\
				<button class="form-control btn btn-large btn-success" type="submit" onclick="q4script(2)">\
				<span><?php echo $choice2; ?></span>\
				</button>\
				</div>\
				</div>\
				\
				<br />\
				\
				<div class="row ">\
				<div class="col-xs-12 col-md-12 col-lg-12">\
				<button class="form-control btn btn-large btn-info" type="submit" onclick="q4script(3)">\
				<span><?php echo $choice3; ?></span>\
				</button>\
				</div>\
				</div>\
				\
				<br>\
			</div>\
			\
\
			<div class="col-xs-12 col-md-12 col-lg-12" >\
			<div class="questionButtonDiv">\
			<button id="eqs_submit" \
			class=" form-control btn button-default" onclick="evg_ans_submit()" data-toggle="modal" data-target="#morning_tip">\
			<span><?php echo $submitTitle; ?></span>\
			</button>\
\
\
</div>\
';


var qs5 = '\
<div class=" container-fluid">\
\
\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:95%">\
5/5 Complete (Submit!)\
</div>\
</div>\
\
<div class="row well" id="displayWell">\
			<div class="col-lg-12 text-center">\
			<h3>Did anything below, bother your sleep last night?</h3>\
			</div>\
			<div class="col-lg-12 text-center">\
			<h4>Select all that apply</h4>\
			</div>\
			\
			<br />\
			\
			<div class=" row">\
			<div class="col-xs-12 col-md-12 col-lg-12">\
			<button id="mqs5op1" class="form-control btn btn-large btn-Default" onclick="question5(1)">\
			<span>Noise</span>\
			</button>\
			</div>\
			</div>\
			\
			<br />\
			\
			<div class=" row">\
			<div class="col-xs-12 col-md-12 col-lg-12">\
			<button id="mqs5op2" class="form-control btn btn-large btn-Default" onclick="question5(2)">\
			<span>Light</span>\
			</button>\
			</div>\
			</div>\
			\
			<br />\
			\
			<div class=" row">\
			<div class="col-xs-12 col-md-12 col-lg-12">\
			<button id="mqs5op3" class="form-control btn btn-large btn-Default" onclick="question5(3)">\
			<span>Stress/Worry</span>\
			</button>\
			</div>\
			</div>\
			\
			<br />\
			\
			<div class=" row">\
			<div class="col-xs-12 col-md-12 col-lg-12">\
			<button id="mqs5op4" class="form-control btn btn-large btn-Default" onclick="question5(4)">\
			<span>Room Temperature</span>\
			</button>\
			</div>\
			</div>\
			\
			<br />\
			\
			<div class=" row">\
			<div class="col-xs-12 col-md-12 col-lg-12">\
			<button id="mqs5op5" class="form-control btn btn-large btn-Default" onclick="question5(5)">\
			<span>None of the above</span>\
			</button>\
			</div>\
			</div>\
<br />\
\
</div>\
\
	<div class="modal fade" id="morning_tip" role="dialog">\
		<div class="modal-dialog">\
			<div class="modal-content">\
				<div class="modal-header">\
					<button type="button" class="close" data-dismiss="modal">&times;</button>\
					<h4 class="modal-title" >Here is your Morning Tip</h4>\
				</div>\
				<div class="modal-body" id="push_morning_tip">\
					<p></p>\
				</div>\
				<div class="modal-footer">\
					<button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href=diary.php">Close</button>\
				</div>\
			</div>\
		</div>\
	</div>\
	\
<div class="row">\
	<div class="col-xs-12 col-md-12 col-lg-12">\
		<div class="questionButtonDiv">\
			<button class=" form-control btn btn-large btn-success" id="mqs_submit" type="submit" onclick="submitQuestion5()" data-toggle="modal" data-target="#morning_tip">\
			<span>Submit Diary!</span>\
			</button>\
		</div>\
	</div>\
</div>\
\
\
';





