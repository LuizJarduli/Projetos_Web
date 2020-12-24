<meta charset="utf-8">
<?php 
//variável super global para pegar variáveis vindas do método POST, ela armazena os dados que estão sendo passados pelo metodo POST
//$_POST
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$senha = $_POST["senha"];

echo "<hr><h3><center>Recuperando dados</h3><hr>";
echo "<center>Nome: ".$nome;
echo "<br>";
echo "<center>Idade: ".$idade;
echo "<br>";
echo "<center>Senha: ".$senha;
echo "<br>";
if (isset($_POST["esporte"])) {
	echo "<center>Esporte: ".$_POST["esporte"];
}
if (isset($_POST["Lazer"])) {
	echo "<center>Lazer: ".$_POST["Lazer"];
}
if (isset($_POST["estadocivil"])) {
	echo "<center>".$_POST["estadocivil"];
	echo "<br>";
}
?>