<?php // variável superglobal são variáveis pré-definidas pelo PHP, vão ser iguais em qualquer lugar que for chamada

foreach ($_SERVER as $var => $value) {// características de superglobais: todas as variáveis super globais são vetores e começam com underline e seus nomes são em maiúsculo
	echo "$var => $value <br>";
}
?>