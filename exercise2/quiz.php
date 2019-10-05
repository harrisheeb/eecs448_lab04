<?php
//access the global array called $_POST to get the values from the text fields
$diameter = $_POST["diameter"];
$mass = $_POST["mass"];
$people = $_POST["people"];
$dogs = $_POST["dogs"];
$trees = $_POST["trees"];
$percentage = 0;

//Inside myfirstprogram.php
function sum($number, $userAnswer, $correctAnswer) {
    echo "Question $number<br>";
    echo "You answered: $userAnswer<br>";
    echo "Correct answer: $correctAnswer<br><br>";
    if($correctAnswer == $userAnswer){
	return 20;
    }
    return 0;
}

$percentage = $percentage + sum("1: What is the diameter of the earth? ", $diameter, "7,917.5 mi");
$percentage = $percentage + sum("2: What is the mass of the earth?", $mass, "5.972 × 10^24 kg");
$percentage = $percentage + sum("3: How many people are there on the earth?", $people, "7.53 billion");
$percentage = $percentage + sum("4: How many dogs are there on the earth?", $dogs, "900 million");
$percentage = $percentage + sum("5: How many trees are there on the earth?", $trees, "3.04 trillion");

echo "Your score was $percentage %";



?>

