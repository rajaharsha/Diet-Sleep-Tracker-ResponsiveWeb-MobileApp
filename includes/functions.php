	<?php
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
		
		//$title = verify_input($title);
		//$title = mysqli_real_escape_string($title);
		//$question = verify_input($question);
		//$tag = verify_input($tag);
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
			//error_log("Inside query\n" . $query , 3, "C:/xampp/apache/logs/error.log");
	
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
		error_log("Inside query\n" . $query , 3, "C:/xampp/apache/logs/error.log");
		$result_set = mysqli_query($connection, $query);
		$result_user = mysqli_fetch_assoc($result_set);
		$db_username = $result_user["USER_NAME"];

		if($db_username != NULL){ 
			return $db_username;
		} else {
			return NULL;
		}
	}


	function find_useremail($useremail) {
		global $connection;		
		$query  = "SELECT EMAIL FROM coach_z.app_users where EMAIL = '$useremail' LIMIT 1";
		error_log("Inside query\n" . $query , 3, "C:/xampp/apache/logs/error.log");
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
		error_log("Inside query\n" . $query , 3, "C:/xampp/apache/logs/error.log");
		$result_set = mysqli_query($connection, $query);
		$result_username = mysqli_fetch_assoc($result_set);
		$db_username = $result_username["USER_NAME"];

		if($db_username != NULL){ 
			error_log("Inside query\n" . $db_username , 3, "C:/xampp/apache/logs/error.log");
			return $db_username;
		} else {
			return NULL;
		}
	}


	?>