<?php 

	include_once "conexao.php";
	$codigo = 2;
	$nome = "José Flávio";
	$email = "jose@hotmail.com";
	$telefone = "(14) 78945612";
	$cidade = "Ipaussu";

	$sql = "UPDATE contato SET nome=:nome,email=:email,telefone=:telefone,cidade=:cidade WHERE idcontato=:id";
	$comando = $con->prepare($sql);

	$comando->bindParam(":id",$codigo);
	$comando->bindParam(":nome",$nome);
	$comando->bindParam(":email",$email);
	$comando->bindParam(":telefone",$telefone);
	$comando->bindParam(":cidade",$cidade);

	if ($comando->execute()) {
		echo "Alteração efetuada com sucesso";
	}
	else {
		echo "Erro ao efetuar a alteração";
	}
?>