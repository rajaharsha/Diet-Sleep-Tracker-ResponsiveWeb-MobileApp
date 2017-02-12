









var qs1 = '\
<div class="container-fluid">\
\
<form onSubmit="return !!(false & nextQuestion());">\
\
<div class="row text-center">\
\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Did you drink any caffeinated drinks today?</h3>\
</div>\
</div>\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h4> Records number of caffeinated drinks consumed during each time of day</h4>\
</div>\
</div>\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Morning</h3><input id="eq1a" type="Number" name="Morning">\
</div>\
</div>\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Afternoon</h3><input id="eq1b" type="Number" name="Afternoon">\
</div>\
</div>\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Evening</h3><input id="eq1c" type="Number" name="Evening">\
</div>\
</div>\
<br />\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="q1script()" >\
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
        <form onSubmit="return !!(false & nextQuestion());">\
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
<h3>How is your mood today?</h3> \
<form>\
<div class="radio">\
<label><input type="radio" name="optradio" value="Happy" id="eqs5op1"> Happy</label>\
<label><input type="radio" name="optradio" value="Neutral" id="eqs5op2"> Neutral</label>\
<label><input type="radio" name="optradio" value="Mad" id="eqs5op3"> Mad</label>\
<label><input type="radio" name="optradio" value="Sad" id="eqs5op4"> Sad</label>\
</div>\
</form>\
\
<div class="row">\
<div class="col-xs-3 col-md-4 col-lg-4"></div>\
<div class="col-xs-5 col-md-5 col-lg-4">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="q1script()" >\
<span>Continue</span>\
</button>\
</div>\
</div>';

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
<form>\
<div class="radio">\
<label><input type="radio" name="optradio" value="Early Morning" id="eqs7op1"> Early Morning</label>\
<label><input type="radio" name="optradio" value="Afternoon" id="eqs7op2"> Afternoon</label>\
<label><input type="radio" name="optradio" value="Evening" id="eqs7op3"> Evening</label>\
</div>\
</form>\
\
<div class="row">\
<div class="col-xs-3 col-md-4 col-lg-4"></div>\
<div class="col-xs-5 col-md-5 col-lg-4">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="q1script()" >\
<span>Continue</span>\
</button>\
</div>\
</div>';




