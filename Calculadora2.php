<?php 

//receber os elementos do formulário
	$a = $_GET["a"];
	$b = $_GET["b"];
	$aValido = 0;
	$bValido = 0;

//validar os elementos do formulario
	if ($a!="" and ctype_digit($a)) {
			$aValido = 1;
		}

	if ($a!="" and ctype_digit($b)) {
			$bValido = 1;
		}

//testar se todos elementos foram validados 
	if ($aValido==1 and $bValido==1) {
		$resultado = $a + $b;

		//exibir o resultado para o usuario
		echo "<br>";
		echo "O resultado é $resultado";
		echo "<br>"; 

	}else{

		//caso não sejam validadas, exibe mensagem de erro
		echo "<br>";
		echo "<p>Formulario com erro(s). Preencha Novamente</p>";
		echo "<br>";
	}

?>