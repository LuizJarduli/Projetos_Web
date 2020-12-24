<?php 
include_once "conexao.php";

$idcarrinho = $_GET['idcarrinho'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "INSERT INTO pedido VALUES(0, :nome, now(), :idcarro, :preco, 0)";

$comando = $con->prepare($sql);
$comando->bindParam(":nome", $nome);
$comando->bindParam(":idcarro", $idcarrinho);
$comando->bindParam(":preco", $preco);

if ($comando->execute()) {
	?>
		<script>
			alert("Cadastro efetuado com sucesso");
		</script>
	<?php
	} else {
		?>
		<script>
			alert("Erro ao cadastrar");
		</script>
	<?php
	}
 ?>
 <meta http-equiv="refresh" content="0;url=index.php">
