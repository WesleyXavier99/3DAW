<?php 
//Arquivo de formulario de cadastro de aluno

//Recebendo os parametros do formulário
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$matricula = $_POST["matricula"];

	//Informações para acessar o banco
	$servidor = "localhost";
	$baseDados = "dawfaeterj";
	$username = "root" ;
	$senha = "" ;

	//Estabelecer conexão com o banco de dados
	$conn = mysqli_connect($servidor,$username,$senha,$baseDados);

	//verificar se a conexão deu certo
	if (!$conn) {
		die("<br>Conexão falhou!!:" . mysqli_connect_error());
	}else{
		echo "<br>Conexão concluida!!";
	}

	//inserir linha na tabela
	$sql = "INSERT INTO alunos (nome,email,matricula) VALUES ('$nome','$email','$matricula')";

	//verificar se a inserção da nova linha foi concluida
	if(mysqli_query($conn,$sql)){
		echo "<br>Nova linha adicionada com sucesso!!";
	}else{
		echo "<br>Falha na criação da linha!!<br><br>" . $sql . "<br><br>" . mysqli_error($conn);
	}

	//Fechar a conexão com o banco de dados
	mysqli_close($conn);
?>