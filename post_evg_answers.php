<?php

$obj = $_POST['post_evg_answers'];

           $eq1_Morning = $obj["eq1_Morning"];
           $eq1_Afternoon = $obj["eq1_Afternoon"];
           $eq1_Evening = $obj["eq1_Evening"];

           error_log("\n Morning" . $eq1_Morning , 3, "C:/xampp/apache/logs/error.log");
           echo $eq1_Afternoon;

    ?>