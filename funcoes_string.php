<?php

//funçoes para strings
/*
strtoupper
strtolower
substr
str_pad
str_repeat
strlen
str_replace
strpos

*/

$nome = "rodrigo oliveira";
$novoNome = strtoupper($nome);
echo $novoNome;

echo "<hr>";

$nome = "ANA PAULA";
$novoNome = strtolower($nome);
echo $novoNome;

echo "<hr>";

$mensagem = "Olá Mundo!";
echo substr ($mensagem, 4, 6);

echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT);
echo $novoObjeto;

echo "<hr>";

$string = str_repeat("Sucesso! ", 5);
echo $string;
echo "<hr>";

$mensagem = "Olá Mundo!";
echo strlen($mensagem);

echo "<hr>";

$texto ="um texto qualquer";
$novoTexto = str_replace ("qualquer", "importante", $texto);
echo $novoTexto;
echo "<hr>";
echo strpos($texto, "texto");
echo "<hr>";