<?php
$nome = 'Gisele';
echo 'meu nome é '.$nome. ' e minha idade e \'23\'';
echo "<hr>";
echo "meu nome é $nome";
echo "<hr>";

$nome = "Gisele Brandão";

function exibeNome() {
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";


function exibeCidade() {
	$cidade = "Sao Paulo";
}

exibeCidade();
echo $cidade;