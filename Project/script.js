//global variable designed to store number guessing score.
var ngscore = 0;

//global variable designed to store even odd score.
var eoscore = 0;

//global variable designed to store total score between both games.
var  totalscore = 0;

//creates a random number between your desired min and max.
function getRndInt(min, max){
	return Math.floor(Math.random()*(max - min + 1)) + min;
	
}

//function that is called when roll is pressed dealing with a simple dice game. Compares user input with random button, if matches then add 1 point to score.
function roll(){
	document.getElementById("demo").innerHTML = "";
	var input = document.getElementById("userInput").value;
	//If you want to make it seem like you're rolling two dice increase the max to 12 and min to 2.
	//2 dice cant go over the value of 12 and lower than 2.
	if(input > 6 || input < 1) {
		alert("The value that is entered for a guess has to be less than 6 and greater than 0, Please guess again");
	} else {
		alert(input);
	}
	var rnd = getRndInt(1,6);
	alert("The number rolled is: " + rnd);
	if (input == rnd) {
		alert("Correct!");
		ngscore += 1;
		alert("Your new score is: " + ngscore);
	} else {
		alert("Incorrect... Try again next time!");
	}
}

//function that is called when even/odd is pressed dealing with an even/odd game mode.
function evenOdd(){
	var eoinput = document.getElementById("evenOddInput").value;
	alert(eoinput);
	//If you want to make it seem like you're rolling two dice increase the max to 12 and min to 2.
	//2 dice cant go over the value of 12 and lower than 2.
	var rnd = getRndInt(1,6);
	alert(rnd);
	var val = isOdd(rnd);
	alert(val);
	
	if(eoinput == 1 && val == 1){
		alert("Correct, the number rolled is odd.");
		eoscore += 1;
		alert("Your new score is: " + eoscore);
	} else if(eoinput == 0 && val == 0){
		alert("Correct, the number rolled was even");
		eoscore += 1;
		alert("Your new score is: " + eoscore)
	} else {
		alert("Incorrect... It's ok try again!");
	}
	
}

//determines whether a number is even or odd.
function isOdd(num) {
	return num%2;
}

//used to simply test the rng function created above.
function testRnd(){
	document.getElementById("demo").innerHTML = getRndInt(1,6);
}

//display the current score when pressed.
function currentScore(){
	document.getElementById("demo").innerHTML = "Your current score for Number Guessing game is: " + ngscore + " and this is your score for odd/even game: " + eoscore;
}

//ends the game and displays the total score.
function end(){
	alert("The game has ended!");
	totalscore = ngscore + eoscore;
	document.getElementById("demo").innerHTML = "That is the end of the game, your total score is: " + totalscore + " please play again!" ;
	document.getElementById("final").innerHTML = "Total Score: " + totalscore+"<br> Number Guessing Score: "+ngscore+"<br> Even/Odd score: " + eoscore;
	//reinitializes values for next game.
	totalscore = 0;
	eoscore = 0;
	ngscore = 0;
	
}