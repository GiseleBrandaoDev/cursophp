//operadores aritmeticos

echo 10+10;//soma
echo "<br>";

echo 15-5; //subtração
echo "<br>";

echo 3*5; //multiplicação
echo "<br>";

echo 15/5; // divisão
echo "<br>";

echo 15 % 5; // percentual mostra o resto da divisão
echo "<br>";

echo 15 % 4; 
echo "<br>";

echo 3 ** 5; //potenciação 3 elevado a 5
echo "<br>";

echo "<hr>";

//operadores aritméticos com variável

$a =  10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$adição = $a + $b;
echo $adição;
echo "<br>";

$subtracao = $c + $a;
echo $subtracao;
echo "<br>";

$multiplica = $d * $a;
echo $multiplica;
echo "<br>";

$divisao = $c / $a;
echo $divisao;
echo "<br>";

$modulo = $e % $d;
echo $modulo;
echo "<br>";

$expo = $a ** $d;
echo $expo;
echo "<br>";

//media

echo (5 + 7 + 9 + 8) / 4;
echo "<br>";

echo "<hr>";

//condicionais
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

		default:
		echo "Sua cor nao eh nenhuma dessas";

endswitch;









