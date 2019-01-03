<?php

$getallen = array();

for ($x=0; $x < 10; $x++) {
	$getallen[$x] = rand(1, 100);
	echo "$x $getallen[$x] <br>";
}

$max = 0;
for ($x=0; $x < 10; $x++) {
	if ($getallen[$x] > $max) {
		$max = $getallen[$x];
	}
}
echo "<br>Het grootste getal is: " . $max . "<br>";

?>