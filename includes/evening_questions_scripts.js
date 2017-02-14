   var user_rec = {};
   document.getElementById("questionDisplay").innerHTML = questionBank[0];
   var ctr = 0; // start at first question

   
   $(document).ready(function(){

    $("#coach_z_reg").click(function(){
      var reg_form = document.getElementById("newuser");
      user_reg['username'] = form_value[0],value;
      alert(user_reg['username']);
    })

















 

function evg_ans_submit() {
           var eqs_answers = {};
           eqs_answers['eq1_Morning'] = user_rec.eq1_Morning;
           eqs_answers['eq1_Afternoon'] = user_rec.eq1_Afternoon;
           eqs_answers['eq1_Evening'] = user_rec.eq1_Evening;
           eqs_answers['eq2_Exercise'] = user_rec.eq2_Exercise;
           eqs_answers['eq3_Alcohol'] = user_rec.eq3_Alcohol;
           eqs_answers['eq4_Nap'] = user_rec.eq4_Nap;
           eqs_answers['eq5_Mood'] = user_rec.eq5_Mood;
           eqs_answers['eq6_Phone'] = user_rec.eq6_Phone;
           eqs_answers['eq6_ReadHomeWork'] = user_rec.eq6_ReadHomeWork;
           eqs_answers['eq6_WatchTV'] = user_rec.eq6_WatchTV;
           eqs_answers['eq6_PlayVideoGames'] = user_rec.eq6_PlayVideoGames;
           eqs_answers['eq6_None'] = user_rec.eq6_None;
           eqs_answers['eq7_TimeOfDay'] = user_rec.eq7_TimeOfDay;

           console.log(eqs_answers);

           alert(eqs_answers.eq7_TimeOfDay);


        $.ajax({
        url: 'post_evg_answers.php',
        type: 'post',
        data: {post_evg_answers:eqs_answers},
        success: function(data) {
                                  alert ('Posted Successfully')
                                },
        error: function(xhr, desc, err) {
                                          console.log(xhr);
                                          console.log("Details: " + desc + "\nError:" + err);
                                        }
              }); 

      };