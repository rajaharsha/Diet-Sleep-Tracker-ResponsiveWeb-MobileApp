<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
?>

<script type="text/javascript" src="assets/js/anychart.dev.min.js"></script>
<link rel="stylesheet" href="https://cdn.anychart.com/css/7.13.0/anychart-ui.min.css" />

<div class="container">

  <h3>Sleep Tracker</h3>
  <h5>Please review your Sleep metrics vizualized from your past dairy entries.</h5>
  <br>           

    <div id="container"></div>
    <script>
anychart.onDocumentReady(function() {
// create data set on our data
var data =[
    ['1' ,  10],
    ['3' ,  8],
    ['4' ,  7],
    ['5' ,  6],
    ['6' ,  9],
    ['7' ,  8],
    ['8' ,  7],
    ['9' ,  7]

];

// create area chart
chart = anychart.area();

// turn on chart animation
chart.animation(true);

// set container id for the chart
chart.container('container');

var series = anychart.data.mapAsTable(data);
for (var i in series) {
    chart.area(series[i]);
}
// remove titles
chart.xAxis({title: 'Bootcamp Log Day'});
chart.yAxis({title: 'Sleep Time'});

// initiate chart drawing
chart.draw();
    });
    
    </script>


</div>
        

<br><br>
<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->