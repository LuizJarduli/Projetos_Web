<meta charset="utf-8">
<?php 
$conexao = mysqli_connect("localhost","root","","rentacar") or die("Não foi possiível fazer a conexão");
mysqli_query($conexao,"SET NAMES 'utf8'");
mysqli_query($conexao,'SET character_set_connection=utf8');
mysqli_query($conexao,'SET character_set_client=utf8');
mysqli_query($conexao,'SET character_set_results=utf8');
?>