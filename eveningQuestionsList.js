
function toFallAsleep() {
var person = prompt("How many minutes did it take you to fall asleep?", "Minutes to fall asleep....");
if (person != null) {
  document.getElementsByID("minutesTryingToFallAsleep".innerHTML = person);
}
}


    
  var qs1 = '\
  <div class="form-group" id="question1"> \
      <h3> Did you drink any caffeinated drinks today? </h3>\
      <h4> Records number of caffeinated drinks consumed during each time of day. </h4>\
      <h3>Morning:  </h3><input type="Number" name="Morning">\
      <h3>Afternoon: </h3><input type="Number" name="Afternoon">\
      <h3>Evening: </h3><input type="Number" name="Evening">\
      <hr>\
  </div>'; 

  var qs2 = ' \
  <div class="form-group" id="question2"> \
  \
  \
  <h3>Did you exercised today?</h3> \
  \
  \
  <h4 styles="display: inline-block">No - Yes</h4>\
  <label class="switch">\
  <input type="checkbox" id="eq2">\
  <div class="slider round"></div>\
  </label>\
  \
  \
  <h4 type="text" name="minutesTryingToFallAsleep"></h4>\
  </div>';

  var qs3 = ' \
  <div class="form-group" id="question3"> \
  <h3>Did you drink Alcohol?</h3> \
  <h4 styles="display: inline-block">No - Yes</h4>\
  <label class="switch" >\
  <input type="checkbox" id="eq3">\
  <div class="slider round"></div>\
  </label>\
  </div>';

  var qs4 = ' \
  <div class="form-group" id="question4"> \
  <h3>Did you take a nap today?</h3> \
  <h4 styles="display: inline-block">No - Yes</h4>\
  <label class="switch" >\
  <input type="checkbox" id="eq4">\
  <div class="slider round"></div>\
  </label>\
  </div>';

  var qs5 = ' \
  <div class="form-group" id="question5"> \
  <h3>How is your mood today?</h3> \
  <form>\
    <div class="radio">\
      <label><input type="radio" name="optradio" value="Happy" id="eqs5op1"> Happy</label>\
      <label><input type="radio" name="optradio" value="Neutral" id="eqs5op2"> Neutral</label>\
      <label><input type="radio" name="optradio" value="Mad" id="eqs5op3"> Mad</label>\
      <label><input type="radio" name="optradio" value="Sad" id="eqs5op4"> Sad</label>\
    </div>\
  </form>\
  </div>';

  var qs6 = ' \
  <div class="form-group" id="question6"> \
  <h3>Do you do any of the followin in your bed?</h3> \
  <h2>Check all that apply</h2> \
  <p><input class="largerCheckbox" type="Checkbox" name="Use your phone" id="eqs6op1"> Use your phone</p> \
  <p><input type="Checkbox" name="Read or do homework" id="eqs6op2"> Read or do homework</p> \
  <p><input type="Checkbox" name="Watch TV" id="eqs6op3"> Watch TV</p> \
  <p><input type="Checkbox" name="Play video games" id="eqs6op4"> Play video games</p> \
  <p><input type="Checkbox" name="None of the above" id="eqs6op5"> None of the above</p> \
  </div>';

  var qs7 = ' \
  <div class="form-group" id="question5"> \
  <h3>During what time of day do you have the most energy and motivation?</h3> \
  <form>\
    <div class="radio">\
      <label><input type="radio" name="optradio" value="Early Morning" id="eqs7op1"> Early Morning</label>\
      <label><input type="radio" name="optradio" value="Afternoon" id="eqs7op2"> Afternoon</label>\
      <label><input type="radio" name="optradio" value="Evening" id="eqs7op3"> Evening</label>\
    </div>\
  </form>\
  </div>';


  var qs8 = '\
  <div class="questionButtonDiv">\
  <button id="eqs_submit" class="btn btn-default" onclick="evg_ans_submit()">Submit Your Response</button>\
  </div>\
  ';


 var questionBank = [qs1, qs2, qs3, qs4, qs5, qs6, qs7, qs8];
