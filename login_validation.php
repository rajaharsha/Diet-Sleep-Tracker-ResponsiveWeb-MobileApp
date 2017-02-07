<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");
  include("./includes/session.php");
?>
<div class="container">
    <?php  
    if(isset($_POST)){
      $username = $_POST["username"];
$password = $_POST["password"];
      $result = find_usercred($username);
      $result_cred = mysqli_fetch_assoc($result);
      $result_uid = $result_cred["U_ID"];
      $result_username = $result_cred["USER_NAME"];
      $result_passcode = $result_cred["PASS_CODE"]; 
      
      if ($result_username){
echo "Raja";

        if($password == $result_passcode){

          echo "Brian";

          $_SESSION["uid"] = (int)$result_uid;
          $_SESSION["username"] = $result_username;

          echo "Watkins";
          redirect_to("home.php");
          echo "Watkins_2";
        }
        else{
          $_SESSION["message"] = "Invalid Credentials";
          redirect_to("index.php");
        }
      }
      else
      {
echo "Harsha";

        $_SESSION["message"] = "User not registered";
        redirect_to("user_registration.php");
      }        
      }      
   ?>
    </div>