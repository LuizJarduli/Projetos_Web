<!DOCTYPE html>
<html>
<head>
	<title>Cálculo da área</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="calcular.php" method="POST">
		<fieldset><!--Vai enquadrar seu formulário-->
			<legend>Cálculo de Área</legend>
			<label>Digite o lado: </label>
			<input type="number" name="lado" required><br><br>
			<label>Escolha a figura</label>
			<input type="radio" name="figura" value="quad" required>Quadrado &nbsp;&nbsp;
			<input type="radio" name="figura" value="tri" required>Triângulo 
			<br><br>
			<input type="submit" value="Calcular">
		</fieldset>
	</form>

</body>
</html>