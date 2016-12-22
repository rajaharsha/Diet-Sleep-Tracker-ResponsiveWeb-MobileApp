<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");

$obj = $_POST['post_evg_answers'];


            $eq1_Morning = $obj["eq1_Morning"];                  // 1
            $eq1_Afternoon = $obj["eq1_Afternoon"];                // 2    
            $eq1_Evening = $obj["eq1_Evening"];                  // 3      
            $eq2_Exercise = $obj["eq2_Exercise"];                 // 4     
            $eq3_Alcohol = $obj["eq3_Alcohol"];                  // 5       
            $eq4_Nap = $obj["eq4_Nap"];                      // 6
            $eq5_Mood = $obj["eq5_Mood"];                     // 7
            $eq6_Phone = $obj["eq6_Phone"];                    // 8
            $eq6_ReadHomeWork = $obj["eq6_ReadHomeWork"];             // 9
            $eq6_WatchTV = $obj["eq6_WatchTV"];                  //10
            $eq6_PlayVideoGames = $obj["eq6_PlayVideoGames"];           //11
            $eq6_None = $obj["eq6_None"];                     //12
            $eq7_TimeOfDay = $obj["eq7_TimeOfDay"];                 //13           

           //eqs_answers['eq1_Morning'] = user_rec.eq1_Morning;
           //eqs_answers['eq1_Afternoon'] = user_rec.eq1_Afternoon;
           //eqs_answers['eq1_Evening'] = user_rec.eq1_Evening;
           //eqs_answers['eq2_Exercise'] = user_rec.eq2_Exercise;
           //eqs_answers['eq3_Alcohol'] = user_rec.eq3_Alcohol;
           //eqs_answers['eq4_Nap'] = user_rec.eq4_Nap;
           //eqs_answers['eq5_Mood'] = user_rec.eq5_Mood;
           //eqs_answers['eq6_Phone'] = user_rec.eq6_Phone;
           //eqs_answers['eq6_ReadHomeWork'] = user_rec.eq6_ReadHomeWork;
           //eqs_answers['eq6_WatchTV'] = user_rec.eq6_WatchTV;
           //eqs_answers['eq6_PlayVideoGames'] = user_rec.eq6_PlayVideoGames;
           //eqs_answers['eq6_None'] = user_rec.eq6_None;
           //eqs_answers['eq7_TimeOfDay'] = user_rec.eq7_TimeOfDay;

           //error_log("\n Morning" . $obj["eq1_Morning"] , 3, "C:/xampp/apache/logs/error.log");

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
            $eq6_WatchTV,                  //10
            $eq6_PlayVideoGames,           //11
            $eq6_None,                     //12
            $eq7_TimeOfDay                 //13
            );          
    ?>