<?php
// operadores lógicos
//nos permitem fazer comparações entre expressões

// e (&& - and)
// ou(|| - or)
// ou exclusivo (xor)
//negação (!)

$idade = 26;
$nome = "Rodrigo";

if (($idade == 25) xor ($nome == "Rodrigo")):
	echo "è verdadeiro";
else:
	echo "é falso";
endif;

echo "<br>";
echo "<hr>";


// operadores de comparação
/*
== igual
!= não igual
=== exatamente igual, identico
!===não exatamente igual, não identico
<> menor que maior que, diferente
< menor que
> maior que
<= menor ou igual
>= maior ou igual
<=> space chip, compara um lado com outro e retorna se -1 menor, igual 0, ou 1 maior
*/

if (6 <= 10):
	echo "positivo";
else:
	echo "negativo";
endif;

echo "<br>";
echo "<hr>";


//operadores de atribuição

$a = 10;
$b = 5;
$a = $a + $b;

$a = $a + $b;
$a -= $a - $b;
$a *= $b;
$a /= $b; //divisão
$a %= $b; //resto da divisão

echo $a;

echo "<br>";
echo "<hr>";








//incremento
//pré-decremento echo ++$valor;
//pós-decremento echo $valor++;


$valor = 20;
echo "<br>";
echo ++$valor;
echo "<br>";
echo "<hr>";

echo $valor++;
echo "<br>";
echo $valor;

echo "<hr>";

//decremento


$valor = 20;
echo "<br>";
echo --$valor;
echo "<br>";
echo "<hr>";

echo $valor--;
echo "<br>";
echo $valor;