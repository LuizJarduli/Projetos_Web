<?php 
	
	//Importando conexão
	include_once "conexao.php";

	//valores para cadastro
	$codigo = 0;
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];

	//Criando SQL
	$sql = "INSERT INTO contato VALUES(:codigo,:nome,:email,:telefone,:cidade)";

	//iniciando Instrução;

	$comando = $con->prepare($sql);

	$comando->bindParam(":codigo",$codigo);
	$comando->bindParam(":nome",$nome);
	$comando->bindParam(":email",$email);
	$comando->bindParam(":telefone",$telefone);
	$comando->bindParam(":cidade",$cidade);

	//Executando instrução
	if ($comando->execute()) {
		echo "Cadastro efetuado com sucesso";
	} else {
		echo "erro ao efetuar o cadastro";
	}

?>