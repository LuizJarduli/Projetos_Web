<?php 
$figura = $_POST["figura"];

if ($figura == "quadrado") {
	header("Location:perimetroQuadrado.php");
}
else if ($figura == "retangulo") {
	header("Location:perimetroRetangulo.php");
}
else if ($figura == "trapezio") {
	header("Location:perimetroTrapezio.php");
}
else {
	header("Location:perimetroParalelogramo.php");
}
 

?>