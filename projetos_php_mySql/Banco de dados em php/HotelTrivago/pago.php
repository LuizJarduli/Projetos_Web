<?php
include_once "config.php"; 
$id = $_GET["id"];
$id_aviao = $_GET["aviao"];

$sql = "UPDATE passagem SET pago = 1 WHERE id = $id";
$sqlUpdate = mysqli_query($conexao,$sql);
$sqlaviao = "UPDATE quartos SET status = 1 WHERE id = $id_aviao";
$sqlAtualiza = mysqli_query($conexao,$sqlaviao);
?>
<meta http-equiv="refresh" content="0;url=passagem.php ">