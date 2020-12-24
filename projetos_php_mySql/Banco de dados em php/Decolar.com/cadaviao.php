<?php 
include_once "config.php";

$nome = $_POST['nome'];
$lugares = $_POST['lugar'];

$sql = "INSERT INTO aviao VALUES(0,'$nome','$lugares')";
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script>
	alert("Avião cadastrado com sucesso!")
</script>
<meta http-equiv="refresh" content="0;url=aviao.php">