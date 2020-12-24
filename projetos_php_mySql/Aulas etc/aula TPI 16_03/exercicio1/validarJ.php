<meta charset="utf-8">
<?php 
$nome = $_POST["nome"];
$nomei = $_POST["nomeI"];
$telefone = $_POST["telefone"];
$cnpj = $_POST["cnpj"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$senha = $_POST["senha"];

echo "<hr><center>Pessoa jurídica<br<br>";
echo "<center>Nome: ".$nome;
echo "<br>";
echo "<center>Estabelecimento/Indústria: ".$nomei;
echo "<br>";
echo "<center>Telefone: ".$telefone;
echo "<br>";
echo "<center>CNPJ: ".$cnpj;
echo "<br>";
echo "<center>Cidade: ".$cidade;
echo "<br>";
echo "<center>Estado: ".$estado;
echo "<br>";
echo "<center>Senha: ".$senha;
echo "<br><hr>";
?>