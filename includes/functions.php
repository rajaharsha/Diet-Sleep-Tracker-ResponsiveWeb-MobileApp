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
$eq7_TimeOfDay,                //13
$uid,                          //14
$cur_evg_day,                  //15
$tip_code,					   //16
$eq1_caffeine,
$btcmp_user_mode
) {
global $connection;

$q1_chk_evglog = "SELECT 1 AS evg_log FROM cz_evg_answers WHERE uid = $uid AND DATE(creation_time) = DATE(NOW()) LIMIT 1";

$q1_result = mysqli_query($connection, $q1_chk_evglog);
$q1_result_fetch = mysqli_fetch_assoc($q1_result);
$evg_log = $q1_result_fetch["evg_log"];

$query = '';
$query_2 = '';

if($evg_log == NULL){ 

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
eq7_TimeOfDay,                -- 13		
uid,           				  -- 14
tip_code,					  -- 15
eq1_caffeine,				  -- 16
log_day       				  -- 17
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
'$eq7_TimeOfDay',             -- 13		
$uid,                         -- 14
'$tip_code',				  -- 15
'$eq1_caffeine',              -- 16
$cur_evg_day				  -- 17
)";

$query_2 = "INSERT cz_usr_bootcamp_log (UID, LOG_DAY, LOG_TYPE, LOG_TIME) VALUES ($uid, $cur_evg_day, 'E', NOW())";

} else {

$query = "UPDATE cz_evg_answers SET 

eq1_Morning = $eq1_Morning,     			   -- 1
eq1_Afternoon = $eq1_Afternoon,                -- 2    
eq1_Evening = $eq1_Evening,                    -- 3      
eq2_Exercise ='$eq2_Exercise',                 -- 4     
eq3_Alcohol ='$eq3_Alcohol',                   -- 5       
eq4_Nap ='$eq4_Nap',                           -- 6
eq5_Mood ='$eq5_Mood',                         -- 7
eq6_Phone ='$eq6_Phone',                       -- 8
eq6_ReadHomeWork ='$eq6_ReadHomeWork',         -- 9
eq6_WatchTV ='$eq6_WatchTV',                   -- 10
eq6_PlayVideoGames = '$eq6_PlayVideoGames',    -- 11
eq6_None = '$eq6_None',                        -- 12
eq7_TimeOfDay ='$eq7_TimeOfDay',               -- 13		
tip_code = '$tip_code',					       -- 15
eq1_caffeine = '$eq1_caffeine',				   -- 16
modification_time = NOW()				       -- 17
WHERE 
uid = $uid AND
log_day = $cur_evg_day
";

$query_2 = "select 1 from DUAL"; // Does Nothing

};

$result_id = mysqli_query($connection, $query);

if ($btcmp_user_mode == 'B') {
$result_id2 = mysqli_query($connection, $query_2);
};


if($result_id && $result_id2) {
$_SESSION["message"] = "Response Posted";
return true;
} 
else {
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
$mq5_nota,
$uid,                          
$cur_mor_day,                  
$tip_code,
$btcmp_user_mode) 
{
global $connection;

$t_b_time = '';
$bed_time = $mq1_bedTime;

$m_e = substr($bed_time, -2, 2);

if ($m_e == 'pm'){
	if (strlen($bed_time) == 6){$bed_time = '0'.$bed_time;}

	$y_date = date('Y-m-d',strtotime("-1 days"));
	$b_time = substr($bed_time, 0, 5);
	$t_b_time = $y_date . ' ' . $b_time . ':00';
	$t_b_time= date("Y-m-d H:i:s", strtotime($t_b_time . " +12 hours"));
	//echo $t_b_time;
}

if ($m_e == 'am'){
	if (strlen($bed_time) == 6){$bed_time = '0'.$bed_time;}
	
	if (substr($bed_time,0,2) == 12){$bed_time = '00'.substr($bed_time,3,7);}
	
	$b_date = date('Y-m-d',strtotime("0 days"));
	$b_time = substr($bed_time, 0, 5);
	$t_b_time = $b_date . ' ' . $b_time . ':00';
	
}


$t_w_time = '';
$wake_time = $mq1_wakeTime;

if (substr($wake_time, -2, 2) == 'am'){
	if (strlen($wake_time) == 6){$wake_time = '0'.$wake_time;}

	$w_date = date('Y-m-d',strtotime("0 days"));
	$w_time = substr($wake_time, 0, 5);
	$t_w_time = $w_date . ' ' . $w_time . ':00';
}

if (substr($wake_time, -2, 2) == 'pm'){
	if (strlen($wake_time) == 6){$wake_time = '0'.$wake_time;}
	$w_date = date('Y-m-d',strtotime("0 days"));
	$w_time = substr($wake_time, 0, 5);
	$t_w_time = $w_date . ' ' . $w_time . ':00';
	$t_w_time= date("Y-m-d H:i:s", strtotime($t_w_time . " +12 hours"));
}

$q1_chk_mnglog = "SELECT 1 AS mng_log FROM cz_mng_answers WHERE uid = $uid AND DATE(creation_time) = DATE(NOW()) LIMIT 1";

$q1_result = mysqli_query($connection, $q1_chk_mnglog);
$q1_result_fetch = mysqli_fetch_assoc($q1_result);
$mng_log = $q1_result_fetch["mng_log"];

$query = '';
$query_2 = '';

if($mng_log == NULL){ 

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
		mq5_nota,
		uid,
		tip_code,
		log_day
		) VALUES 
		(
		'$t_b_time',
		'$t_w_time',
		'$mq2_problemsFallingAsleep',
		'$mq2_minutesToFallAsleep',
		'$mq3_didWakeDuringTheNight',
		'$mq3_minutesToFallBackToSleep',
		'$mq4_howDidYouFeel',
		'$mq5_noise',
		'$mq5_light',
		'$mq5_stress',
		'$mq5_temp',
		'$mq5_nota',
		$uid,
		'$tip_code',
		$cur_mor_day	
		)";	

		$query_2 = "INSERT cz_usr_bootcamp_log (UID, LOG_DAY, LOG_TYPE, LOG_TIME) VALUES ($uid, $cur_mor_day, 'M', NOW())";

} else {

		$query  = "UPDATE cz_mng_answers SET 
		 
		mq1_bedTime = '$t_b_time',
		mq1_wakeTime = '$t_w_time',
		mq2_problemsFallingAsleep = '$mq2_problemsFallingAsleep',
		mq2_minutesToFallAsleep = '$mq2_minutesToFallAsleep',
		mq3_didWakeDuringTheNight = '$mq3_didWakeDuringTheNight',
		mq3_minutesToFallBackToSleep = '$mq3_minutesToFallBackToSleep',
		mq4_howDidYouFeel = '$mq4_howDidYouFeel',
		mq5_noise = '$mq5_noise',
		mq5_light = '$mq5_light',
		mq5_stress = '$mq5_stress',
		mq5_temp = '$mq5_temp',
		mq5_nota = '$mq5_nota',
		tip_code = '$tip_code',
		modification_time = NOW()
		WHERE 
		uid = $uid AND
		log_day = $cur_mor_day
		";

		$query_2 = "select 1 from DUAL"; // Does Nothing
}


