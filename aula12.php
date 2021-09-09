<?php
//$carro1 = "Kombi";
//$carro2 = "uno";
//$carro3 = "metro";

$carros = array(1=>"kombi",2=>"uno",3=>"metro");
//print_r($carros);
echo $carros[2];
echo "<hr>";

$moto = array();
$moto = "Yamaha";
$moto = "Honda";

print_r($moto);
echo "<br>";

$clientes = ["Rodrigo","Cleiton","Bia"];
print_r($clientes);
echo "<br>";

echo count($clientes);
echo "<br>";
$totalClientes = count($clientes);
echo $totalClientes;

foreach ($carros as $valor => $value) {
	// code...
}