<meta charset="utf-8">
<?php 
include ('funcao.php');

$termos = $_POST["termo"];
$razao = $_POST["razao"];
$indice1 = $_POST["indice1"];
$n = $_POST["n"];

echo "<center>O ".$termos."º termo da progressão é: ".achaTermoPG($termos,$razao,$indice1);
echo "<br>";
echo "<center>A soma dos primeiros ".$n." termos da progressão é: ".somaTermoPG($n,$indice1,$razao);
?>
<br><input type="button" value="Voltar" onclick="window.history.back()" align="center">