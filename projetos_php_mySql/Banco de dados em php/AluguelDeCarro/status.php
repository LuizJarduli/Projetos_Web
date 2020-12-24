<?php 
include_once "config.php";

$id = $_GET["id"];
$sql = "UPDATE veiculos SET status = 1 WHERE id = $id";
$sqlUpdate = mysqli_query($conexao,$sql);
header("Location: aluguel.php");
?>