<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");

$obj = $_POST['post_evg_answers'];


            $eq1_Morning = $obj["eq1_Morning"];                    // 1
            $eq1_Afternoon = $obj["eq1_Afternoon"];                // 2    
            $eq1_Evening = $obj["eq1_Evening"];                    // 3      
            $eq2_Exercise = $obj["eq2_Exercise"];                  // 4     
            $eq3_Alcohol = $obj["eq3_Alcohol"];                    // 5       
            $eq4_Nap = $obj["eq4_Nap"];                            // 6
            $eq5_Mood = $obj["eq5_Mood"];                          // 7
            $eq6_Phone = $obj["eq6_Phone"];                        // 8
            $eq6_ReadHomeWork = $obj["eq6_ReadHomeWork"];          // 9
            $eq6_WatchTV = $obj["eq6_WatchTV"];                    // 10
            $eq6_PlayVideoGames = $obj["eq6_PlayVideoGames"];      // 11
            $eq6_None = $obj["eq6_None"];                          // 12
            $eq7_TimeOfDay = $obj["eq7_TimeOfDay"];                // 13
            $uid = $obj["uid"];                                    // 14
            $cur_evg_day = $obj["cur_evg_day"];                    // 15

           insert_evg_answer(
            $eq1_Morning,                  // 1
            $eq1_Afternoon,                // 2    
            $eq1_Evening,                  // 3      
            $eq2_Exercise,                 // 4     
            $eq3_Alcohol,                  // 5       
            $eq4_Nap,                      // 6
            $eq5_Mood,                     // 7
            $eq6_Phone,                    // 8
            $eq6_ReadHomeWork,             // 9
            $eq6_WatchTV,                  // 10
            $eq6_PlayVideoGames,           // 11
            $eq6_None,                     // 12
            $eq7_TimeOfDay,                // 13
            $uid,                          // 14
            $cur_evg_day                   // 15 
            );          
    ?>