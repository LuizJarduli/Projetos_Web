<?php 
include_once "config.php"; // incluindo a página php com a conexão com o banco de dados
if(isset($_GET['acao']) && $_GET['acao'] == "editar") { // verificando se tem algum valor dentro da GET e se ele é igual a editar
	
	//caso verdadeiro, o id passado via url pelo GET e os demais valores passados via POST seráo recuperados
	$id = $_GET['id'];
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$usuario = $_POST['username'];

	//comando update
	$sql = "UPDATE admin SET email='$email', nome='$nome', senha='$senha', cpf='$cpf', nome_usuario='$usuario' WHERE id=$id";
	//executando comando update  
	$sqlupdate = mysqli_query($conexao,$sql);
	//redirecionado o usuário para a tela de admin
	header("Location: admin.php");
}
if(isset($_GET['acao']) && $_GET['acao'] == "excluir") { // caso  a GET ação contenha valor e seja excluir
	// recuperando o id passado via url com o GET
	$id = $_GET['id'];

	//comando delete
	$sql = "DELETE FROM admin WHERE id=$id";  
	//executando o comando delete
	$sqlDelete = mysqli_query($conexao,$sql);
	//redirecionando o usuário para a tela admin
	header("Location: admin.php");
}
?>