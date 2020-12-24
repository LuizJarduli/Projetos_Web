<meta charset="utf-8">
<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$dataN = $_POST["dataN"];
$bandeira =$_POST["bandeira"];

echo "<hr><center>Nome: ".$nome;
echo "<hr><center>E-mail: ".$email;
echo "<hr><center>Data de nascimento: ".$dataN;
echo "<hr><center>Bandeira do cartão de crédito: ".$bandeira."<hr>";
?>