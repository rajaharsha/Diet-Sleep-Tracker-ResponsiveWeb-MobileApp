<?php
include("./includes/db_connection.php");
include("./includes/session.php");
include("./includes/functions.php");
confirm_logged_in();
include('./includes/header.php');

?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Coach Z Application (Web) ">
<meta name="author" content="Brian Watkins & Raja Harsha Chinta">




<!-- Present questions HERE -->
<div class="container">
	<div class="row" id="mainRow">
		<div class="col-md-12">
			<div class="col-xs-1 col-md-4 col-lg-4"></div>
			<div class="col-xs-10 col-md-4 col-lg-4" id="question1">
				<div class="form-group">
					<div id="questionDisplay">
					</div>
				</div>
			</div>
			</div>
		</div>


<script src="morningQuestionsScripts.js" type="text/javascript"></script>




	<!-- Tip generation DIV elements -->

	<div class="modal fade" id="morning_tip" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" >Here is your Morning Tip</h4>
				</div>
				<div class="modal-body" id="push_morning_tip">
					<p></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

</div>

	<!-- Tips generation JScript and Logic -->
	<script type="text/javascript" src="assets/Morning_Tips_test.json"></script>
	<script>


		var div = document.getElementById('push_morning_tip');
		div.innerHTML = div.innerHTML + 'Populate Morning Tip Here';

	</script>




























<?php require_once("./includes/footer.php"); ?>







