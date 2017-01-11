window.alert("list");

var qs1 = '\
<div class="row" >\
<div class="col-md-4"></div>\
<div class="col-md-4" id="question1"> \
<div class="form-group" >\
\
<form onsubmit="nextQuestion()";>\
  <h3>Bed Time</h3>  <input  type="text" class="form-control" id="inputBedTimeId"   name="BedTime"  required >  \
  <h3>Wake Time</h3> <input  type="text" class="form-control" id="inputWakeTimeId"  name="WakeTime" required > \
  \ 
  <input class="form-control btn-default" id="submitButton1"  type="submit" value="Next" />\
  </form>\
  \
  </div>\
  </div>\
</div>\
';








var qs2 = ' \
<div class="row" >\
<div class="col-md-4"></div>\
<div class="col-md-4" id="question2"> \
<div class="form-group" >\
<form >\
\
  <h3>Did you have any problems falling asleep last night?</h3> \
  <h4 styles="display: inline-block">No</h4><label class="switch" >\
  <input  type="checkbox">\
  <div class="slider round"></div>\
  \
</label><h4>Yes</h4> \
<h4 type="text" name="minutesTryingToFallAsleep"></h4>\
<h3>How many minutes did it take you to fall asleep? </h3> \
\
<input  class="form-control" id="inputMinutesToFallAsleepId" type="number" name="WakeTime">\
</br></br><input class="btn btn-default" id="submitButton1" type="submit" value="Next" />\
</form>\
  </div>\
  </div>\
</div>\
';



var qs3 = ' \
<div class="form-group" id="question3"> \
  <h3>Last night did you wake up at all during the night?</h3> \
  <h4 styles="display: inline-block">No</h4>\
  <label class="switch" >\
    <input id="inputDidWakeDuringTheNightId" type="checkbox">\
    <div class="slider round"></div>\
  </label>\
  <h4>Yes</h4> \
  \
  \
  <h4 type="text" name="minutesTryingToFallAsleep"></h4>\
  <h3>How many minutes did it take you to fall asleep? </h3> \
  <input id="inputMinutesToFallBackToSleepId" type="Number" name="WakeTime">\
</div>';


var qs4 = ' \
<div class="form-group" id="question4"> \
  <h3>When you woke up this morning, how did you feel?</h3> \
  <h3>Sleepy - Somewhat Sleepy - Alert</h3> \
  \
  <label class="switch" >\
    <input id="sleepyId" type="checkbox">\
    <div class="slider round"></div>\
  </label>\
  \
  <label class="switch" >\
    <input id="somewhatSleepyId" type="checkbox">\
    <div class="slider round"></div>\
  </label>\
  \
  <label class="switch" >\
    <input id="alertId" type="checkbox">\
    <div class="slider round"></div>\
  </label>\
  \
</div>';



var qs5 = ' \
<div class="form-group" id="question5"> \
  <h3>Did anything bother your sleep last night?</h3> \
  <h2>Check all that apply</h2> \
  <p><input  type="Checkbox" id="noiseId"  name="Noise"> Noise</p> \
  <p><input  type="Checkbox" id="lightId"  name="Light"> Light</p> \
  <p><input  type="Checkbox" id="worryId"  name="Stress/Worry"> Stress/Worry</p> \
  <p><input  type="Checkbox" id="tempId"  name="Room Temperature"> Room Temperature</p> \
  <p><input  type="Checkbox" id="noneId"  name="None of the above"> None of the above</p> \
</div>';



var questionBank = [qs1, qs2, qs3, qs4, qs5];






