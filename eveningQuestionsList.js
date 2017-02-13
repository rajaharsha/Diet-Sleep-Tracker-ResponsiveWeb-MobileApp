
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
<form onSubmit="return !!(false & nextQuestion());">\
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
<button class="form-control btn btn-large btn-success" type="submit" onclick="q2script()">\
<span>Yes!</span>\
</button>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="q2script()">\
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
<form onSubmit="return !!(false & nextQuestion());">\
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
<button class="form-control btn btn-large btn-success" type="submit" onclick="q2script()">\
<span>Yes</span>\
</button>\
</div>\
</div>\
\
<br />\
\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="q2script()">\
<span>No</span>\
</button>\
</div>\
</div>\
\
\
</form>\
\
</div>\
';

var qs5 = ' \
<div class="container-fluid">\
\
<form onSubmit="return !!(false & nextQuestion());">\
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






var qs6 = ' \
<div class="container-fluid">\
\
<form onSubmit="return !!(false & nextQuestion());">\
<h3>Do you do any of the followin in your bed?</h3> \
<h2>Check all that apply</h2> \
<p><input class="largerCheckbox" type="Checkbox" name="Use your phone" id="eqs6op1"> Use your phone</p> \
<p><input type="Checkbox" name="Read or do homework" id="eqs6op2"> Read or do homework</p> \
<p><input type="Checkbox" name="Watch TV" id="eqs6op3"> Watch TV</p> \
<p><input type="Checkbox" name="Play video games" id="eqs6op4"> Play video games</p> \
<p><input type="Checkbox" name="None of the above" id="eqs6op5"> None of the above</p> \
\
<div class="row">\
<div class="col-xs-3 col-md-4 col-lg-4"></div>\
<div class="col-xs-5 col-md-5 col-lg-4">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="q1script()" >\
<span>Continue</span>\
</button>\
</div>\
</div>';






var qs7 = ' \
<div class="form-group" id="question5"> \
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




