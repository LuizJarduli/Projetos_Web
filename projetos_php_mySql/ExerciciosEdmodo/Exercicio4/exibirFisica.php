<meta charset="utf-8">
<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$senha = $_POST["senha"];

echo "<center>Pessoa Física<hr>";
echo "<center>Nome: ".$nome;
echo "<center>Telefone: ".$telefone;
echo "<center>CPF: ".$cpf;
echo "<center>Cidade: ".$cidade;
echo "<center>Estado: ".$estado;
echo "<center>Senha: ".$senha."<br><br>";
?>
<input type="button" value="Voltar" onclick="window.history.back();">