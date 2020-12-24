<!DOCTYPE html>
<html>
<head>
	<title>Formulário - Validação</title>
	<meta charset="utf-8">
	<style type="text/css">
		label{
			display: block;
			

		}
	</style>
</head>
<body>
	<form action="valida.php" method="POST">
		<label for="nome">Nome: </label>
		<input type="text" name="nome"><br>
		<label for="idade">Idade: </label>
		<input type="text" name="idade"><br>
		<label for="site">Site: </label>
		<input type="text" name="site"><br>
		<label for="email">E-mail: </label>
		<input type="text" name="email"><br>
		<label for="mensagem">Mensagem: </label>
		<textarea name="mensagem"></textarea><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>