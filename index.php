<?php

$getallen = array();

// de "scope" voor de random nummers
$startNumber = 1;
$endNumber = 10;
$aantalGetallen = 20;  // aantal getallen in de rij


// 10 random getallen
for ($x=0; $x < $aantalGetallen; $x++) {
	$getallen[$x] = rand($startNumber, $endNumber);
	echo ($x+1) . " : $getallen[$x] <br>";
}

// bepaal het hoogste getal
$max = 0;
for ($x=0; $x < $aantalGetallen; $x++) {
	if ($getallen[$x] > $max) {
		$max = $getallen[$x];
	}
}

// bepaal het kleinste getal
$min = $getallen[0];
for ($x=0; $x < $aantalGetallen; $x++) {
	if ($getallen[$x] < $min) {
		$min = $getallen[$x];
	}
}

// bepaal het gemiddelde
$totaal = 0;
$gemiddelde = 0;
for ($x=0; $x < $aantalGetallen; $x++) {
	$totaal = $totaal + $getallen[$x];
}
$gemiddelde = $totaal / count($getallen);


// het resultaat
echo "<br>Het grootste getal is: " . $max . "<br>";
echo "<br>Het kleinste getal is: " . $min . "<br>";
echo "<br>Het aantal in de rij is: " . count($getallen) . "<br>";
echo "<br>Het gemiddelde is: " . round($gemiddelde, 1) . "<br>";

?>