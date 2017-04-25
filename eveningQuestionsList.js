var qs1 = ' \
<div class="container-fluid">\
<form onSubmit="return !!(false & nextQuestion());">\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width:13%">\
1/7 Complete\
</div>\
</div>\
\
\
\
<div class="col-xs-12 text-center">\
<h3 id="part1">Did you drink any caffeinated drinks today?</h3> \
</div>\
\
\
\
<div class="row" >\
<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
<button \
class=" form-control btn btn-large btn-primary" \
type="button" \
data-toggle="collapse" \
data-target="#part2" \
name="q1" \
id="inputDidDrinkCoffeeButton" onclick="changeButton()">Yes?</button>\
</div>\
</div>\
<br />\
<div id="part2" class="collapse">\
		<div class="well row" id="displayWell">\
<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
<h3>Morning</h3>\
</div>\
<div class="row">\
<div class=" col-xs-4 col-md-4 col-lg-4 text-right">\
<div class="btn btn-primary" onclick=\'updateCoffee("eq1a", "minus")\'>&#10134;</div>\
</div>\
<div class="col-xs-4 col-md-4 col-lg-4 ">\
<label class=" form-control text-center" id="eq1a"  onchange="getCaffeineResults()" type="text" name="Morning" min="0" max="10" >0</label>\
</div>\
<div class="col-xs-4 col-md-4 col-lg-4 text-left">\
<div class=" btn btn-success" onclick=\'updateCoffee("eq1a", "plus")\'>&#10133;</div>\
</div>\
</div>\
<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
<h3>Afternoon</h3>\
</div>\
<div class="row">\
<div class="col-xs-4 col-md-4 col-lg-4 text-right">\
<div class=" btn btn-primary" onclick=\'updateCoffee("eq1b", "minus")\'>&#10134; </div>\
</div>\
<div class="col-xs-4 col-md-4 col-lg-4 text-right">\
<label class=" form-control text-center" id="eq1b" type="text" name="Afternoon" min="0" max="10">0</label>\
</div>\
<div class="col-xs-4 col-md-4 col-lg-4 text-left">\
<div class=" btn btn-success" onclick=\'updateCoffee("eq1b", "plus")\'>&#10133; </div>\
</div>\
</div>\
<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
<h3>Evening</h3>\
</div>\
<div class="row">\
<div class="col-xs-4 col-md-4 col-lg-4 text-right">\
<div class=" btn btn-primary" onclick=\'updateCoffee("eq1c", "minus")\'>&#10134; </div>\
</div>\
<div class="col-xs-4 col-md-4 col-lg-4 text-right">\
<label class=" form-control text-center" id="eq1c"  onchange="getCaffeineResults()" type="text" name="Evening" min="0" max="10">0</label>\
</div>\
<div class="col-xs-4 col-md-4 col-lg-4 text-left">\
<div class=" btn btn-success" onclick=\'updateCoffee("eq1c", "plus")\'>&#10133;</div>\
</div>\
</div>\
</div>\
</div>\
<br />\
<div class="row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class=" form-control btn btn-large btn-primary" type="submit" onclick="getCaffeineResults()" >\
<span id="q2NextButton">No. Continue</span>\
</button>\
</div>\
</div>\
</div> <!-- End of Row -->\
</form> <!-- End of form --> \
</div> <!-- End of Container-fluid --> \
';

var qs2 = ' \
<div class="container-fluid">\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="width:26%">\
2/7 Complete\
</div>\
</div>\
		<div class="row">\
			<div class="row text-center">\
				<div class="col-xs-12 col-md-12 col-lg-12">\
				<h3 >Did you exercise today?</h3>\
				</div>\
			</div>\
		</div>\
		<br />\
		\
		<div class="well row" id="displayWell">\
			<div class=" row">\
				<div class="col-xs-12 col-md-12 col-lg-12">\
					<button class="form-control btn btn-large btn-success" type="submit" onclick="question2(1)">\
					<span>Yes!</span>\
					</button>\
				</div>\
			</div>\
			\
			<br />\
			\
			<div class=" row">\
				<div class="col-xs-12 col-md-12 col-lg-12">\
					<button class="form-control btn btn-large btn-primary" type="submit" onclick="question2(0)">\
					<span>Not today!</span>\
					</button>\
				</div>\
			</div>\
			</div>\
		</div>\
		\
</div>\
';

var qs3 = '\
<div class="container-fluid">\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width:39%">\
3/7 Complete\
</div>\
</div>\
	<div class="row text-center">\
		<div class="col-xs-12 col-md-12 col-lg-12">\
			<h3>Did you drink Alcohol?</h3>\
		</div>\
	</div>\
	\
	<br />\
	\
	<div class="well row" id="displayWell">\
	\
				<div class=" row">\
					<div class="col-xs-12 col-md-12 col-lg-12">\
						<button class="form-control btn btn-large btn-success" type="submit" onclick="question3(1)">\
						<span>Yes</span>\
						</button>\
					</div>\
				</div>\
					\
					<br />\
					\
				<div class=" row">\
					<div class="col-xs-12 col-md-12 col-lg-12">\
						<button class="form-control btn btn-large btn-primary" type="submit" onclick="question3(0)">\
						<span>No. Continue</span>\
						</button>\
					</div>\
				</div>\
	</div>\
	\
</div>\
';

