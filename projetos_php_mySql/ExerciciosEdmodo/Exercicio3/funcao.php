<?php 
function achaTermoPA($termo,$razao,$indice1){
	$achaTermoPA = $indice1 + ($termo - 1) * $razao;
	return $achaTermoPA;
}
function somaTermoPA($n,$indice1,$razao){
	$termo = 0;
	for ($i= 0; $i < $n-1; $i++) { 
		if ($i == 0) {
			$termo = $indice1 + $razao;
		}
		else{
			$termo = $termo + $razao;
		}
	}
	$somaTermoPA = $n * ($indice1 + $termo) / 2;
	return $somaTermoPA;
}
function achaTermoPG($termo,$razao,$indice1){
	$achaTermoPG = $indice1 * pow($razao, $termo - 1);
	return $achaTermoPG;
}
function somaTermoPG($n,$indice1,$razao){
	$somaTermoPG = $indice1 * ((pow($razao, $n) - 1) / ($razao - 1));
	return $somaTermoPG;
}
?>