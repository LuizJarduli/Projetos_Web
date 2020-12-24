<meta charset="utf-8">
<?php 
$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$publico = $_POST["publico"];
$preco = $_POST["preco"];

echo "<center>Nome do Produto: ".$nome;
echo "<center>Tipo do produto: ".$tipo;
echo "<center>Publico alvo: ".$publico;
echo "<center>Preço do Produto: ".$preco."<br><br>";
?>
<input type="button" value="Voltar" align="center" onclick="window.history.back();">