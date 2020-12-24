<!DOCTYPE html>
<html>
<head>
	<title>Login de Usuários</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body class="text-center">
	<form class="form-signin" action="logar.php" method="POST">
		<h1 class="h3 mb-3 font-weigth-normal">Login de Usuários</h1>
		<label for="email" class="sr-only">E-Mail: </label>
		<input type="email" name="email" id="email" class="form-control" placeholder="E-Mail" required>
		<label for="senha" class="sr-only">Senha: </label>
		<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
		<button class="btn btn-lg btn-info btn-block" type="reset">Limpar Dados</button>
		<span class="mt-5 mb-3 text-muted">Não tem conta? <a href="cadastro.php">Inscreva-se</a></span>
	</form>

</body>
</html>