var qs4 = ' \
<div class="container-fluid">\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width:52%">\
4/7 Complete\
</div>\
</div>\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>Did you take a nap today?</h3>\
</div>\
</div>\
<br />\
<div class="well row" id="displayWell">\
<div class=" row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-success" type="submit" onclick="question4(1)">\
<span>Yes</span>\
</button>\
</div>\
</div>\
<br />\
<div class=" row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button class="form-control btn btn-large btn-primary" type="submit" onclick="question4(0)">\
<span>No. Continue</span>\
</button>\
</div>\
</div>\
</div>\
</div>\
';

var qs5 = ' \
<div class="container-fluid">\
\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">\
5/7 Complete\
</div>\
</div>\
\
<div class="row text-center">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<h3>How was your mood today?</h3>\
</div>\
</div>\
\
<div class="well row" id="displayWell">\
<div class=" row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button id="eqs5op1" class="form-control btn btn-large btn-success" type="submit" onclick="question5(1)">\
<span>Happy</span>\
</button>\
</div>\
</div>\
<br />\
<div class=" row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button id="eqs5op2" class="form-control btn btn-large btn-Default" type="submit" onclick="question5(2)">\
<span>Neutral</span>\
</button>\
</div>\
</div>\
<br />\
<div class=" row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button id="eqs5op3" class="form-control btn btn-large btn-danger" type="submit" onclick="question5(3)">\
<span>Angry</span>\
</button>\
</div>\
</div>\
<br />\
<div class=" row">\
<div class="col-xs-12 col-md-12 col-lg-12">\
<button id="eqs5op4" class="form-control btn btn-large btn-primary" type="submit" onclick="question5(4)">\
<span>Sad</span>\
</button>\
</div>\
</div>\
</div>\
';

var qs6 = '\
<div class="container-fluid">\
\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width:78%">\
6/7 Complete\
</div>\
</div>\
\
\
\
	<div class="row well" id="displayWell">\
	\
							<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
							<h3>Do you do any of the following in your bed?</h3>\
							</div>\
							<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
							<h4>Select all that apply</h4>\
							</div>\
							\
							<br />\
							\
							\
							<div class=" row" >\
							<div class="col-xs-12 col-md-12 col-lg-12">\
							<button id="eqs6op1" class="form-control btn btn-large btn-Default" onclick="question6(1)">\
							<span>Use my phone</span>\
							</button>\
							</div>\
							</div>\
							\
							<br />\
							\
							<div class=" row" >\
							<div class="col-xs-12 col-md-12 col-lg-12">\
							<button id="eqs6op2" class="form-control btn btn-large btn-Default" onclick="question6(2)">\
							<span>Read or do homework</span>\
							</button>\
							</div>\
							</div>\
							\
							<br />\
							\
							<div class=" row">\
							<div class="col-xs-12 col-md-12 col-lg-12">\
							<button id="eqs6op3" class="form-control btn btn-large btn-Default" onclick="question6(3)">\
							<span>Watch TV</span>\
							</button>\
							</div>\
							</div>\
							\
							<br />\
							\
							<div class=" row">\
							<div class="col-xs-12 col-md-12 col-lg-12">\
							<button id="eqs6op4" class="form-control btn btn-large btn-Default" onclick="question6(4)">\
							<span>Play Video Games</span>\
							</button>\
							</div>\
							</div>\
							\
							<br />\
							\
							<div class=" row">\
							<div class="col-xs-12 col-md-12 col-lg-12">\
							<button id="eqs6op5" class="form-control btn btn-large btn-danger" onclick="question6(5)">\
							<span>None of the above</span>\
							</button>\
							</div>\
							</div>\
							\
							<br />\
							\
							<div class=" row">\
							<div class="col-xs-12 col-md-12 col-lg-12">\
							<button class="form-control btn btn-large btn-primary" type="submit" onclick="submitQuestion6()">\
							<span>Continue</span>\
							</button>\
							</div>\
							</div>\
							\
							<br />\
</div>\
';












var qs7 = ' \
<div class="container-fluid">\
\
<div class="progress">\
<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"\
aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width:91%">\
7/7 Complete (Submit!)\
</div>\
</div>\
\
<div class="row">\
	<div class="col-xs-12 col-md-12 col-lg-12 text-center">\
		<h3>During what time of day, do you have the most energy and motivation?</h3>\
		</div>\
	</div \
	\
	<br />\
	\
			<div class="row well" id="displayWell">\
			\
				<div class="row ">\
				<div class="col-xs-12 col-md-12 col-lg-12">\
				<button class="form-control btn btn-large btn-warning" type="submit" onclick="question7(1)">\
				<span>Morning</span>\
				</button>\
				</div>\
				</div>\
				\
				<br />\
				\
				<div class="row ">\
				<div class="col-xs-12 col-md-12 col-lg-12">\
				<button class="form-control btn btn-large btn-success" type="submit" onclick="question7(2)">\
				<span>Afternoon</span>\
				</button>\
				</div>\
				</div>\
				\
				<br />\
				\
				<div class="row ">\
				<div class="col-xs-12 col-md-12 col-lg-12">\
				<button class="form-control btn btn-large btn-info" type="submit" onclick="question7(3)">\
				<span>Evening</span>\
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
			class=" form-control btn button-default" onclick="evg_ans_submit()" data-toggle="modal" data-target="#evening_tip">\
			<span>Submit your diary!</span>\
			</button>\
\
\
</div>\
';



