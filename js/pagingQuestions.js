document.getElementById("questionDisplay").innerHTML = questionBank[0];
   var ctr = 0; // start at first question
   document.getElementById("backButton").style.display = "none";
   document.getElementById("submitButton").style.display = "none";

   $(document).ready(function(){

    $("#nextButton").click(function() {  // NEXT Button
      if(ctr < 4) {
       ctr++;
       document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
       updateValues(); // updates the form with the appropriate data
       if (ctr >= 4) {
        ctr = 4;
        document.getElementById("submitButton").style.display = "inline";
      }
       // ************************************************************************
       if (ctr == 4) { 
        document.getElementById("nextButton").style.display = "none"; 
      } else { 
        document.getElementById("nextButton").style.display = "inline";
        document.getElementById("backButton").style.display = "inline";
        document.getElementById("submitButton").style.display = "none";
      }
      // ************************************************************************** 
    }
  })

    $("#backButton").click(function() { // BACK Button
      if( ctr >= 1){
       ctr--;
       if (ctr == 0) {ctr = 0;}

       if (ctr == 0) { 
        document.getElementById("backButton").style.display = "none";
        document.getElementById("nextButton").style.display = "inline";
        document.getElementById("submitButton").style.display = "none";
      } else { 
        document.getElementById("nextButton").style.display = "inline";
        document.getElementById("backButton").style.display = "inline";
        document.getElementById("submitButton").style.display = "none";
      }


      document.getElementById("questionDisplay").innerHTML = questionBank[ctr];
       updateValues(); // updates the form with the appropriate data
       
     }
   })
  });