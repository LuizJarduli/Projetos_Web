<?php
echo "<meta charset=utf-8>";
$altura = 1.70;
$sexo = "F";

if ($sexo=="M") {
	$pesoIdeal = (72.7 * $altura) - 58;
	echo "Seu peso ideal é de : ".$pesoIdeal;
}
else if($sexo=="F"){
	$pesoIdeal = (62.1 * $altura) - 44.7;
	echo "Seu peso ideal é de: ".$pesoIdeal;
}
?>