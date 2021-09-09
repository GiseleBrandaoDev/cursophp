<?php

//foreach

$cores = array ("Verde", "Vermelho", "Azul", "Preto");

foreach($cores as $indice => $valor):
	echo $indice. "-".$valor. "<br>";
endforeach;

echo "<hr>";

// for 
for ($contador = 0; $contador <= 10; $contador++):
	echo "contador eh $contador <br>";
endfor;

echo "<hr>";


for ($contador = 0; $contador <= 10; $contador++):
	echo "8 x  $contador = ".($contador*8). "<br>";
endfor;

echo "<hr>";

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