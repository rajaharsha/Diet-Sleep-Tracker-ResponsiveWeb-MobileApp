<?php


function redirect_to($new_location) {
header("Location: " . $new_location);
exit;
}


function logged_in() {
return isset($_SESSION['uid']);
}


function confirm_logged_in() {
if (!logged_in()) {
redirect_to("index.php");
}
}


function logged_uid() {
return isset($_SESSION['uid']);
}


function logged_uname() {
return isset($_SESSION['username']);
}


function session_check() {
if (isset($_SESSION["uid"]) && isset($_SESSION["username"])) 
{return $_SESSION["uid"];}; 
}


function insert_evg_answer(						
$eq1_Morning,                  // 1
$eq1_Afternoon,                // 2    
$eq1_Evening,                  // 3      
$eq2_Exercise,                 // 4     
$eq3_Alcohol,                  // 5       
$eq4_Nap,                      // 6
$eq5_Mood,                     // 7
$eq6_Phone,                    // 8
$eq6_ReadHomeWork,             // 9
$eq6_WatchTV,                  //10
$eq6_PlayVideoGames,           //11
$eq6_None,                     //12
$eq7_TimeOfDay                 //13								
) {
global $connection;
$query  = "INSERT INTO 
cz_evg_answers 
(
eq1_Morning,                  -- 1
eq1_Afternoon,                -- 2    
eq1_Evening,                  -- 3      
eq2_Exercise,                 -- 4     
eq3_Alcohol,                  -- 5       
eq4_Nap,                      -- 6
eq5_Mood,                     -- 7
eq6_Phone,                    -- 8
eq6_ReadHomeWork,             -- 9
eq6_WatchTV,                  -- 10
eq6_PlayVideoGames,           -- 11
eq6_None,                     -- 12
eq7_TimeOfDay                 -- 13		
) VALUES 
(
$eq1_Morning,                 -- 1
$eq1_Afternoon,               -- 2    
$eq1_Evening,                 -- 3      
'$eq2_Exercise',              -- 4     
'$eq3_Alcohol',               -- 5       
'$eq4_Nap',                   -- 6
'$eq5_Mood',                  -- 7
'$eq6_Phone',                 -- 8
'$eq6_ReadHomeWork',          -- 9
'$eq6_WatchTV',               -- 10
'$eq6_PlayVideoGames',        -- 11
'$eq6_None',                  -- 12
'$eq7_TimeOfDay'              -- 13		
)";
$result_id = mysqli_query($connection, $query);
//error_log("Inside query\n" . $query , 3, "C:/xampp/apache/logs/error.log");
//confirm_query($result_id);
if($result_id) {
$_SESSION["message"] = "Response Posted";
return true;
} else {
$_SESSION["message"] = "Database Error";
return false;
}
}


function insert_mng_answer(						
$mq1_bedTime,
$mq1_wakeTime,
$mq2_problemsFallingAsleep,
$mq2_minutesToFallAsleep,
$mq3_didWakeDuringTheNight,
$mq3_minutesToFallBackToSleep,
$mq4_howDidYouFeel,
$mq5_noise,
$mq5_light,
$mq5_stress,
$mq5_temp,
$mq5_nota) 
{
global $connection;
$query  = "INSERT INTO 
cz_mng_answers 
(mq1_bedTime,
mq1_wakeTime,
mq2_problemsFallingAsleep,
mq2_minutesToFallAsleep,
mq3_didWakeDuringTheNight,
mq3_minutesToFallBackToSleep,
mq4_howDidYouFeel,
mq5_noise,
mq5_light,
mq5_stress,
mq5_temp,
mq5_nota	
) VALUES 
(
'$mq1_bedTime',
'$mq1_wakeTime',
'$mq2_problemsFallingAsleep',
'$mq2_minutesToFallAsleep',
'$mq3_didWakeDuringTheNight',
'$mq3_minutesToFallBackToSleep',
'$mq4_howDidYouFeel',
'$mq5_noise',
'$mq5_light',
'$mq5_stress',
'$mq5_temp',
'$mq5_nota'	
)";
$result_id = mysqli_query($connection, $query);
//error_log("Inside query\n" . $query , 3, "/Users/bfwatkin/Desktop/error.log");
// confirm_query($result_id);
if($result_id) {
$_SESSION["message"] = "Response Posted";
return true;
} else {
$_SESSION["message"] = "Database Error";
return false;
}
}


