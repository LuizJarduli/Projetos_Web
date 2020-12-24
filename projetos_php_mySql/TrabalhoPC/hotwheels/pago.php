<?php
include_once "conexao.php"; 
$idpedido = $_GET["idpedido"];

$sql = "UPDATE pedido SET pago = 1 WHERE idpedido = $idpedido";
$comando = $con->prepare($sql);
if ($comando->execute()) {
?>
<script>
	alert("Pagamento concluído");
</script>
<?php
} else {
?>
<script>
	alert("Erro ao efetuar pagamento");
</script>
<?php
}
?>
<meta http-equiv="refresh" content="0;url=pedidos.php ">