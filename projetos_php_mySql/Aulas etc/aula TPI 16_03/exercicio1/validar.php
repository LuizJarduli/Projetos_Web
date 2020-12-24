<?php 
$cliente = $_POST["dadocliente"];

if ($cliente == "fisica") {
	header("Location: pessoafisica.php");
}
else{
	header("Location: pessoajuridica.php");
}

?>