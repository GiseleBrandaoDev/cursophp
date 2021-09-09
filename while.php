<?php

//while & Do While

$contador = 1;

while ($contador <= 10):
	echo "contador é $contador <br>";
	$contador++;
endwhile;

echo "<hr>";

$contador = 1;

do {
 	
 	echo "contador é $contador <br>";
	$contador++;
}
while($contador <= 10);

echo "<hr>";