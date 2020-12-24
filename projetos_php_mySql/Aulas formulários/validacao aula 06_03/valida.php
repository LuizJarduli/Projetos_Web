<meta charset="utf-8">
<?php 
$erro = false; //variável que verificara campos com erro de validação
if (!isset($_POST) || empty($_POST)) { // ! = exclamação indica negação, empty asseugra que não haverá valores nulos(null).
	
	$erro = "Campos vazios";
}
foreach ($_POST as $chave => $valor) {
	
	//$$chave = modo dinâmico de criação de variáveis, conceito de variável para variável.
	$$chave =trim(strip_tags($valor));//strip_tags = ele retira qualquer tag do html no formulário, trim remove todos os espaços vazios dos campos do formulário.
	if (empty($valor)) {
		
		$erro = "Existem campos em branco<br>";
	}
}

if ((!isset($idade) || !is_numeric($idade) && !$erro)) {// is_numeric = verifica se a variável é numérica ou não.
	
	$erro = "A idade deve ser uma valor numérico<br>";
}

if ((!isset($site) || !filter_var($site,FILTER_VALIDATE_URL) && !$erro)) { //filter_var = usado para pegar variáveis e inseri-las em filtros de validação,FILTER_VALIDATE_URL = deverá ser indicado um site válido com endereço completo -http://site.com-
	
	$erro = "Envie um site válido<br>";
}

if ((!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) && !$erro)) {// FILTER_VALIDATE_EMAIL = deverá ser indicado um email válido com nome@domínio
	
	$erro = "Envie um e-mail válido<br>";
}

if ($erro) {
	
	echo $erro;
}
else{

	echo "<h1> Dados enviados</h1>";
	foreach ($_POST as $chave => $valor) {
		
		echo "<b>".$chave.":</b> ".$valor."<br><br>";
	}
}

?>
<input type="button" value="Voltar" onclick="window.history.back()">