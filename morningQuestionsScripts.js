function morningQuestion( // Create the morningQuestion prototype
bedTime, // String
wakeTime, // String
problemsFallingAsleep, // Boolean
minutesToFallAsleep, // String || Int
didWakeDuringTheNight, // Boolean
minutesToFallBackToSleep, // String / Int
howDidYouFeel, // String || Int || BitWise
noise, 
light, 
stress, 
temp, 
nota
) {

// Parameters - Constructor - defaults to Private (verify)
this.bedTime = bedTime;
this.wakeTime = wakeTime;
this.problemsFallingAsleep = problemsFallingAsleep;
this.minutesToFallAsleep = minutesToFallAsleep;
this.didWakeDuringTheNight = didWakeDuringTheNight;
this.minutesToFallBackToSleep = minutesToFallBackToSleep;
this.howDidYouFeel = howDidYouFeel;
this.noise = noise;
this.light = light;
this.stress = stress;
this.temp = temp;
this.nota = nota;

// Methods
this.setBedTime = function setBedTime(time) {
	this.bedTime = time;
}

this.setWakeTime = function setWakeTime(time) {
	this.wakeTime = time;
}

this.setProblemsFallingAsleep = function setProblemsFallingAsleep(problems) {
	this.problemsFallingAsleep = problems;
}

this.setMinutesToFallAsleep = function setMinutesToFallAsleep(mins) {
	this.minutesToFallAsleep = mins;
}

this.setDidWakeDuringTheNight = function setDidWakeDuringTheNight(didwake) {
	this.didWakeDuringTheNight = didwake;
}

this.setMinutesToFallBackToSleep = function setMinutesToFallBackToSleep(mins) {
	this.minutesToFallBackToSleep = mins;
}

this.setHowDidYouFeel = function setHowDidYouFeel(choice) {
	this.howDidYouFeel = choice;
}


this.setNoise = function setNoise(valueString) {
	this.noise = valueString;
}
this.setLight = function setLight(valueString) {
	this.light = valueString;
}
this.setStress = function setStress(valueString) {
	this.stress = valueString;
}
this.setTemp = function setTemp(valueString) {
	this.temp = valueString;
}
this.setNota = function setNota(valueString) {
	this.nota = valueString;
}


this.getNoise = function getNoise() {
	return this.noise;
}
this.getLight = function getLight() {
	return this.light;
}
this.getStress = function getStress() {
	return this.stress;
}
this.getTemp = function getTemp() {
	return this.temp;
}
this.getNota = function getNota() {
	return this.nota;
}

}








