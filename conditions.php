<?php

$numero = 8;

if ($numero == 10):
	echo "é igual a 10";
elseif($numero <= 9):
echo "é menor ou igual a 9";
else:
echo "é diferente de 10";
endif;

echo "<hr>";

$media = 7;

echo ($media >=7) ? "aprovado" : "reprovado" ;

echo "<hr>";

//switch
//case

$cor = "vermelho";

switch ($cor) :
	case 'vermelho':
		echo "cor é vermelho";
		break;

	case 'verde':
		echo "cor é verde";
		break;

	case 'azul':
		echo "cor é azul";
		break;

endswitch;
