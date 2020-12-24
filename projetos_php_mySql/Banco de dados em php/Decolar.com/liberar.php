<?php 
include_once "config.php";
$id = $_GET['id'];

$sql = "UPDATE aviao SET lugares = lugares_disponiveis WHERE id = $id";
$sqlUpdate = mysqli_query($conexao,$sql);

?>
<meta http-equiv="refresh" content="0;url=aviao.php">