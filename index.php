<?php

$getallen = array();

// 10 random getallen
for ($x=0; $x < 10; $x++) {
	$getallen[$x] = rand(1, 100);
	echo "$x $getallen[$x] <br>";
}

// bepaal het hoogste getal
$max = 0;
for ($x=0; $x < 10; $x++) {
	if ($getallen[$x] > $max) {
		$max = $getallen[$x];
	}
}

// het resultaat
echo "<br>Het grootste getal is: " . $max . "<br>";

?>