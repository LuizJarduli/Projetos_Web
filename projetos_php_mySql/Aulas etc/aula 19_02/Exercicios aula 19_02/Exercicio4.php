<?php
echo "<meta charset=utf-8>";
$valorA = 15;
$valorB = 5;
$valorC = 10;
$valorD = 5;
$Soma = $valorA+$valorC;
$Produto = $valorB*$valorD;

if ($Soma>$Produto) {
	echo "A+C é maior que B+D";
}
else if ($Soma<$Produto) {
	echo "A+C é menor que B+D";
}
else
	echo "A+C é igual a B+D";