<?php 
header('Access-Control-Allow-Origin:*');
include 'config.php';
$nome = $_POST['nome'];
$sql = "INSERT INTO nomes VALUES(0,'$nome')";
$sqlInsert = mysqli_query($conexao,$sql);
echo "<h1>Dados Inseridos com sucesso</h1>";
?>