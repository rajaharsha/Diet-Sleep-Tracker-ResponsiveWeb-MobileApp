<!DOCTYPE HTML>
<?php
  include("./includes/cz_functions.js");
  include("./includes/db_connection.php");
  include("./includes/session.php");
  include("./includes/functions.php");
  include('./includes/header.php');
?>
<meta charset=“utf-8”>

      <div class="container"> <!-- Start Container --> 

          <form id="signin" method ="post" action="login_validation.php">
  
              <div class="col-sm-4" style="text-align:center">              
              <img src="assets/unnamed.png" class="center-block" alt="CoachZ" width="200" height="200"> 
              
              </div>

              <div class="col-sm-4" style="text-align:center"> 
                   
              </div>   

              <?php        

              if ($userid){  

               echo '<div class="col-sm-4" style="text-align:center"> 
                         <h3><b>Welcome! '.$username.  ' <b></h3>
                     </div>';
                   }
               else {    

               echo '<div class="col-sm-4" style="text-align:center"> 
                         <h3><b>Login Here!<b></h3>

                         
                         <input type="text" id="nav_useremail" placeholder="User Email" name="useremail" class="form-control">
                         <br>
                         <input type="password" id="nav_password" placeholder="Password" name="password" class="form-control">
                         <br>
                         <button type="submit" class="btn btn-success center-block value="login_button" id="login_button">Sign in</button> 
                         <br>
                         <div id="errormsg"  role="alert">'.message().'</div> 

                     </div>';}

              ?>
          </form>

      </div>



<script>


function user_login(){

  var useremail = document.getElementById("nav_useremail").value;
  var userpassword = document.getElementById("nav_password").value;  
  var user_login_check = check_user_login(useremail,userpassword);
  var db_resp = user_login_check.responseText;
  console.log(db_resp);
  if (db_resp.trim() == 'ACCESS_GRANTED')
                                        {
                                    /*      alert('ACCESS_GRANTED');*/
                                          create_session(useremail);
                                        }
    else ($( '#login_button' ).siblings('.help-block').html("Incorrect Credentials"));
  }



function create_session(useremail){
  return $.ajax({
    url: 'post_create_session.php',
    type: 'post',
    async: false,
    data: {myData:useremail},

    error: function(xhr,desc,err){
      console.log(xhr);
      console.log("Details: " + desc + "\nError:" + err);
    }
  });
}

function check_user_login(useremail,userpassword){

    var user_login = {};
    user_login['useremail'] = useremail;
    user_login['userpassword'] = userpassword;


    return $.ajax({
          url: 'post_user_login.php',
          type: 'post',
          async: false,
          data: {myData:user_login},
          error: function(xhr, desc, err){
                                         alert('User Validation is not Complete');
                                         console.log(xhr);
                                         console.log("Details: " + desc + "\nError:" + err);
                                         }
  });
}
</script>    




    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
       
       <h2 style="text-align: center;">CoachZ</h2>
          <p>Coach Z is a website aimed to help college students improve their sleep. Sleep disturbances are common among young adults, and can impact academic performance, physical health, and mental health. Sleep is a vital aspect of health and Coach Z offers sleep tips to help users work towards and maintain healthy sleep habits. The website has two modes, bootcamp mode and refresher mode.</p>
        </div>
        
        <div class="col-md-4">
          <h2 style="text-align: center;">Refresher</h2>
          <p>Refresher mode allows users to keep a sleep diary at their own pace. In refresher mode users do not receive diary completion reminders, but can complete entries as they determine to be helpful. Users will receive a random sleep tip after every completed diary entry.</p>
          </div>
        
        <div class="col-md-4">
          <h2 style="text-align: center;">Bootcamp</h2>
          <p>Bootcamp mode is a two-week experience where users are provided with daily reminders to complete a morning and evening sleep diary. Upon completion of diary entries, two customized sleep tips are provided to users each day. In addition to sleep tips, students can utilize graphs calculated from their daily diary entries to track their total sleep time and sleep efficiciency scores throughout bootcamp.</p>
        </div>
        
      </div>

      <hr>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>


<?php
  require_once("./includes/footer.php");
?>