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
  <header> 
<!-- Navigation and login Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Coach Z</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" id="nav_username" placeholder="Username" class="form-control">
              <!-- <input type="text" placeholder="Email" class="form-control"> -->
            </div>
            <div class="form-group">
              <input type="password" id="nav_password" placeholder="Password" class="form-control">
              <!-- <input type="password" placeholder="Password" class="form-control"> -->
            </div>
            <button type="submit" class="btn btn-success" value="login_button" id="login_button" onclick="user_login()">Sign in</button>
            <p class='help-block'></p>
            <!--<button type="submit" class="btn btn-success">Sign in</button> -->
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>




  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron hidden-xs">
    <div class="container">
      <h1>Coach Z</h1>
      <p>Welcome to your Morning Diary Questionnaire.</p>
    </div>
  </div>

    </header>


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