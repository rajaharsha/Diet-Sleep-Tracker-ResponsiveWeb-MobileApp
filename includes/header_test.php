<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");
  include("./includes/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coach Z</title>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <script src="assets/js/ie-emulation-modes-warning.js"></script>

  <script src="js/jquery.min.js"></script> 



<!-- custom styles -->
    <link rel="stylesheet" type="text/css" href="css/styles.css"> 
    <link rel="stylesheet" type="text/css" href="css/styles2.css">
    <link href="css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css"> 
    <link rel="stylesheet" type="text/css" href="css/styles2.css">
  

  </head>

<body>

    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>

    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Brand Name</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class=""><a href="#">Home</a></li>
          <li class=""><a href="#">Locations</a></li>
          <li class=""><a href="#">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
              Sign In<span class="caret"></span>
            </a>
            <div class="dropdown-menu" id="formLogin">
              <div class="row">
                <div class="container-fluid">
                  <form>
                    <div class="form-group">
                      <label>Username</label>
                      <input class="form-control" name="username" id="username" type="text">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control" name="password" id="password" type="password"><br>
                    </div>
                    <button type="submit" id="btnLogin" class="btn btn-success btn-sm">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </li>
          <li><a href="#" data-toggle="modal" data-target='#modalRegister'>Register</a></li>
        </ul>
        
      </div><!--/.navbar-collapse -->
    </div>
  </nav>


<!-- Navigation and login Bar -->

      <div class="container">

          <form id="signin" method ="post" action="login_validation.php">

              <div class="col-sm-4" style="text-align:center"> 
              <img src="assets/unnamed.png" class="center-block" alt="CoachZ" width="200" height="200"> 
              <h1><b>CoachZ<b></h1>
              </div>

              <div class="col-sm-4" style="text-align:center"> 
                   
              </div>           
                                   
              <div class="col-sm-4" style="text-align:center"> 
                   <h3><b>Login Here!<b></h3>
                   
                   <input type="text" id="nav_username" placeholder="Username" name="username" class="form-control">
                   
                   <input type="password" id="nav_password" placeholder="Password" name="password" class="form-control">
                   <br>
                   <button type="submit" class="btn btn-success center-block value="login_button" id="login_button">Sign in</button> 
                   <br>
                   <div id="errormsg"  role="alert"><?php echo message(); ?></div> 
              </div>

          </form>

      </div>

<script>


function user_login(){

  var username = document.getElementById("nav_username").value;
  var userpassword = document.getElementById("nav_password").value;  
  var user_login_check = check_user_login(username,userpassword);
  var db_resp = user_login_check.responseText;
  console.log(db_resp);
  if (db_resp.trim() == 'ACCESS_GRANTED')
                                        {
                                    /*      alert('ACCESS_GRANTED');*/
                                          create_session(username);
                                        }
    else ($( '#login_button' ).siblings('.help-block').html("Incorrect Credentials"));
  }



function create_session(username){
  return $.ajax({
    url: 'post_create_session.php',
    type: 'post',
    async: false,
    data: {myData:username},

    error: function(xhr,desc,err){
      console.log(xhr);
      console.log("Details: " + desc + "\nError:" + err);
    }
  });
}

function check_user_login(username,userpassword){

    var user_login = {};
    user_login['username'] = username;
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



/*function check_duplicate_user(id,value) {
  var record_exists = verify_username(value);
  var trim_response = record_exists.responseText;
  if (trim_response.trim() == 'notok')
    {
      $( '#name' ).siblings('.help-block').html("User already exists")
    } else ($( '#name' ).siblings('.help-block').html(""));

  }


function verify_username(username){
  return $.ajax({
    url: 'post_verify_username.php',
    type: 'post',
    async: false,
    data: {myData:username},

    error: function(xhr,desc,err){
      console.log(xhr);
      console.log("Details: " + desc + "\nError:" + err);
    }
  });
}
*/
</script>    