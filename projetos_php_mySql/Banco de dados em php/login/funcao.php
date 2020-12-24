<?php 
include_once "config.php";
if(isset($_GET['acao']) && $_GET['acao'] == "editar") {
	$id = $_GET['id'];
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	$sql = "UPDATE usuarios SET email='$email', nome='$nome', senha='$senha' WHERE id=$id";  
	$sqlupdate = mysqli_query($conexao,$sql);
	header("Location: admin.php");
}
if(isset($_GET['acao']) && $_GET['acao'] == "excluir") {
	$id = $_GET['id'];
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	$sql = "DELETE FROM usuarios WHERE id=$id";  
	$sqlDelete = mysqli_query($conexao,$sql);
	header("Location: admin.php");
}
?>