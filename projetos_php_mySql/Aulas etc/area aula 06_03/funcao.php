<?php 
function area($l,$op){
	if ($op == "quad") {
		
		$area = pow($l, 2);//pow = função para calcular exponenciação
	}
	else{
		$area = (pow($l, 2)*sqrt(3))/4;//sqrt = calcula raiz quadrada
	}
	return $area;
}
?>