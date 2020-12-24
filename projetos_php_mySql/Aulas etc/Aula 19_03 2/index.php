<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<style type="text/css">
	input{
		border: 50px solid #069;
		border-radius: 10px;
	}
	fieldset{
		border: 50px solid #069;
		border-radius: 10px;
	}
</style>
<form action="entrar.php" method="POST">
	<fieldset>
		<legend>Recupera</legend>
		<label>Usuário: </label>
		<input type="text" name="usuario">
		<br/><br/>
		<label>Senha: </label>
		<input type="password" name="senha">
		<br/><br/>
		<input type="submit" value="Enviar">
	</fieldset>
</form>
</body>
</html>