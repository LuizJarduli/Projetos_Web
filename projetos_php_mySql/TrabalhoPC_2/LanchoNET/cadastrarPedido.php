<?php 
include_once "config.php"; // incluindo pagina pph com a conexão com o banco de dados
if (!isset($_GET['id'])) { // // verificando a negação de algum valor dentro da superglobal session
		header("Location: index.php"); // caso seja verdade a sentença, o usuário será redirecionado para a tela de inicio
	}
 // recuperando o id passado por GET e os demais valores passados pelo POST
$idprato = $_GET['id'];
$nome = $_POST['nome'];
$idbebida = $_POST['bebida'];
 // comando sql  da tabela bebida
$sqlbebida = "SELECT * FROM bebidas WHERE id_bebida=$idbebida";
// executando o comando sql da tabela bebida
$sqlSelectBebida = mysqli_query($conexao,$sqlbebida);
// comando sql da tabela prato
$sqlprato = "SELECT * FROM prato WHERE id_prato=$idprato";
// executando o comando sql da tabeal prato
$sqlSelectPrato = mysqli_query($conexao,$sqlprato);
// recuperando o resultado das consultas com o fetch_assoc
$listab = mysqli_fetch_assoc($sqlSelectBebida);
$listap = mysqli_fetch_assoc($sqlSelectPrato);
$total = $listap['preco'] + $listab['preco']; // somando os campos de preço das duas tabelas para achar uma valor total

// comando Insert
$sqlInsert = "INSERT INTO pedidos VALUES(0,'$nome',$idprato,$idbebida,$total,0)";
// Executando o comando insert
$sqlExecutaInsert = mysqli_query($conexao,$sqlInsert);
?>
<script>
	alert('Pedido Cadastrado com sucesso');
</script>
<meta http-equiv="refresh" content="0;url=cadpedido.php">