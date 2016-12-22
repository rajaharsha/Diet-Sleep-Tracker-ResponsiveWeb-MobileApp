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





		function checkQuestion1() { // Bed time and wake time
			questions.setBedTime(document.getElementById('inputBedTimeId').value);
			questions.setWakeTime(document.getElementById('inputWakeTimeId').value);
		}

		function checkQuestion2() { // problems fall asleep, how many minutes
			questions.setProblemsFallingAsleep(document.getElementById('inputProblemsFallingAsleepId').checked);
			questions.setMinutesToFallAsleep(document.getElementById('inputMinutesToFallAsleepId').value);
		}
		function checkQuestion3() { // wake up at night, how many minutes to fall asleep
			questions.setDidWakeDuringTheNight(document.getElementById('inputDidWakeDuringTheNightId').checked);
			questions.setMinutesToFallBackToSleep(document.getElementById('inputMinutesToFallBackToSleepId').value);
		}

		function checkQuestion4(choice) { // how did you feel
			var x = choice;
			questions.setHowDidYouFeel(choice);

			switch (x){
				case 1:
				document.getElementById('somewhatSleepyId').checked = false;
				document.getElementById('alertId').checked = false;
				break;
				case 2:
				document.getElementById('sleepyId').checked = false;
				document.getElementById('alert').checked = false;
				break;
				case 3:
				document.getElementById('somewhatSleepyId').checked = false;
				document.getElementById('sleepyId').checked = false;
				break;
			}
		}
		function checkQuestion5(choice) { // anything bother the sleeper last night

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
  				      questions.bedTime + 
  				" " + questions.wakeTime + 
  				" " + questions.problemsFallingAsleep +
  				" " + questions.minutesToFallAsleep + 
  				" " + questions.didWakeDuringTheNight +
  				" " + questions.minutesToFallBackToSleep + 
  				" " + questions.howDidYouFeel + 
  				" " + questions.anythingBotherYourSleep
  				);
  		}



  var questions = new morningQuestion("0:00", "0:00", false, "0", "false", "0", "0", "00000"); // create questions instance







