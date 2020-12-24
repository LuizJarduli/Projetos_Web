<?php
echo "<meta charset=utf-8>"; 
$valorA = 1;
$valorB = 5;

if ($valorA<$valorB) {
	echo $valorA." , ".$valorB;
}
else if ($valorA>$valorB) {
	echo $valorB." , ".$valorA;	
}
else
	echo $valorB." , ".$valorA;