<?php

$a = 1;
$a = 3;
$a = 7;

function exibeCidade() {
	global $cidade;
	$cidade = "Sao Paulo";
}

exibeCidade();
echo $cidade;

acho "<hr>";
//////////

function soma() {
	$GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']

}

soma();

