


var qs1 = '\
<div class="form-group" id="question1"> \
  <h3>Bed Time:  </h3><input  type="text" class="time" id="inputBedTimeId" onkeydown="validateForm()" onchange="setQuestion1()" name="BedTime"> \
  <h3>Wake Time: </h3><input  type="text" class="time" id="inputWakeTimeId" onchange="setQuestion1()" name="WakeTime"> \
</div>\
';


var qs2 = ' \
<div class="form-group" id="question2"> \
  <h3>Did you have any problems falling asleep last night?</h3> \
  <h4 styles="display: inline-block">No</h4><label class="switch" >\
  <input id="inputProblemsFallingAsleepId" onchange="setQuestion2()" type="checkbox">\
  <div class="slider round"></div>\
  \
</label><h4>Yes</h4> \
<h4 type="text" name="minutesTryingToFallAsleep"></h4>\
<h3>How many minutes did it take you to fall asleep? </h3> \
\
<input id="inputMinutesToFallAsleepId" onchange="setQuestion2()" type="text/charset" name="WakeTime">\
</div>';



var qs3 = ' \
<div class="form-group" id="question3"> \
  <h3>Last night did you wake up at all during the night?</h3> \
  <h4 styles="display: inline-block">No</h4>\
  <label class="switch" >\
    <input id="inputDidWakeDuringTheNightId" onchange="setQuestion3()" type="checkbox">\
    <div class="slider round"></div>\
  </label>\
  <h4>Yes</h4> \
  \
  \
  <h4 type="text" name="minutesTryingToFallAsleep"></h4>\
  <h3>How many minutes did it take you to fall asleep? </h3> \
  <input id="inputMinutesToFallBackToSleepId" onchange="setQuestion3()" type="Number" name="WakeTime">\
</div>';


var qs4 = ' \
<div class="form-group" id="question4"> \
  <h3>When you woke up this morning, how did you feel?</h3> \
  <h3>Sleepy - Somewhat Sleepy - Alert</h3> \
  \
  <label class="switch" >\
    <input id="sleepyId" onchange="setQuestion4(1)" type="checkbox">\
    <div class="slider round"></div>\
  </label>\
  \
  <label class="switch" >\
    <input id="somewhatSleepyId" onchange="setQuestion4(2)" type="checkbox">\
    <div class="slider round"></div>\
  </label>\
  \
  <label class="switch" >\
    <input id="alertId" onchange="setQuestion4(3)" type="checkbox">\
    <div class="slider round"></div>\
  </label>\
  \
</div>';



var qs5 = ' \
<div class="form-group" id="question5"> \
  <h3>Did anything bother your sleep last night?</h3> \
  <h2>Check all that apply</h2> \
  <p><input type="Checkbox" id="noiseId" onclick="setQuestion5(0)" name="Noise"> Noise</p> \
  <p><input type="Checkbox" id="lightId" onclick="setQuestion5(0)" name="Light"> Light</p> \
  <p><input type="Checkbox" id="worryId" onclick="setQuestion5(0)" name="Stress/Worry"> Stress/Worry</p> \
  <p><input type="Checkbox" id="tempId" onclick="setQuestion5(0)" name="Room Temperature"> Room Temperature</p> \
  <p><input type="Checkbox" id="noneId" onclick="setQuestion5(1)" name="None of the above"> None of the above</p> \
</div>';


var questionBank = [qs1, qs2, qs3, qs4, qs5];

