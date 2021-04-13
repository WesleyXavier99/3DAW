<?php 

//receber os elementos do formulário
	$a = $_GET["a"];
	$b = $_GET["b"];
	$operacao = $_GET["op"];
	$aValido = 0;
	$bValido = 0;

//validar os elementos do formulario
	if ($operacao == 'raiz' or $operacao == 'sobre' or $operacao == 'quad') {

			if ($a!="" and ctype_digit($a)) {
				$aValido = 1;
				$bValido = 1;
			}else{
				echo "<br>Preencha o campo a corretamente<br>";
			}
			
		}else{
			if ($a!="" and ctype_digit($a)) {
				$aValido = 1;
			}else{
				echo "<br>Preencha o campo a corretamente<br>";
			}

			if ($b!="" and ctype_digit($b)) {
				$bValido = 1;
			}else{
				echo "<br>Preencha o campo b corretamente<br>";
			}
		}
	
	

	

//testar se todos elementos foram validados 
	if ($aValido==1 and $bValido==1) {
		
		//exibindo as informações ao usuário
				switch ($operacao) {
					case 'soma':
						$resultado = $a + $b;
						break;

					case 'subt':
						$resultado = $a - $b;
						break;

					case 'multi':
						$resultado = $a * $b;
						break;

					case 'divi':
						$resultado = $a / $b;
						break;
					
					case 'quad':
						$resultado = $a * $a;
						break;

					case 'raiz':
						$resultado = sqrt($a);
						break;

					case 'perc':
						$resultado = (($a/100)*$b);
						break;

					case 'sobre':
						$resultado =  1/$a;
						break;

					default:
						
						break;
				}

		//exibir o resultado para o usuario
		echo "<br>";
		echo "O resultado é $resultado";
		echo "<br>"; 

	}

?>