<meta charset="utf-8">
<?php
$nome = $_POST["nome"];
$nomeI = $_POST["nomeI"];
$telefone = $_POST["telefone"];
$cnpj = $_POST["cnpj"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$senha = $_POST["senha"];

echo "<center>Pessoa Jurídica<hr>";
echo "<center>Nome: ".$nome;
echo "<center>Nome do Estabelecimento/Indústria: ".$nomeI;
echo "<center>Telefone: ".$telefone;
echo "<center>CNPJ: ".$cnpj;
echo "<center>Cidade: ".$cidade;
echo "<center>Estado: ".$estado;
echo "<center>Senha: ".$senha."<br><br>";
?>
<input type="button" value="Voltar" onclick="window.history.back();">