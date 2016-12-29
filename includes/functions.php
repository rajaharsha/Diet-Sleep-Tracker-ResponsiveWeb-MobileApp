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
	?>