function insert_usr_rec(
$user_name,
$user_email,
$user_pass
){ 
global $connection;
$query = "INSERT INTO 
coach_z.app_users
(
USER_NAME,
EMAIL,
PASS_CODE
) VALUES 
(
'$user_name',
'$user_email',
'$user_pass')";
$result_id = mysqli_query($connection, $query);
if($result_id) {
$_SESSION["message"] = "User registration is completed.";
return true;
} else {
$_SESSION["message"] = "Database Error";
return false;
}			
}


function find_username($username) {
global $connection;		
$query  = "SELECT USER_NAME FROM coach_z.app_users where USER_NAME = '$username' LIMIT 1";
$result_set = mysqli_query($connection, $query);
$result_user = mysqli_fetch_assoc($result_set);
$db_username = $result_user["USER_NAME"];
if($db_username != NULL){ 
return $db_username;
} else {
return NULL;
}
}


function find_uid($username) {
global $connection;		
$query  = "SELECT U_ID FROM coach_z.app_users where USER_NAME = '$username' LIMIT 1";
$result_set = mysqli_query($connection, $query);
$result_user = mysqli_fetch_assoc($result_set);
$db_uid = $result_user["U_ID"];
if($db_uid != NULL){ 
return $db_uid;
} else {
return NULL;
}
}	


function find_usercred($username) {
global $connection;
$query  = "SELECT U_ID,USER_NAME,PASS_CODE FROM coach_z.app_users where USER_NAME = '$username' LIMIT 1";
$result_set = mysqli_query($connection, $query);
if(!$result_set){die("Database query failed.".$query);}
return ($result_set);
}


function find_useremail($useremail) {
global $connection;		
$query  = "SELECT EMAIL FROM coach_z.app_users where EMAIL = '$useremail' LIMIT 1";
$result_set = mysqli_query($connection, $query);
$result_email = mysqli_fetch_assoc($result_set);
$db_useremail = $result_email["EMAIL"];
if($db_useremail != NULL){ 
return $db_useremail;
} else {
return NULL;
}
}


function find_user_login($username,$userpassword) {
global $connection;		
$query  = "SELECT USER_NAME FROM coach_z.app_users where USER_NAME = '$username' AND PASS_CODE = '$userpassword' LIMIT 1";
$result_set = mysqli_query($connection, $query);
$result_username = mysqli_fetch_assoc($result_set);
$db_username = $result_username["USER_NAME"];
if($db_username != NULL){ 
return $db_username;
} else {
return NULL;
}
}


function get_user_log_day($userid){
global $connection;
$query = "
SELECT 
CASE 
WHEN DATEDIFF(NOW(),LOG_TIME) < 15 THEN DATEDIFF(NOW(),LOG_TIME)
ELSE 14
END
AS CUR_LOG_DAY 
FROM CZ_USR_BOOTCAMP_LOG WHERE UID = 9 AND LOG_DAY = 1 AND LOG_TYPE = 'M'
";
$query_result = mysqli_query($connection, $query);
$fetch_rows = mysqli_fetch_assoc($query_result);
$cur_log_day = $fetch_rows["CUR_LOG_DAY"];
return $cur_log_day;
}

function get_user_log_count($userid){
	global $connection;
	$query = "SELECT COUNT(*) USR_LOG_COUNT FROM CZ_USR_BOOTCAMP_LOG WHERE UID = $userid";

	//error_log("Inside query\n" . $query , 3, "C:/xampp/apache/logs/error.log");
	$query_result = mysqli_query($connection, $query);
	$fetch_rows = mysqli_fetch_assoc($query_result);
	$usr_log_count = $fetch_rows["USR_LOG_COUNT"];
	return $usr_log_count;
}



?>
