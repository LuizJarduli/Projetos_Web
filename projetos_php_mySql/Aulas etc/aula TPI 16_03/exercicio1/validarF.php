<meta charset="utf-8">
<?php 
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$senha = $_POST["senha"];

echo "<hr><center>Pessoa Física<br<br>";
echo "<center>Nome: ".$nome;
echo "<br>";
echo "<center>Telefone: ".$telefone;
echo "<br>";
echo "<center>CPF: ".$cpf;
echo "<br>";
echo "<center>Cidade: ".$cidade;
echo "<br>";
echo "<center>Estado: ".$estado;
echo "<br>";
echo "<center>Senha: ".$senha;
echo "<br><hr>";
?>