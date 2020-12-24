<?php 
include_once "config.php";
$aviao = $_POST['aviao'];
$sqlAviao = "SELECT lugares FROM aviao WHERE id = $aviao";
$Aviao = mysqli_query($conexao,$sqlAviao);
$result = mysqli_fetch_assoc($Aviao);
$lugares = $result["lugares"];
if ($lugares > 0) {
	$nome = $_POST["nome"];
	$data = new DateTime($_POST["data"]);
	$data_embarque = $data->format("Y-m-d");
	$destino = $_POST["destino"];
	$origem = array(".",",");
	$troca = array("",".");
	$valor = str_replace($origem, $troca, $_POST["valor"]);
	$sql = "INSERT INTO passagem VALUES(0,'$nome','$data_embarque','$destino','$valor',$aviao,0)";
	$sqlInsert = mysqli_query($conexao,$sql);
	$lugares = $lugares - 1;
	$sql2 = "UPDATE aviao SET lugares = $lugares WHERE id = $aviao";
	$sqlUpdate = mysqli_query($conexao,$sql2);
	?>
	<script>
		alert("Passagem cadastrada com sucesso");
	</script>
	<?php
} else {
	?>
	<script>
		alert("passagem esgotada");
	</script>
<?php
}
?>
<meta http-equiv="refresh" content="0;url=passagem.php">
