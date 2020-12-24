<?php 
 //o header abaixo permite o acesso a este script por aplicações externas, caso de algum erro no browser substituir o * por {$_SERVER['HTTP_ORIGIN']}
 header("Access-Control-Allow-Origin: *");

 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
 $op = $_POST['op'];
 if ($op == 'soma') {
 	$resultado = $num1 + $num2;
 } else if ($op == 'sub') {
 	$resultado = $num1 - $num2;
 } else if ($op == 'div') {
 	if ($num2 == 0) {
 		$resultado = "Não é possível dividir por zero";
 	}
 	else {
 		$resultado = $num1 / $num2;
 	}
 } else if ($op == 'multi') {
 	$resultado = $num1 * $num2;
 }

 echo $resultado;
 ?>