<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$Question1 = $_POST['windu'];


$Question2 = $_POST['jobs'];


$Question3 = $_POST['shot'];


$Question4 = $_POST['ship'];


$Question5 = $_POST['yoda'];



echo "<br>Question 1: What color was Mace Windu's Lightsaber?<br>";
	echo 'your answer: ' . $Question1 . '<br>';
	echo "correct answer: purple<br>";

echo "<br>Question 2: what were Luke's aunt and uncle's job on Tatooine?<br>";
	echo 'your answer: ' . $Question2 . '<br>';
	echo "correct answer: moisture Farmers<br>";

echo "<br>Question 3: In the cantina, who shot first?<br>";
	echo 'your answer: ' . $Question3 . '<br>';
	echo "correct answer: Han<br>";

echo "<br>Question 4: What type of ship did Luke fly to destroy the Deathstar?<br>";
	echo 'your answer: ' . $Question4 . '<br>';
	echo "correct answer: X-wing<br>";

echo "<br>Question 5: What species is Yoda?<br>";
	echo 'your answer: ' . $Question5 . '<br>';
	echo "correct answer: Unknown<br>";

$points = 0;

if($Question1 == 'purple'){
$points +=1;
}

if($Question2 == 'moisture farmers'){
$points +=1;
}

if($Question3 == 'Han'){
$points +=1;
}

if($Question4 == 'X-wing'){
$points +=1;
}

if($Question5 == 'Unknown'){
$points +=1;
}



function grade($total){
	$percent = $total*20;
	return $percent;
}

echo '<br><br>' .$points . ' out of 5 correct for a '. grade($points). '% total<br>';


?>
