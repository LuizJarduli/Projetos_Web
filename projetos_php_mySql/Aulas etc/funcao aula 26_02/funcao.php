<?php
echo "<meta charset= utf-8>"; 
function rodape(){
	echo "<hr><center>Organizações Tabajara - Todos os direitos Reservados® - 2018</center><hr>";
}
rodape();
echo "<br>";
function calcular($x,$y){
	$soma = $x + $y;
	return $soma;
}
echo "<center>".calcular(10,5);
function circulo($r,$pi=3.14){
	$area = $pi * $r * $r;
	return $area;
}
echo "<center>".circulo(5);
?>	