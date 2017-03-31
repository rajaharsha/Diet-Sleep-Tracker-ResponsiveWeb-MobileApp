<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
?>

<script type="text/javascript" src="assets/js/anychart.dev.min.js"></script>
<link rel="stylesheet" href="https://cdn.anychart.com/css/7.13.0/anychart-ui.min.css" />
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div class="container">

  <br>           

<?php
    
    $result = user_log_tracker($userid);

    $x_axis_values = [];
    $y1_axis_values = [];
    $y2_axis_values = [];

    while($row =mysqli_fetch_assoc($result))
    {
        $i_log_day = $row["log_day"];
        array_push($x_axis_values,$i_log_day);

        $i_sleep_time = floatval($row["Act_Sleep_Time"]); 
        array_push($y1_axis_values,$i_sleep_time);

        $i_sleep_efficiency = floatval($row["Sleep_Efficiency"]); 
        array_push($y2_axis_values,$i_sleep_efficiency);
    }

?>

<div id="container_1"></div>


<script type="text/javascript">
  Highcharts.chart('container_1', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Sleep Tracker'
    },
    subtitle: {
        text: 'Log Day vs Sleep-Time'
    },
    xAxis: {
        categories: <?php echo json_encode($x_axis_values)?>
    },
    yAxis: {
        title: {
            text: 'Hours of Sleep / Sleep Efficiency'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Bootcamp Log Day',
        data: <?php echo json_encode($y1_axis_values)?>
    },
{
        name: 'Sleep Efficiency',
        data: <?php echo json_encode($y2_axis_values)?>
    }

    ]
});

</script>


</div> 

<br><br>
<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->
