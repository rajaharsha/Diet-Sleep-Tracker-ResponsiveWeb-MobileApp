



   var ctr = 0; // start at first question
document.getElementById("questionDisplay").innerHTML = questionBank[ctr];


function nextQuestion(){
      if(ctr < 4) {
        window.alert(ctr);
       ctr++;
       document.getElementById("questionDisplay").innerHTML = questionBank[ctr];

    }
  }


