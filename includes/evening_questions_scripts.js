   var user_rec = {};
   document.getElementById("questionDisplay").innerHTML = questionBank[0];
   var ctr = 0; // start at first question

    $("#eqs_submit").click(function(){alert('Hi')});

   $(document).ready(function(){


    $("#q1").click(function() {  // NEXT Button
      if(ctr < 7) {

         if (ctr == 0){
           var form_value = document.getElementById("questions");
           user_rec['eq1_Morning'] = form_value[0].value;
           user_rec['eq1_Afternoon'] = form_value[1].value;
           user_rec['eq1_Evening'] = form_value[2].value;
         }

         else if (ctr == 1){
          var result = document.getElementById("eq2").checked;
          user_rec['eq2_Exercise'] = result;
         }

         else if (ctr == 2){
          var result = document.getElementById("eq3").checked;
          user_rec['eq3_Alcohol'] = result;
         }

         else if (ctr == 3){
          var result = document.getElementById("eq4").checked;
          user_rec['eq4_Nap'] = result;
         }         

         else if (ctr == 4){

           if (document.getElementById("eqs5op1").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op1").value
              )
           else if(document.getElementById("eqs5op2").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op2").value 
              )
           else if(document.getElementById("eqs5op3").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op3").value 
              )
           else if(document.getElementById("eqs5op4").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op4").value 
              )
           else '';                     
         }

         else if (ctr == 5){

            if (document.getElementById("eqs6op1").checked)
              (
                user_rec['eq6_Phone'] = 'True'
              )
            else (user_rec['eq6_Phone'] = 'False');

            if (document.getElementById("eqs6op2").checked)
              (
                user_rec['eq6_ReadHomeWork'] = 'True'
              )
            else (user_rec['eq6_ReadHomeWork'] = 'False');

            if (document.getElementById("eqs6op3").checked)
              (
                user_rec['eq6_WatchTV'] = 'True'
              )
            else (user_rec['eq6_WatchTV'] = 'False');

            if (document.getElementById("eqs6op4").checked)
              (
                user_rec['eq6_PlayVideoGames'] = 'True'
              )
            else (user_rec['eq6_PlayVideoGames'] = 'False');

            if (document.getElementById("eqs6op5").checked)
              (
                user_rec['eq6_None'] = 'True'
              )
            else (user_rec['eq6_None'] = 'False');
         }

         else if (ctr == 6){

           if (document.getElementById("eqs7op1").checked)
              (
                user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op1").value
              )
           else if(document.getElementById("eqs7op2").checked)
              (
                user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op2").value 
              )
           else if(document.getElementById("eqs5op3").checked)
              (
                user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op3").value 
              )
           else (user_rec['eq7_TimeOfDay'] = '');                   
         }       


         else '';

           ctr++;
           document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
           console.log(user_rec);
           if (ctr >= 7) {ctr = 7;}
         }
      })



    $("#q2").click(function() { // BACK Button
      if( ctr >= 1){

         if (ctr == 0){
           var form_value = document.getElementById("questions");
           user_rec['eq1_Morning'] = form_value[0].value;
           user_rec['eq1_Afternoon'] = form_value[1].value;
           user_rec['eq1_Evening'] = form_value[2].value;
         }

         else if (ctr == 1){
          var result = document.getElementById("eq2").checked;
          user_rec['eq2_Exercise'] = result;
         }

         else if (ctr == 2){
          var result = document.getElementById("eq3").checked;
          user_rec['eq3_Alcohol'] = result;
         }

         else if (ctr == 3){
          var result = document.getElementById("eq4").checked;
          user_rec['eq4_Nap'] = result;
         }

         else if (ctr == 4){

           if (document.getElementById("eqs5op1").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op1").value
              )
           else if(document.getElementById("eqs5op2").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op2").value 
              )
           else if(document.getElementById("eqs5op3").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op3").value 
              )
           else if(document.getElementById("eqs5op4").checked)
              (
                user_rec['eq5_Mood'] = document.getElementById("eqs5op4").value 
              )
           else '';                     
         }

         else if (ctr == 5){

            if (document.getElementById("eqs6op1").checked)
              (
                user_rec['eq6_Phone'] = 'True'
              )
            else (user_rec['eq6_Phone'] = 'False');

            if (document.getElementById("eqs6op2").checked)
              (
                user_rec['eq6_ReadHomeWork'] = 'True'
              )
            else (user_rec['eq6_ReadHomeWork'] = 'False');

            if (document.getElementById("eqs6op3").checked)
              (
                user_rec['eq6_WatchTV'] = 'True'
              )
            else (user_rec['eq6_WatchTV'] = 'False');

            if (document.getElementById("eqs6op4").checked)
              (
                user_rec['eq6_PlayVideoGames'] = 'True'
              )
            else (user_rec['eq6_PlayVideoGames'] = 'False');

            if (document.getElementById("eqs6op5").checked)
              (
                user_rec['eq6_None'] = 'True'
              )
            else (user_rec['eq6_None'] = 'False');
         }

         else if (ctr == 6){

           if (document.getElementById("eqs7op1").checked)
              (
                user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op1").value
              )
           else if(document.getElementById("eqs7op2").checked)
              (
                user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op2").value 
              )
           else if(document.getElementById("eqs5op3").checked)
              (
                user_rec['eq7_TimeOfDay'] = document.getElementById("eqs7op3").value 
              )
           else (user_rec['eq7_TimeOfDay'] = '');                     
         }         

         else '';


           ctr--;
           console.log(user_rec);
           document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
           if (ctr == 0) {ctr = 0;}
         }
      })
  });

