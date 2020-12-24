<?php 
session_start(); // iniciando uma sessão
if (!isset($_SESSION["usuario"]) && !isset($_SESSION["senha"])) { // verificando a negação de algum valor dentro da super global session
	header("Location: login.php"); // caso sim, ousuário será redirecionado para a pagina de login
}
include_once "config.php"; // incluindo a página php com a conexão com o banco de dados
$sql = "DELETE FROM pedidos WHERE pago = 1"; // comando delete
$sqlDelete = mysqli_query($conexao,$sql); // executando o comando delete
?>
<meta http-equiv="refresh" content="0;url=pedido.php">