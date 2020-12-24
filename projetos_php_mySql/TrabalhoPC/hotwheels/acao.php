<?php 
include_once "conexao.php";

if (isset($_GET['acao'])) {
	$acao = $_GET['acao'];
	if ($acao == 'excluir') {
	$id = $_GET['idpedido'];

	$sqldelete = "DELETE FROM pedido WHERE idpedido = :pidpedido";
	$comandoDelete = $con->prepare($sqldelete);
	$comandoDelete->bindParam(":pidpedido",$id);
	if ($comandoDelete->execute()) {
	?>
	<script>
		alert("Registro excluido com sucesso");
	</script>
	<?php
	} else {
?>
	<script>
		alert("Erro ao efetuar exclusão");
	</script>
	<?php	}
} else if ($acao == 'alterar') {
	$id = $_GET['idpedido'];
	$idcarrinho = $_POST['carrinho'];
	$sqlpreco = "SELECT * FROM carrinho WHERE idcarrinho = :pidcarrinho";
	$comandoSelect1 = $con->prepare($sqlpreco);
	$comandoSelect1->bindParam(':pidcarrinho',$idcarrinho);
	$comandoSelect1->execute();
	$result = $comandoSelect1->fetch();
	$preconovo = $result['preco'];
	$nome = $_POST['nome'];
	$sqlUpdate = "UPDATE pedido SET comprador=:pnome, idcarrinho=:cidcarrinho, valor=:pvalor WHERE idpedido=:cidpedido";
	$comandoUpdate = $con->prepare($sqlUpdate);
	$comandoUpdate->bindParam(':pnome', $nome);
	$comandoUpdate->bindParam(':cidcarrinho', $idcarrinho);
	$comandoUpdate->bindParam(':pvalor', $preconovo);
	$comandoUpdate->bindParam(':cidpedido', $id);

	if ($comandoUpdate->execute()) {
	?>
	<script>
		alert("Registro alterado com sucesso");
	</script>
	<?php
	} else {
?>
	<script>
		alert("Erro ao efetuar alteração");
	</script>
	<?php	}
}
}
if (isset($_GET['acaoC'])) {
	$acaoC = $_GET['acaoC'];


if ($acaoC == 'excluir') {
	$id = $_GET['idcarrinho'];

	$sqldelete2 = "DELETE FROM carrinho WHERE idcarrinho = :didcarrinho";
	$comandoDelete2 = $con->prepare($sqldelete2);
	$comandoDelete2->bindParam(":didcarrinho",$id);
	if ($comandoDelete2->execute()) {
	?>
	<script>
		alert("Registro excluido com sucesso");
	</script>
	<?php
	} else {
?>
	<script>
		alert("Erro ao efetuar exclusão");
	</script>
	<?php	}
}
}
 ?>
 <meta http-equiv="refresh" content="0;url=pedidos.php">