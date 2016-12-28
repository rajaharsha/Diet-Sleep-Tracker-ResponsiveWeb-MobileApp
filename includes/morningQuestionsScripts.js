function morningQuestion(
    bedTime, // String
	wakeTime, // String
	problemsFallingAsleep, // Boolean
	minutesToFallAsleep, // String || Int
	didWakeDuringTheNight, // Boolean
	minutesToFallBackToSleep, // String / Int
	howDidYouFeel, // String || Int || BitWise
	anythingBotherYourSleep // String to Hex ??? */
	) {

			// May not need these, nor the paramters in the object constructor.
			// I placed this here, until I set the validation methods. 

			this.bedTime = bedTime;
			this.wakeTime = wakeTime;
			this.problemsFallingAsleep = problemsFallingAsleep;
			this.minutesToFallAsleep = minutesToFallAsleep;
			this.didWakeDuringTheNight = didWakeDuringTheNight;
			this.minutesToFallBackToSleep = minutesToFallBackToSleep;
			this.howDidYouFeel = howDidYouFeel;
			this.anythingBotherYourSleep = anythingBotherYourSleep;

			this.setBedTime = function setBedTime() {
				var setBedTime = document.getElementById('inputBedTimeId').value; // get data
				this.bedTime = setBedTime;
			}


			this.setWakeTime = function setWakeTime() {
				var setWakeTime = document.getElementById('inputWakeTimeId').value; // get data
				this.wakeTime = setWakeTime;
			}

			this.setProblemsFallingAsleep = function setProblemsFallingAsleep() {
				var setProblemsFallingAsleep = document.getElementById('inputProblemsFallingAsleepId').value; // get data
				this.problemsFallingAsleep = setProblemsFallingAsleep;
			}

			this.setMinutesToFallAsleep = function setMinutesToFallAsleep() {
				var setMinutesToFallAsleep = document.getElementById('inputMinutesToFallAsleepId').value; // get data
				this.minutesToFallAsleep = setMinutesToFallAsleep;
			}
			this.setDidWakeDuringTheNight = function setDidWakeDuringTheNight() {
				var setDidWakeDuringTheNight = document.getElementById('inputDidWakeDuringTheNightId').value; // get data
				this.didWakeDuringTheNight = setDidWakeDuringTheNight;
			}

			this.setMinutesToFallBackToSleep = function setMinutesToFallBackToSleep() {
				var setMinutesToFallBackToSleep = document.getElementById('inputMinutesToFallBackToSleepId').value; // get data
				this.minutesToFallBackToSleep = setMinutesToFallBackToSleep;
			}
			

			this.setHowDidYouFeel = function setHowDidYouFeel(choice) {

				this.howDidYouFeel = choice;
			}

			this.setAnythingBotherYourSleep = function setAnythingBotherYourSleep(valueString) {
				
				this.anythingBotherYourSleep = valueString;
			}
		}


		function setQuestion1() { // Bed time and wake time
			var x = document.getElementById('inputBedTimeId').value
			var y = document.getElementById('inputWakeTimeId').value
			questions.setBedTime(x);
			questions.setWakeTime(y);
		}

		function setQuestion2() { // problems fall asleep, how many minutes
			var x = document.getElementById('inputProblemsFallingAsleepId').checked
			var y = document.getElementById('inputMinutesToFallAsleepId').value
			questions.setProblemsFallingAsleep(x);
			questions.setMinutesToFallAsleep(y);
		}

		function setQuestion3() { // wake up at night, how many minutes to fall asleep
			var x = document.getElementById('inputDidWakeDuringTheNightId').checked
			var y = document.getElementById('inputMinutesToFallBackToSleepId').value
			questions.setDidWakeDuringTheNight(x);
			questions.setMinutesToFallBackToSleep(y);
		}

		function setQuestion4(choice) { // how did you feel
			var x = choice;
			
			switch (x){
				case 1:
				// Sleepy Selected
				document.getElementById('somewhatSleepyId').checked 	= false;
				document.getElementById('alertId').checked 				= false;
				questions.setHowDidYouFeel("1");
				break;
				case 2:
				// Somewhat_Sleepy Selected
				document.getElementById('sleepyId').checked 			= false;
				document.getElementById('alertId').checked 				= false;
				questions.setHowDidYouFeel("2");
				break;
				case 3:
				// Alert Selected
				document.getElementById('somewhatSleepyId').checked 	= false;
				document.getElementById('sleepyId').checked 			= false;
				questions.setHowDidYouFeel("3");
				break;
			}
		}
		function setQuestion5(choice) { // anything bother the sleeper last night

			if (choice == 1) {
				document.getElementById("noiseId").checked = false;
				document.getElementById("lightId").checked = false;
				document.getElementById("worryId").checked = false;
				document.getElementById("tempId").checked = false;
				var e = document.getElementById('noneId').checked = true;
			} else {

				document.getElementById("noneId").checked = false;
			var a = document.getElementById('noiseId').checked // true/false
			var b = document.getElementById('lightId').checked // true/false
			var c = document.getElementById('worryId').checked // true/false
			var d = document.getElementById('tempId').checked  // true/false
			var e = document.getElementById('noneId').checked  // true/false
		}
  			var a = a ? 1 : 0; // Ternary (conditional ) operator
  			var b = b ? 1 : 0; // variableName = (conditiona) ? value1:value2
  			var c = c ? 1 : 0; // value1 if true, value2 if false
  			var d = d ? 1 : 0;
  			var e = e ? 1 : 0;
  			var result = "" + a + b + c + d + e;
  			questions.setAnythingBotherYourSleep(result);
  		}

  		function viewAll(){
  			window.alert(
  				" " + questions.bedTime + "\n" +
  				" " + questions.wakeTime + "\n" + 
  				" " + questions.problemsFallingAsleep + "\n" + 
  				" " + questions.minutesToFallAsleep + "\n" + 
  				" " + questions.didWakeDuringTheNight + "\n" + 
  				" " + questions.minutesToFallBackToSleep + "\n" + 
  				" " + questions.howDidYouFeel + "\n" + 
  				" " + questions.anythingBotherYourSleep + "\n"
  				);
  		}



  function updateValues(){
  	   
  	   if (ctr == 0) {  // question 1
        document.getElementById("inputBedTimeId").value = questions.bedTime;
  		document.getElementById("inputWakeTimeId").value = questions.wakeTime;
       }
       if (ctr == 1) {  // question 2
        document.getElementById("inputProblemsFallingAsleepId").checked = questions.problemsFallingAsleep;
  		document.getElementById("inputMinutesToFallAsleepId").value = questions.minutesToFallAsleep;
       }
       if (ctr == 2) {  // question 3
        document.getElementById("inputDidWakeDuringTheNightId").checked = questions.didWakeDuringTheNight;
  		document.getElementById("inputMinutesToFallBackToSleepId").value = questions.minutesToFallBackToSleep;
       }
       if (ctr == 3) {  // question 4
       

        if (questions.howDidYouFeel == "1"){
        	document.getElementById("sleepyId").checked				= true;
        	document.getElementById("somewhatSleepyId").checked 	= false;
			document.getElementById("alertId").checked 				= false;
        }

        if (questions.howDidYouFeel == "2"){
        	document.getElementById("sleepyId").checked				= false;
        	document.getElementById("somewhatSleepyId").checked 	= true;
			document.getElementById("alertId").checked 				= false;
        }

        if (questions.howDidYouFeel == "3"){
        	document.getElementById("sleepyId").checked				= false;
        	document.getElementById("somewhatSleepyId").checked 	= false;
			document.getElementById("alertId").checked 				= true;
        }


       }

       if (ctr == 4) {  // question 5
        var parseThis = questions.anythingBotherYourSleep;
        //window.alert(parseThis);
        // five options to fill out with the parsed value
        // need an php function to parse parseThis into a readable array
        parseThis = parseThis.split("");
        var choice1 = parseThis[0];
        var choice2 = parseThis[1];
        var choice3 = parseThis[2];
        var choice4 = parseThis[3];
        var choice5 = parseThis[4];

        if (choice1 == "1") { document.getElementById("noiseId").checked = true } 
        if (choice2 == "1") { document.getElementById("lightId").checked = true }
        if (choice3 == "1") { document.getElementById("worryId").checked = true }
		if (choice4 == "1") { document.getElementById("tempId").checked  = true }	
		if (choice5 == "1") { document.getElementById("noneId").checked  = true }

       }

  }


function validateForm() {
    
	window.alert("Validate Form") ;


    }




// create object for morning questions
 var questions = new morningQuestion("", "", false, "", false, "", "0", "00001"); // create questions instance













