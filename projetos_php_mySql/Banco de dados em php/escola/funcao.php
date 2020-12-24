<?php 
include_once "config.php";
if(isset($_GET['acao']) && $_GET['acao'] == "editar") {
	$matricula = $_GET['matricula'];
	$curso = $_POST['curso'];
	$nome = $_POST['nome'];

	$sql = "UPDATE alunos SET curso='$curso', nome='$nome' WHERE matricula=$matricula";  
	$sqlupdate = mysqli_query($conexao,$sql);
	header("Location: conaluno.php");
}
if(isset($_GET['acao']) && $_GET['acao'] == "excluir") {
	$matricula = $_GET['matricula'];
	$nome = $_POST['nome'];
	$curso = $_POST['curso'];

	$sql = "DELETE FROM alunos WHERE matricula=$matricula";  
	$sqlDelete = mysqli_query($conexao,$sql);
	header("Location: conaluno.php");
}
?>