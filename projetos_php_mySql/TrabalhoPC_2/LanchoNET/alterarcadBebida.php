<?php 
include_once "config.php"; // incluindo a pagina com a conexao com o banco de dados
session_start(); // dando inicio a uma sessao
if (!isset($_SESSION["usuario"]) && !isset($_SESSION["senha"])) { // verificando a negação de valores da global session
	header("Location: login.php"); // caso a negação for verdadeira o usuário retornara pra a tela de login
	}
if(isset($_GET['acao']) && $_GET['acao'] == "editar") {// verificando o valor da global get['acao']
	//caso seja verdadeira, os valores passados pelo post serão recuperados
	$id = $_GET['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$data = new DateTime($_POST['datafab']); // instanciando um objeto DateTime
	$data2 = new DateTime($_POST['dataval']);// outro instanciamento de objeto DateTime
	$datafab = $data->format('Y-m-d'); //formatando a data recuperada para a inserção no banco
	$dataval = $data2->format('Y-m-d');//formatando a data recuperada para a inserção no banco

	// comando update
	$sql = "UPDATE bebidas SET nome='$nome',preco='$preco',data_fab='$datafab',data_val='$dataval' WHERE id_bebida=$id";  
	// executando o comando update
	$sqlupdate = mysqli_query($conexao,$sql);
	//retornando a tela de consulta
	header("Location: consulta.php");
}
if(isset($_GET['acao']) && $_GET['acao'] == "excluir") { // verificando novamente o valor da global get['acao']
	// caso seja verdadeira será feita a exclusão de registro na tabela
	$id = $_GET['id'];

	// comando delete
	$sql = "DELETE FROM bebidas WHERE id_bebida=$id";  
	// executando o comando delete
	$sqlDelete = mysqli_query($conexao,$sql);
	// retornando atela de consulta
	header("Location: consulta.php");
}
?>