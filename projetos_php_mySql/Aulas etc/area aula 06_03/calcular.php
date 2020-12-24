<?php 
include "funcao.php";//inclui um arquivo específica à pagina atual, todo o código da página a ser incluída será  herdado por esse arquivo php
//include_once = inclui apenas uma vez um arquivo  ao código, podendo assim permitir mais includes do mesmo arquivo
//require(require_once tambem é possível) "aquivo" = a principal diferença entre include e o required é que o require devolve um erro mais especificamente, enquanto o include devolve o erro genericamente
$lado = $_POST["lado"];
$figura = $_POST["figura"];

echo area($lado,$figura);
echo "<br><br>";
?>
<input type="button" value="Voltar" onclick="window.history.back()"> 