<?php 
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  confirm_logged_in();
  include('./includes/header.php');
?>


<div class="container">

  <h3>Coach Z's Tips</h3>
  <h5>Please review your tips provided as a feedback from your past dairy entries.</h5>

  <br>           

  <div class="modal fade" id="morning_tip" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" >Your Previous Tip</h4>
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


  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr class="info">
        <th>Day</th>
        <th>Log-Time</th>
        <th>Tip-Message</th>
      </tr>
    </thead>
    <tbody>

  <script>
  function push_tips(data) {  
    var div = document.getElementById('push_morning_tip');
    div.innerHTML = data;
  }
  </script>

<?php
$result = get_user_tips($userid);
while($row = mysqli_fetch_assoc($result))
{
echo "<script>
          var tip_message_".$row['log_day']."_".$row['log_type']." = '';
          var tip_message_".$row['log_day']."_".$row['log_type']." = "."'".$row['tip_message']."'".
     "</script>";
echo "
      <tr class='active'>
        <td>".$row['log_day']."</td>
        <td>".$row['log_type']."</td>
        <td>
<button class='hatch form-control btn btn-large btn-success' id='mqs_submit' type='submit' onclick='push_tips(".
"tip_message_".$row['log_day']."_".$row['log_type']
.")' data-toggle='modal' data-target='#morning_tip'>
<span>View Tip</span>
</button>
        </td>
      </tr> 
     ";
}
?>
    </tbody>
  </table>
  </div>
</div>
        

<br><br>
<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->