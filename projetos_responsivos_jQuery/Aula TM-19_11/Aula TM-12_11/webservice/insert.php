<?php 
header("Access-Control-Allow-Origin: *");
include_once 'config.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO agenda VALUES(0,'$nome','$email','$telefone')";
$sqlInsert = mysqli_query($con,$sql);

if (mysqli_affected_rows($con) != -1) {
	$retorno = "Dados inseridos com sucesso!";
} else {
	$retorno = "Erro ao inserir dados!";
}

echo $retorno;
?>