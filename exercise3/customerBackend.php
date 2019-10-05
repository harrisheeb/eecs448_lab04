<?php



echo "<head>
<style>
table, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th {
  border: 1px solid red;
  border-collapse: collapse;
  background-color:rgb(200, 200, 200);
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>";

echo "<table>";

//access the global array called $_POST to get the values from the text fields
$hat3 = $_POST["hat3"];
$quantity1 = $_POST["quantity1"];
$quantity2 = $_POST["quantity2"];
$quantity3 = $_POST["quantity3"];
$user = $_POST["User"];
$password = $_POST["Password"];


//Inside myfirstprogram.php
/*
function sum($number, $userAnswer, $correctAnswer) {
    echo "Question $number<br>";
    echo "You answered: $userAnswer<br>";
    echo "Correct answer: $correctAnswer<br><br>";
    if($correctAnswer == $userAnswer){
	return 20;
    }
    return 0;
}
*/
echo "<h1> Hat Store Reciept </h1>";

echo "Welcome, user $user <br>";
echo "Your password is: $password <br><br>";


echo "<table>";

    echo "<tr>";
	echo "<th> </th>";
	echo "<th> Quantity </th>";
	echo "<th> Cost Per Item </th>";
	echo "<th> Sub Total </th>";
    echo "</tr>";
    echo "<tr>";
	echo "<th> Green Hat </th>";
	echo "<td> $quantity1 </td>";
	echo "<td> $15.00 </td>";
	echo "<td> $" . 15 * $quantity1 . " </td>";
    echo "</tr>";
    echo "<tr>";
	echo "<th> Brown Hat </th>";
	echo "<td> $quantity2 </td>";
	echo "<td> $5.00 </td>";
	echo "<td> $" . 5 * $quantity2 . " </td>";
    echo "</tr>";
    echo "<tr>";
	echo "<th> Gray Hat </th>";
	echo "<td> $quantity3 </td>";
	echo "<td> $35.00 </td>";
	echo "<td> $" . 35 * $quantity3 . " </td>";
    echo "</tr>";
	$shippingcost = 0;
	if($hat3 == "$50.00 over night"){
		$shippingcost = 50;
	}
	if($hat3 == "$5.00 three day"){
		$shippingcost = 5;
	}
	
    echo "<tr>";
	echo "<th> Shipping </th>";
	echo "<td>  </td>";
	echo "<td> $hat3 </td>";
	echo "<td> $" . $shippingcost . " </td>";
    echo "</tr>";
    echo "<tr>";
	echo "<th> Total Cost </th>";
	echo "<td>  </td>";
	echo "<td>  </td>";
	echo "<td> $" . ($shippingcost + 15 * $quantity1 + 5 * $quantity2 + 35 * $quantity3) . " </td>";
    echo "</tr>";

echo "</table>";



?>

