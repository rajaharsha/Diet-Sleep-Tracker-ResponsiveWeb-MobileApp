<?php
  include("./includes/db_connection.php");
  include("./includes/functions.php");

$obj = $_POST['post_mng_answers'];


          $mq1_bedTime = $obj['mq1_bedTime'];
          $mq1_wakeTime = $obj['mq1_wakeTime'];
          $mq2_problemsFallingAsleep = $obj['mq2_problemsFallingAsleep'];
          $mq2_minutesToFallAsleep = $obj['mq2_minutesToFallAsleep'];
          $mq3_didWakeDuringTheNight = $obj['mq3_didWakeDuringTheNight'];
          $mq3_minutesToFallBackToSleep = $obj['mq3_minutesToFallBackToSleep'];
          $mq4_howDidYouFeel = $obj['mq4_howDidYouFeel'];
          $mq5_noise = $obj['mq5_noise'];
          $mq5_light = $obj['mq5_light'];
          $mq5_stress = $obj['mq5_stress'];
          $mq5_temp = $obj['mq5_temp'];
          $mq5_nota = $obj['mq5_nota'];

          insert_mng_answer(
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
          $mq5_nota);  
      
    ?>