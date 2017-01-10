 <!-- Reference for all files that are being included in the page-->
<?php
include("./includes/header.php");
?>
    <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">

                      <br/><center><h3>Register to Coach Z</h3></center>

                      
                      
                      <form action="#" method="post" name="register_form" id="register_form" class="form_class" >
                      <center><p class='help-block'></p></center>
                      <br/>
                      <!--
                      <input typee="text" name="name" id="name" placeholder="Enter User Name" class="form-control" onkeyup="check_duplicate_user(this.id,this.value)"/>
                      -->

                        <div class="form-group">

                          <p class='help-block'></p>
                          <input type="text" class="form-control" placeholder="Enter Username" id="name" name="username" value = "" onkeyup="check_duplicate_user(this.id,this.value)" autofocus/>
                          <br/>
                          <input type="text" name="email" id="email" placeholder="Enter User Email" class="form-control"/> 
                          <br/>
                          <input type="text" name="password" id="password" placeholder="Enter User Password" class="form-control"/> 
                          <br/>
                          <input type="text" name="dup_password" id="dup_password" placeholder="Repeat User Password" class="form-control"/> 
                          <br/>
                          <input type="button" name="submit_id" id="btn_id" value=" Register User " onclick="regsister_user()"/>

                        </div>
                      </form>

              </div>

              <div class="col-sm-4"></div>

    </div> <!-- /container -->

<script type="text/javascript">


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


function regsister_user() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var dup_password = document.getElementById("dup_password").value;
  
  if(validation())// Calling validation function
    { 
      //document.getElementById("register_form").submit();//form submission
      insert_new_user(name,email,password);
      alert(  " Name : " + name
            + " \n Email : "+ email 
            + " \n password : " + password
            + " \n dup_password : " + dup_password
            + " \n Form Submitted Successfully......");
    } 
} 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
                                  alert ('Posted Successfully')
                                },
        error: function(xhr, desc, err) {
                                          console.log(xhr);
                                          console.log("Details: " + desc + "\nError:" + err);
                                        }
              }); 

}

    </script>