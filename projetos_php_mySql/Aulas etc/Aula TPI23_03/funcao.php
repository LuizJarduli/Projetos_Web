<?php 
function termoProgressaoG($n,$a1,$q){
	$an = $a1 * pow($q, $n-1);
	return $an;
}
function somaProgressaoG($n,$a1,$q){
	$sn = $a1 * ((pow($q, $n))-1) / ($q - 1);
	return $sn;
}
?>