<?php
if (!isset($_POST["progressao"])) {
 
echo '<!DOCTYPE html>
<html>
<head>
	<title>Exercício 3</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="POST">
		<fieldset>
			<legend>Escolha qual Progressão você quer calcular</legend>
			<input type="radio" name="progressao" value="aritmetica">Progressão aritmética &nbsp;&nbsp;
			<input type="radio" name="progressao" value="geométrica">Progressão geométrica
			<input type="submit" value="Próximo">
		</fieldset>
	</form>
</body>
</html>';
}
else{
	if ($_POST["progressao"] == "aritmetica") {
		echo '<!DOCTYPE html>
<html>
<head>
	<title>Exercício 3</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="exibirresultado.php" method="POST">
		<fieldset>
			<legend>Digite os valores abaixo</legend>
			<label>Digite os valores necessários abaixo para encontrar o N-ésimo termo de uma progressão aritmética: </label><br><br>
			<input type="number" name="termo" placeholder="Termo a encontrar.." required><br><br>
			<input type="number" name="razao" placeholder ="Razão da progressão.." required><br><br>
			<input type="number" name="indice1" placeholder ="1º Índice da Progressão.." required><br><br>
			<label>(Bônus)Digite os valores necessários abaixo para Somar N termos de uma Progressão aritmética: </label><br><br>
			<input type="number" name="n" placeholder="Nº de termos a somar.." required><br><br>
			<input type="submit" value="Próximo">
			<input type="button" value="Voltar" onclick="window.history.back()"> 
		</fieldset>
	</form>
</body>
</html>';
	}
	else{
		echo '<!DOCTYPE html>
<html>
<head>
	<title>Exercício 3</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="exibirresultadoPG.php" method="POST">
		<fieldset>
			<legend>Digite os valores abaixo</legend>
			<label>Digite os valores necessários abaixo para encontrar o N-ésimo termo de uma progressão geométrica: </label><br><br>
			<input type="number" name="termo" placeholder="Termo a encontrar.." required><br><br>
			<input type="number" name="razao" placeholder ="Razão da progressão.." required><br><br>
			<input type="number" name="indice1" placeholder ="1º Índice da Progressão.." required><br><br>
			<label>(Bônus)Digite os valores necessários abaixo para Somar N termos de uma Progressão geométrica: </label><br><br>
			<input type="number" name="n" placeholder="Nº de termos a somar.." required><br><br>
			<input type="submit" value="Próximo">
			<input type="button" value="Voltar" onclick="window.history.back()"> 
		</fieldset>
	</form>
</body>
</html>';
	}
}
?>