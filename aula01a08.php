<?php

$nome = "nome";
var_dump ($nome);
if (is_string($nome)):
    echo "é string";
else:
    echo "não é uma string";
endif;
echo "<hr>";
//int
$idade = 12.8;
var_dump ($idade);
if(is_int($idade)):
echo "è um inteiro";
else:
    echo "não é um inteiro";
endif;
echo "<hr>";
//float
$altura = 1.77;
var_dump ($altura);
if(is_float($altura)):
echo "é um float";
else:
    echo "não é um float";
endif;
echo "<hr>";
//booleano
$admin = true;
var_dump ($admin);
if(is_bool($admin)):
echo "é um boleano";
else:
    echo "não é um boleano";
endif;
echo "<hr>";
$carros = array("Gol","Uno","Camaro",12,20.6,true);
var_dump($carros);
echo "<hr>";
//object
class Cliente {
    public $none;
    public function atribuirNome($nome){
      $this->$nome = $nome;  
    }
}
$cliente = new Cliente();
$cliente->atribuirNome("Gisele");
var_dump($cliente);
if(is_object($cliente)):
echo "é um objeto";
else:
    echo "não é um objeto";
endif;
echo "<hr>";
//null
$cidade = null;
var_dump($cidade);
//resource













