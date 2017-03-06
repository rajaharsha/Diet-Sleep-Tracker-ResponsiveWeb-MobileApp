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
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr class="info">
        <th>Day</th>
        <th>Log-Time</th>
        <th>Tip</th>
      </tr>
    </thead>
    <tbody>
      <tr class="active">
        <td>1</td>
        <td>Morning</td>
        <td><a>View Tip</a></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

        

<br><br>
<?php require_once("./includes/footer.php"); ?>
</body> <!-- Close the Body -->