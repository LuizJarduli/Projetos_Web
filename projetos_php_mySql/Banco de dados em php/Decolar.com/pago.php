<?php
include_once "config.php"; 
$id_aviao = $_GET["aviao"];

$sqlAviao = "SELECT lugares FROM aviao WHERE id = $id_aviao";
$sqlAviao2 = mysqli_query($conexao,$sqlAviao);
$aviao = mysqli_fetch_assoc($sqlAviao2);
$lugares = $aviao["lugares"];
$id = $_GET["id"];
$sql = "UPDATE passagem SET pago = 1 WHERE id = $id";
mysqli_query($conexao,$sql);
?>
<meta http-equiv="refresh" content="0;url=passagem.php ">