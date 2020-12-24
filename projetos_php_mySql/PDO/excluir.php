<?php 
	//Importando conexão
	include_once "conexao.php";
	//código do item a ser excluido
	$codigo = $_GET['id'];
	//Criando sql
	$sql = "DELETE FROM contato WHERE idcontato = :id";
	//iniciando a instrução
	$comando = $con->prepare($sql);
	//passando valores para cada parâmetro
	$comando->bindParam(":id",$codigo);
	//Executando instrução
	if ($comando->execute()) {
		echo "Exclusão efetuada com sucesso";
	} else{
		echo "Erro ao efetuar Exclusão";
	}

?>