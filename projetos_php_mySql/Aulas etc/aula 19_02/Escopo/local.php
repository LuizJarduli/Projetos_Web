<?php 
$var = 10;// variável local do script
function somar(){
	$var = 5; // chama -se variável local (so funcionará dentro de um local específico (bloco de código))
	echo "valor de dentro: ".$var;
}
somar();
echo "<br/>"; // chama -se o HTML via echo "tag a ser utilizada"
echo "valor de fora: ".$var;
echo "<br/>";
$var2 = 7; // variável local do script
function multiplica($var2){// - - chama -se variável de parâmetro(representao valor de entrada da função)
	$var2 = $var2 * 10;
	return $var2;
}
echo  $var2." x 10 = ".multiplica($var2);
?>

