<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="validar.php" method="POST">
		<fieldset>
			<legend>Cadastro de cliente</legend>
			<input type="radio" name="dadocliente" value="fisica" required>Pessoa Física &nbsp;&nbsp;
			<input type="radio" name="dadocliente" value="juridica" required>Pessoa Jurídica
			<br><br>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>
</body>
</html>