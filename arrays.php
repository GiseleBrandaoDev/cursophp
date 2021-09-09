<?php 

//array_values($array)
//array_merge($array1,$array2)
//array_pop($array) = exclui a ultima posição do array
//array_shift($array) = exclui a primeira pos~ição do array
//array_unshift($arr,"valor") = adiciona um ou mais elementos no ínicio do array
//array_push($array, "valor", "valor") = adiciona um ou mais elementos no final do array
//array_combine($keys, $values) = mescla os dois arrays passados
//array_sun() = calcula a soma dos elementos de um array
//explode("/", "20/01/2001") = transforma string em array
//implode ("-", transforma array em string)

//array_sum
$soma = array(5,3,8,7.2);
echo array_sum($soma);
echo "<hr>";

//array_combine
$keys = array("campeão", "vice", "terceiro");
$values = array("vasco", "flamengo", "botafogo");
$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

//array_combine
$keys = array("campeão", "vice", "terceiro");
$values = array("vasco", "flamengo", "botafogo");
$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

//array_push

$frutas = array("uva", "laranja", "maça");
print_r($frutas);
echo "<br>";
array_push($frutas, "manga", "acerola", "Morango");
print_r ($frutas);
echo "<hr>";

//array_unshift

$frutas = array("uva", "laranja", "maça");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "manga", "acerola", "Morango");
print_r ($frutas);
echo "<hr>";


//array_pop

$carros = array ("bmw","veloster", "hilux");
print_r($carros);
echo "<br>";
echo array_shift ($carros);
echo "<br>";
print_r ($carros);
echo "<hr>";

//array_values

$nomes = array("Primo" => "Rodrigo", "Vizinho" => "Felipe", "Mãe" => "Maria", "Pai" => "Antonio");

$values = array_values($nomes);
print_r($values);
echo "<br>";
echo "<hr>";

//array_merge
$carros = array ("bmw","veloster", "hilux");
$motos = array("yamaha", "honda", "suzuki");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<br>";
echo "<hr>";

//arrays multidimensionais
$times = array(
	"cariocas" => array("campeao" =>"vasco", "vice" =>"flamengo", "terceiro" => "botafogo"),
	"paulistas" => array("santos", "sao paulo", "palmeiras"),
	"baianos" => array("bahia", "vitoria", "itabuna")
	 );
//echo $times ["cariocas"][0];
echo "<br>";
echo "<hr>";
foreach ($times["cariocas"] as $indice => $valor) {
	echo $indice.": ".$valor. "<br>";// code...
}
echo "<hr>";

//arrays associativos
$pessoa = array ("nome" => "Rodrigo", "idade" => 23, "altura" => 1.75);
$pessoa["cidade"] = "Itabuna";

foreach ($pessoa as $indice => $valor) {
	echo $indice. ": " .$valor. "<br>";// code...
}
echo "<br>";
echo "<hr>";

//arrays
$carros = array ("bmw","veloster", "hilux");
print_r ($carros); //print_r exibe a array
echo "<br>";
echo $carros[2]; //echo exibe valor do indice informado do array
echo "<br>";

$motos = array();
$motos[] = "yamaha";
$motos[] = "honda";
$motos[5] = "suzuki";
print_r ($motos);
echo "<br>";

$clientes = ["Rodrigo", "felipe", "bia"];
print_r ($clientes);
echo "<br>";
echo count($clientes); //conta a qtde de clientes dentro do array
echo "<br>";
$totalClientes = count($clientes); // conta a variavel criada que eh array de clientes
echo $totalClientes;
echo "<br>";
echo "<br>";
//foreach
foreach ($carros as $valor) {
	echo $valor. "<br>";
}


echo "<hr>";