<?php 

	//array com as cidades
	$cidades = array('rj' => "Rio de Janeiro", 'sp' => "São Paulo", 'rs' => "Porto Alegre", 'ce' => "Fortaleza", 'mg' => "Belo Horizonte", 'es' => "Vitória", 'to' => "Palmas" , 'go' => "Goiânia", 'am' => "Manaus", 'ac' => "Rio Branco", 'mt' => "Cuiabá", 'al' => "Maceió", 'ap' => "Macapá", 'ba' => "Salvador", 'sc' => "Florianópolis", 'ms' => "Campo Grande", 'ro' => "Porto Velho", 'pa' => "Belém", 'rr' => "Boa Vista", 'ma' => "São Luiz", 'pa' => "Belém", 'pb' => "João Pessoa", 'rn' => "Natal", 'pi' => "Teresina", 'se' => "Aracaju");

	//recebendo o UF do usuario
	$estado = $_GET["estado"];

	//Validar a UF
	if(strlen($estado)>2){
		echo "Digite uma UF válida!";
	}

	//percorrendo o vetor de cidades procurando UF correspondente
	foreach ($cidades as $key => $value ) {
		if ($key == $estado) {
			echo $value;
		}
	}
?>