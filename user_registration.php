 <!-- Reference for all files that are being included in the page-->
<?php
include("./includes/header.php");
?>

<div class="container">
    <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">

                                      
                      <form action="#" method="post" name="register_form" id="register_form" class="form_class" >
                      <center><p class='help-block'></p></center>
                      <br/>

                        <center><h3>Register to Coach Z</h3></center>
                        <br>
                        <div class="form-group">

                          <p class='help-block'></p>
                          <input type="text" class="form-control" placeholder="Enter Username" id="name" name="username" value = "" onkeyup="check_duplicate_user(this.id,this.value)" autofocus/>
                          <br/>
                          <input type="text" name="email" id="email" placeholder="Enter User Email" class="form-control" value="" onkeyup="check_duplicate_email(this.id,this.value)" autofocus/> 
                          <br/>
                          <input type="password" name="password" id="password" placeholder="Enter User Password" class="form-control"/> 
                          <br/>
                          <input type="password" name="dup_password" id="dup_password" placeholder="Repeat User Password" class="form-control"/> 
                          <br/>
                          <input type="button" name="submit_id" id="btn_id" value=" Register User " onclick="register_user()"/>

                        </div>
                      </form>

              </div>

              <div class="col-sm-4"></div>

    </div> 
</div>
<script type="text/javascript">

// Check for duplicate Username

function check_duplicate_user(id,value) {
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

// Check for duplicate Email Address

function check_duplicate_email(id,value) {
  var record_exists = verify_email(value);
  var trim_response = record_exists.responseText;
  if (trim_response.trim() == 'notok')
    {
      $( '#email' ).siblings('.help-block').html("User Email already exists")
    } else ($( '#email' ).siblings('.help-block').html(""));
  }

function verify_email(email){
  return $.ajax({
    url: 'post_verify_email.php',
    type: 'post',
    async: false,
    data: {myData:email},

    error: function(xhr,desc,err){
      console.log(xhr);
      console.log("Details: " + desc + "\nError:" + err);
    }
  });
}

// User Registration

function register_user() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var dup_password = document.getElementById("dup_password").value;
  
  if(validation())// Calling validation function
    { 
      var user_rec_insert = insert_new_user(name,email,password);
    }
  }

//  Name and Email validation Function
function validation(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var dup_password = document.getElementById("dup_password").value;
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  
  if( name ==='' || email ==='' || password ==='' || dup_password ==='')
     {
    alert("Please fill all the fields!");
    return false;
     }
  else if(!(email).match(emailReg))
     {
     alert("Enter valid Email!");
     return false;
     }
  else if(password != dup_password)
    {
      alert("Enter similar Passwords");
      return false;
    }
  else
     {
       return true;
     }   
}


function insert_new_user(username,useremail,userpassword){

  var user_records = {};
  user_records['username'] = username;
  user_records['useremail'] = useremail;
  user_records['userpassword'] = userpassword;

  console.log(user_records);

  $.ajax({
        url: 'post_user_registration.php',
        type: 'post',
        data: {post_user_registration:user_records},
        success: function(data) {
                                  alert ('Posted Successfully');
                                  $( '#btn_id' ).siblings('.help-block').html("User Account Created");
                                },
        error: function(xhr, desc, err) {
                                          $( '#btn_id' ).siblings('.help-block').html("Error in Account Creation");
                                          console.log(xhr);
                                          console.log("Details: " + desc + "\nError:" + err);

                                        }
              }); 

}

    </script>

<br>
<br>

<?php
  require_once("./includes/footer.php");
?>