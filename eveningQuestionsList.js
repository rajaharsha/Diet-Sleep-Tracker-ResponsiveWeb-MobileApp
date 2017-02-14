
var qs1 = '\
<div class="container-fluid">\
\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Did you drink any caffeinated drinks today?</h3>\
</div>\
</div>\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-success" onclick="showCaffeineMenu()">\
<span>Yes!</span>\
</button>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="noCaffeine()">\
<span>Not today!</span>\
</button>\
</div>\
</div>';


var qs1partb = '<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h4>Record your coffee intake below!</h4>\
</div>\
</div>\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
<h3>Morning</h3>\
<input \
id="eq1a" \
onchange="getCaffeineResults()" \
type="Number" \
name="Morning"\
min="0"\
max="10">\
</div>\
</div>\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Afternoon</h3>\
<input \
id="eq1b" \
onchange="getCaffeineResults()" \
type="Number" \
name="Afternoon"\
min="0"\
max="10">\
</div>\
</div>\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Evening</h3>\
<input \
id="eq1c" \
onchange="getCaffeineResults()" \
type="Number" \
name="Evening"\
min="0"\
max="10">\
</div>\
</div>\
<br />\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="nextQuestion()" >\
<span>Continue</span>\
</button>\
</div>\
</div>'; 















var qs2 = ' \
<div class="container-fluid">\
\
\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Did you exercise today?</h3>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-success" type="submit" onclick="question2(1)">\
<span>Yes!</span>\
</button>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="question2(0)">\
<span>Not today!</span>\
</button>\
</div>\
</div>\
\
\
</form>\
\
</div>\
';











var qs3 = '\
<div class="container-fluid">\
\
\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Did you drink Alcohol?</h3>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-success" type="submit" onclick="question3(1)">\
<span>Yes</span>\
</button>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="question3(0)">\
<span>No</span>\
</button>\
</div>\
</div>\
\
\
\
\
</div>\
';












var qs4 = ' \
<div class="container-fluid">\
\
\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Did you take a nap today?</h3>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-success" type="submit" onclick="question4(1)">\
<span>Yes</span>\
</button>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="question4(0)">\
<span>No</span>\
</button>\
</div>\
</div>\
\
\
\
\
</div>\
';











var qs5 = ' \
<div class="container-fluid">\
\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>How is your mood today?</h3>\
</div>\
</div>\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button id="eqs5op1" class="form-control btn btn-large btn-success" type="submit" onclick="question5(0)">\
<span>Happy</span>\
</button>\
</div>\
</div>\
<br />\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button id="eqs5op2" class="form-control btn btn-large btn-Default" type="submit" onclick="question5(1)">\
<span>Neutral</span>\
</button>\
</div>\
</div>\
<br />\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button id="eqs5op3" class="form-control btn btn-large btn-danger" type="submit" onclick="question5(2)">\
<span>Angry</span>\
</button>\
</div>\
</div>\
<br />\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button id="eqs5op4" class="form-control btn btn-large btn-primary" type="submit" onclick="question5(3)">\
<span>Sad</span>\
</button>\
</div>\
</div>\
\
</form>\
';






var qs6 = '\
<div class="container-fluid">\
\
  <div class="col-lg-12 text-center">\
    <h3>Do you do any of the following in your bed?</h3>\
  </div>\
  <div class="col-lg-12 text-center">\
    <h4>Select all that apply</h4>\
  </div>\
\
  <br />\
  <div class="row">\
    <div class="col-xs-12 col-md-12 col-lg-12">\
      <button id="eqs7op1" class="form-control btn btn-large btn-Default" onclick="question6(1)">\
        <span>Use my phone</span>\
      </button>\
    </div>\
  </div>\
  <br />\
  <div class="row">\
    <div class="col-xs-12 col-md-12 col-lg-12">\
      <button id="eqs7op2" class="form-control btn btn-large btn-Default" onclick="question6(2)">\
        <span>Read or do homework</span>\
      </button>\
    </div>\
  </div>\
  <br />\
  <div class="row">\
    <div class="col-xs-12 col-md-12 col-lg-12">\
      <button id="eqs7op3" class="form-control btn btn-large btn-Default" onclick="question6(3)">\
        <span>Watch TV</span>\
      </button>\
    </div>\
  </div>\
  <br />\
  <div class="row">\
    <div class="col-xs-12 col-md-12 col-lg-12">\
      <button id="eqs7op4" class="form-control btn btn-large btn-Default" onclick="question6(4)">\
        <span>Play Video Games</span>\
      </button>\
    </div>\
  </div>\
  <br />\
  <div class="row">\
    <div class="col-xs-12 col-md-12 col-lg-12">\
      <button id="eqs7op5" class="form-control btn btn-large btn-danger" onclick="question6(5)">\
        <span>None of the above</span>\
      </button>\
    </div>\
  </div>\
  <br />\
\
\
\
  <div class="row">\
    <div class="col-xs-12 col-md-12 col-lg-6">\
      <button class="form-control btn btn-large btn-primary" type="submit" onclick="submitQuestion6()">\
        <span>Continue</span>\
      </button>\
    </div>\
  </div>\
\
';










var qs7 = ' \
<div class="container-fluid" > \
\
<h3>During what time of day do you have the most energy and motivation?</h3> \
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-warning" type="submit" onclick="q2script()">\
<span>Morning</span>\
</button>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-success" type="submit" onclick="q2script()">\
<span>Afternoon</span>\
</button>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-info" type="submit" onclick="q2script()">\
<span>Evening</span>\
</button>\
</div>\
</div>\
\
';




