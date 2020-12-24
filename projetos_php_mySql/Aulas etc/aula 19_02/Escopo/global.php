<?php 
$var = 0;
function somar(){
	GLOBAL $var; // variável Global (poderá ser acessada de qualquer parte de seu sistema)
	$var++;
	return $var;
}
echo somar()."<br/>";
echo somar()."<br/>";
echo somar()."<br/>";
?>