$result_id = mysqli_query($connection, $query);
if ($btcmp_user_mode == 'B'){	
$result_id2 = mysqli_query($connection, $query_2);
};
if($result_id && $result_id2) {
$_SESSION["message"] = "Response Posted";
return true;
} 
else {
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


function find_usercred($useremail) {
global $connection;
$query  = "SELECT U_ID,USER_NAME,EMAIL,PASS_CODE FROM coach_z.app_users where EMAIL = trim('$useremail') LIMIT 1";
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
WHEN (DATEDIFF(NOW(),LOG_TIME)) < 15 THEN (DATEDIFF(NOW(),LOG_TIME))
ELSE 14
END
AS CUR_LOG_DAY 
FROM CZ_USR_BOOTCAMP_LOG WHERE UID = $userid AND LOG_DAY = 1 LIMIT 1
";
$query_result = mysqli_query($connection, $query);
$fetch_rows = mysqli_fetch_assoc($query_result);
$cur_log_day = $fetch_rows["CUR_LOG_DAY"];
return $cur_log_day;
}

function get_user_log_count($userid){
	global $connection;
	$query = "SELECT COUNT(*) USR_LOG_COUNT FROM CZ_USR_BOOTCAMP_LOG WHERE UID = $userid";
	$query_result = mysqli_query($connection, $query);
	$fetch_rows = mysqli_fetch_assoc($query_result);
	$usr_log_count = $fetch_rows["USR_LOG_COUNT"];
	return $usr_log_count;
}

function get_user_tips($userid){
	global $connection;
	$query = "
				SELECT DISTINCT log_day, 'Morning' AS log_type, tip_message 
				FROM   coach_z.cz_mng_answers INNER JOIN coach_z.cz_tips
				ON 	   cz_mng_answers.tip_code = cz_tips.tip_code
				WHERE  cz_mng_answers.uid = $userid AND log_day IS NOT NULL
				UNION
				SELECT DISTINCT log_day, 'Evening' AS log_type, tip_message 
				FROM   coach_z.cz_evg_answers INNER JOIN coach_z.cz_tips
				ON 	   cz_evg_answers.tip_code = cz_tips.tip_code 
				WHERE  cz_evg_answers.uid = $userid AND log_day IS NOT NULL
                ORDER BY 1;
			 ";
	$user_tips = mysqli_query($connection, $query);

	return $user_tips;
}

function user_log_tracker($userid){
	global $connection;
    $query = "SELECT 
					log_day,
			        
					round((substr(TIMEDIFF(mq1_wakeTime, mq1_bedTime),1,2) +
					substr(TIMEDIFF(mq1_wakeTime, mq1_bedTime),4,2) / 60 - 
					(mq2_minutesToFallAsleep + mq3_minutesToFallBackToSleep) / 60),2) AS Act_Sleep_Time,
			        
					round((substr(TIMEDIFF(mq1_wakeTime, mq1_bedTime),1,2) +
					substr(TIMEDIFF(mq1_wakeTime, mq1_bedTime),4,2) / 60 - 
					(mq2_minutesToFallAsleep + mq3_minutesToFallBackToSleep) / 60) / 
			        (substr(TIMEDIFF(mq1_wakeTime, mq1_bedTime),1,2) +
					substr(TIMEDIFF(mq1_wakeTime, mq1_bedTime),4,2) / 60),2) AS Sleep_Efficiency
					
            FROM   coach_z.cz_mng_answers Where uid = $userid";

    $result = mysqli_query($connection, $query);

	return $result;
}


function update_user_mode($uid, $user_mode) {
global $connection;
$query  = "UPDATE coach_z.app_users SET USER_MODE = '$user_mode' where u_id = '$uid'";
$result_set = mysqli_query($connection, $query);
}


function get_user_mode($userid){
global $connection;
$query  = "SELECT case when user_mode = 'true' then 'B' else 'R' end as user_mode FROM coach_z.app_users where u_id = $userid";
$result = mysqli_query($connection, $query);
$result_rec = mysqli_fetch_assoc($result);
$db_user_mode = $result_rec["user_mode"];
return $db_user_mode;
}

//		error_log("Inside query\n" . $query , 3, "C:/xampp/apache/logs/error.log");

?>

