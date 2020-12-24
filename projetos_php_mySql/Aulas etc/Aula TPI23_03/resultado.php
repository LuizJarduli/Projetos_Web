<meta charset="utf-8">
<?php 
include ('funcao.php');

$n = $_POST["n"];
$a1 = $_POST["a1"];
$q = $_POST["q"];
if (isset($_POST["ns"])) {

	$ns = $_POST["ns"];
	echo "<hr><center>A Soma dos termos requeridos é: ".somaProgressaoG($ns,$a1,$q);
	echo "<br><br>";
	echo "<center>O N-ésimo termo da progressão geométrica é: ".termoProgressaoG($n,$a1,$q);
	echo "<br><br>";

} else {

	echo "<hr><center>O N-ésimo termo da progressão geométrica é: ".termoProgressaoG($n,$a1,$q);
	echo "<br><br>";
}
 
?>
<input type="button" value="Voltar" onclick="window.history.back();" align="center">