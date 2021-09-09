<?php

//criando funções


function exibirNome($nome) {
	echo "meu nome é $nome";
}

exibirNome("Adriele Santos");

echo "<br>";

	function calcularMedia($nome, $nota1, $nota2, $nota3, $nota4) {
		$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
		if ($media >= 7):
			echo "$nome foi aprovado com a $media.";
		else: 
			echo "$nome foi reprovado";
		endif;

	}

	calcularMedia("Bob", 5, 7, 9, 10);