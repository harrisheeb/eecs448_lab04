<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Inside myfirstprogram.php
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


for ($x = 0; $x <= 100; $x++) {
    echo "<tr>";
    for ($y = 0; $y <= 100; $y++) {
	if($x == 0 and $y == 0){
		echo "<th> </th>";
	}else if($x == 0){
		echo "<th> $y </th>";
	} else if ($y == 0){
		echo "<th> $x </th>";
	} else {
		$result = $x * $y;
        	echo "<td> $result </td>";
	}
    } 
    echo "</tr>";
} 

echo "</table>"
?>

