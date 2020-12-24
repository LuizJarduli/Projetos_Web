<!DOCTYPE html>
<html>
<head>
	<title>Exercício TPI 23_03</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="resultado.php" method="POST">
		<label>Preencha os campos abaixo com os valores necessários para encontrar o N-ésimo termo de uma progressão geométrica </label><br><br>
		<input type="number" name="n" placeholder="Termo a ser encontrado.." required><br><br>
		<input type="number" name="a1" placeholder="1º Termo da progressão.." required><br><br>
		<input type="number" name="q" placeholder="Razão da Progressão.." required><br><br>
		<label>Caso também queira calcular a soma dos N primeiros termos, informe abaixo o número de valores a serem somados abaixo: </label><br><br>
		<input type="number" name="ns" placeholder="Nº de Termos a somar.."><br><br>
		<input type="submit" value="Calcular">	
	</form>
	
</body>
</html>