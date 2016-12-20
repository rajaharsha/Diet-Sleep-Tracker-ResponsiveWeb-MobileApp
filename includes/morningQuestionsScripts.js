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

			this.bedTime = bedTime;
			this.wakeTime = wakeTime;
			this.problemsFallingAsleep = problemsFallingAsleep;
			this.minutesToFallAsleep = minutesToFallAsleep;
			this.didWakeDuringTheNight = didWakeDuringTheNight;
			this.minutesToFallBackToSleep = minutesToFallBackToSleep;
			this.anythingBotherYourSleep = anythingBotherYourSleep;

			this.setBedTime = function setBedTime() {
				var setBedTime = document.getElementById('inputBedTimeId').value;
				this.bedTime = setBedTime;
			}

			this.setWakeTime = function setWakeTime() {
				var setWakeTime = document.getElementById('inputWakeTimeId').value;
				this.wakeTime = setWakeTime;
			}

			this.setProblemsFallingAsleep = function setProblemsFallingAsleep() {
				var setProblemsFallingAsleep = document.getElementById('inputProblemsFallingAsleepId').value;
				this.problemsFallingAsleep = setProblemsFallingAsleep;
			}

			this.setMinutesToFallAsleep = function setMinutesToFallAsleep() {
				var setMinutesToFallAsleep = document.getElementById('inputMinutesToFallAsleepId').value;
				this.minutesToFallAsleep = setMinutesToFallAsleep;
			}
			this.setDidWakeDuringTheNight = function setDidWakeDuringTheNight() {
				var setDidWakeDuringTheNight = document.getElementById('inputDidWakeDuringTheNightId').value;
				this.didWakeDuringTheNight = setDidWakeDuringTheNight;
			}

			this.setMinutesToFallBackToSleep = function setMinutesToFallBackToSleep() {
				var setMinutesToFallBackToSleep = document.getElementById('inputMinutesToFallBackToSleepId').value;
				this.minutesToFallBackToSleep = setMinutesToFallBackToSleep;
			}

			this.setAnythingBotherYourSleep = function setAnythingBotherYourSleep() {
				var setAnythingBotherYourSleep = document.getElementById('inputAnythingBotherYourSleepId').value;
				this.anythingBotherYourSleep = setAnythingBotherYourSleep;
			}

			this.printAll = function printDetails() {

				this.setBedTime();
				this.setWakeTime();
				this.setProblemsFallingAsleep();
				this.setMinutesToFallAsleep();
				this.setDidWakeDuringTheNight();
				this.setMinutesToFallBackToSleep();
				this.setAnythingBotherYourSleep();



				document.getElementById('demo').innerHTML = this.bedTime + "</br>" + 
				" " + this.wakeTime + "</br>" + 
				" " + this.problemsFallingAsleep + "</br>" + 
				" " + this.minutesToFallAsleep + "</br>" + 
				" " + this.didWakeDuringTheNight +  "</br>" + 
				" " + this.minutesToFallBackToSleep + "</br>" + 
				" " + this.anythingBotherYourSleep +  "</br>" + 
				"</br>"
				;
			}

		}
var questions = new morningQuestion(); // create questions instance


