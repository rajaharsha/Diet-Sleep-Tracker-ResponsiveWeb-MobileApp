<?php
include("./includes/db_connection.php");
include("./includes/functions.php");
include("./includes/session.php"); 
if(isset($_POST)){
	$username = $_POST["username"];
	$password = $_POST["password"];
	$result = find_usercred($username);
	$result_cred = mysqli_fetch_assoc($result);
	$result_uid = $result_cred["U_ID"];
	$result_username = $result_cred["USER_NAME"];
	$result_passcode = $result_cred["PASS_CODE"];

	$btcmp_morning_val = get_new_morning_entry_day($result_uid);
	$btcmp_evening_val = get_new_evening_entry_day($result_uid);

	if ($result_username){
		if($password == $result_passcode){  
											$_SESSION["uid"] = (int)$result_uid;
											$_SESSION["username"] = $result_username;
											$_SESSION["btcmp_morning_val"] = $btcmp_morning_val;
											$_SESSION["btcmp_evening_val"] = $btcmp_evening_val;

											header("Location: " . 'home.php');
										 }
		else {
				$_SESSION["message"] = "Invalid Credentials";
				redirect_to("index.php");
			 }
	}
	else
	{
		$_SESSION["message"] = "User not registered";
		redirect_to("user_registration.php");
	}        
	}      
?>