<?php
include("./includes/db_connection.php");
include("./includes/functions.php");
include("./includes/session.php"); 
if(isset($_POST)){
	$useremail = $_POST["useremail"];
	$password = $_POST["password"];
	$result = find_usercred($useremail);
	$result_cred = mysqli_fetch_assoc($result);
	$result_uid = $result_cred["U_ID"];
	$result_username = $result_cred["USER_NAME"];
	$result_passcode = $result_cred["PASS_CODE"];
	$result_useremail = $result_cred["EMAIL"];



	if ($result_useremail){
		if($password == $result_passcode){  
											$btcmp_log_day_val = get_user_log_day($result_uid);
											$btcmp_user_log_count = get_user_log_count($result_uid);
											$btcmp_user_mode = get_user_mode($result_uid);
											
											$_SESSION["uid"] = (int)$result_uid;
											$_SESSION["username"] = $result_username;
											$_SESSION["useremail"] = $result_useremail;
											$_SESSION["btcmp_log_day_val"] = (int)$btcmp_log_day_val;
											$_SESSION["btcmp_user_log_count"] = (int)$btcmp_user_log_count;
 
											header("Location: " . 'menu.php');
										 }
		else {
				$_SESSION["message"] = "Invalid Credentials";
				redirect_to("index.php");
			 }
	}
	else
	{
		$_SESSION["message"] = "User not registered";
		redirect_to("index.php");
	}        
	}      
?>