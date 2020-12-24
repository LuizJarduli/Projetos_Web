<?php 
include_once "conexao.php";

$sql = "SELECT * FROM carrinho";
$comando = $con->prepare($sql);
$comando->execute();

while ($result = $comando->fetch()) {
?>
	<tr>
		<td><?php echo $result['idcarrinho']; ?></td>
		<td><?php echo $result['nome']; ?></td>
		<td><?php echo $result['preco']; ?></td>
		<td><?php echo $result['qtdcarrinho']; ?></td>
		<td><a href="alterarcarrinho.php?id=<?php echo $result['idcarrinho'];?>" class="btn btn-outline-dark">Alterar <i class="fas fa-pen-square"></i></a></td>
		<td><a href="acao.php?idcarrinho=<?php echo $result['idcarrinho'];?>&acaoC=excluir" class="btn btn-outline-danger">Excluir <i class="fas fa-trash"></i></a></td>
	</tr>
	
<?php
}
 ?>