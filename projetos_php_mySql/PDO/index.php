<!DOCTYPE html>
<html>
<head>
	<title>PDO - CRUD</title>
</head>
<body>
<fieldset>
	<legend>Formulário</legend>
	<form action="cadastrar.php" method="POST">
		<input type="text" name="nome" required placeholder="Nome"><br>
		<input type="text" name="email" required placeholder="E-mail"><br>
		<input type="number" name="telefone" required placeholder="Telefone"><br>
		<input type="text" name="cidade" required placeholder="Cidade"><br>
		<button type="submit">Enviar</button>
	</form>
</fieldset>
</body>
</html>