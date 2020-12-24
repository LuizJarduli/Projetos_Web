<?php 
echo "<meta charset=utf-8>";
$nota1 = 7;
$nota2 = 7;
$nota3 = 7;
$nota4 = 7;
$Media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if($Media >= 7){
	echo "Aprovado, Média aritmética: ".$Media;
}
else
	echo "Reprovado, Média aritmética: ".$Media;
?>
