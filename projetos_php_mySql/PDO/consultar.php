<?php 

	//Importando conexão
	include_once "conexao.php";
	//Codigo do item a ser consultado
	$codigo  = 2;
	//Criando Sql
	$sql = "SELECT * FROM contato WHERE idcontato=:id";
	//Iniciando instrução
	$comando = $con->prepare($sql);
	//Passando valores para cada parâmetro
	$comando->bindParam(":id",$codigo);
	//Executando a instrução
	$comando->execute();
	//pegando retorno
	$retorno = $comando->fetch();
	//pegando o valor de cada campo
	echo $retorno['nome'].'<br/>';
	echo $retorno['email'].'<br/>';
	echo $retorno['telefone'].'<br/>';
	echo $retorno['cidade'].'<br/>';
?>