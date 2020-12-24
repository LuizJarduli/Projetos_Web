<?php 
include_once "config.php";

$nome = $_POST["nome"];
$placa = $_POST["placa"];
$valor = $_POST["valor"];

$sql = "INSERT INTO veiculos(nome,placa,val_diaria,status) VALUES('$nome','$placa','$valor',1)";
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
	alert("Veículo cadastrado com sucesso");
</script>
<meta http-equiv="refresh" content="0;url=cadastracar.php">