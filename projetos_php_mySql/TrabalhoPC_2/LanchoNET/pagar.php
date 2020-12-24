<?php
if (!isset($_GET['id'])) { // caso GET[id] nao tenha nehnhum valor
	//caso sim, o usuário será redirecionado para a pagina de pedido
	header('Location: pedido.php');
}
include_once "config.php"; // incluindo a pagina om a conexao com o banco de dados
$id = $_GET["id"]; // recuperando o id passado via url pelo GET

// comando update
$sql = "UPDATE pedidos SET pago = 1 WHERE id_pedido = $id";
// executando o comando update
mysqli_query($conexao,$sql);
?>
<meta http-equiv="refresh" content="0;url=pedido.php ">