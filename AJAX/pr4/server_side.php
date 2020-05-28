<?php

$player = $_GET['player'];

//verify if game ended
function validateWin($array){
	if (in_array("1", $array) && in_array("2", $array) && in_array("3", $array)){
		return 1;
	}
	if (in_array("4", $array) && in_array("5", $array) && in_array("6", $array)){
		return 1;
	}
	if (in_array("7", $array) && in_array("8", $array) && in_array("9", $array)){
		return 1;
	}
	if (in_array("1", $array) && in_array("4", $array) && in_array("7", $array)){
		return 1;
	}
	if (in_array("2", $array) && in_array("5", $array) && in_array("8", $array)){
		return 1;
	}
	if (in_array("3", $array) && in_array("6", $array) && in_array("9", $array)){
		return 1;
	}
	if (in_array("1", $array) && in_array("5", $array) && in_array("9", $array)){
		return 1;
	}
	if (in_array("3", $array) && in_array("5", $array) && in_array("7", $array)){
		return 1;
	}
	return 0;
}

//verify if human player wins
if ($player == "X"){
	$positions = $_GET['positions'];
	$positionsAvailable = $_GET['positionsAvailable'];
	$positions = explode(',', $positions);
	$positionsAvailable = explode(',', $positionsAvailable);
	if(validateWin($positions) == 1){
		echo -1; //return -1 if game is over
	}
	else{
		echo array_rand($positionsAvailable); //return a random position "chosen" by computer player
	}
}
//verify if computer wins
else if ($player == "0"){
	$positions = $_GET['positions'];
	$positionsAvailable = $_GET['positionsAvailable'];
	$positions = explode(',', $positions);
	$positionsAvailable = explode(',', $positionsAvailable);
	if(validateWin($positions) == 1){
		echo -1; //return -1 if game is over
	}
	else{
		echo 0; //return 0 if not
	}
}
?>