<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
?>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">


<div class="centered" style="text-align: center;">
    <div><h3><b>Bootcamp Mode</b></h3></div>
    <div><input id="toggle-event" type="checkbox" data-toggle="toggle"></div>
    </div>
<br>

<?php $btcmp_user_mode = get_user_mode($userid); ?>

<script>

var userid = '<?php echo $userid; ?>';
var db_user_mode = '<?php echo $btcmp_user_mode ?>';

if (db_user_mode == 'B'){$('#toggle-event').bootstrapToggle('on')};
if (db_user_mode == 'R'){$('#toggle-event').bootstrapToggle('off');};

            function update_user_mode(result){

                user_mode = {}; 
                user_mode['uid'] = userid;
                user_mode['user_mode'] = result;            
                
               $.ajax({
                url: 'post_user_mode.php',
                type: 'post',
                data: {post_user_mode:user_mode},
                success: function(data) {},
                error:   function(xhr, desc, err) {
                             console.log(xhr);
                             console.log("Details: " + desc + "\nError:" + err);
                         }
              }); 
           };

            $(function() {
              $('#toggle-event').change(function() {
                var result = $(this).prop('checked');
                update_user_mode(result);
              })
            })

</script>

            <button type="button" class="btn btn-primary btn-lg btn-block btn-info" onclick="location.href='morningdiary.php';"> 
            <?php
            if ($btcmp_user_mode == 'B'){
            echo "<div><h4>" . (14-$btcmp_log_day_val) . " Days More</h4></div>";
            };
            ?>
            <div>    
            <img src="img/sunrise.png" class="center-block" alt="CoachZ" width="100" height="100">
            </div>
            <div>
            <h3><b>Log Your Morning Diary</b></h3>
            </div>
            </button>
            <br>

            <button type="button" class="btn btn-primary btn-lg btn-block btn-warning" onclick="location.href='eveningdiary.php';">
            <?php 
            if ($btcmp_user_mode == 'B'){
            echo "<div><h4>" . (14-$btcmp_log_day_val) . " Days More</h4></div>";
            };
            ?>
            <div>
            <img src="img/sunset.png" class="center-block" alt="CoachZ" width="100" height="100">
            </div>
            <div>
            <h3><b>Log Your Evening Diary</b></h3>
            </div>
            </button>

        </div>  
        <div class="col-md-4"></div>
      </div>
</div>            

<br><br>
<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->