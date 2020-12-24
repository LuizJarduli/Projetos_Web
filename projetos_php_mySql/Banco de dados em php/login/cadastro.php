<!DOCTYPE html>
<html>
<head>
	<title>cadastro de Usuários</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body class="text-center">
	<form class="form-signin" action="cadastrar.php" method="POST">
		<h1 class="h3 mb-3 font-weigth-normal">Cadastro de Usuários</h1>
		<label for="nome" class="sr-only">Nome: </label>
		<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required autofocus>
		<label for="email" class="sr-only">E-Mail: </label>
		<input type="email" name="email" id="email" class="form-control" placeholder="E-Mail" required>
		<label for="senha" class="sr-only">Senha: </label>
		<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
		<button class="btn btn-lg btn-info btn-block" type="reset">Limpar Dados</button>
		<button class="btn btn-lg btn-success btn-block" type="button" onclick="window.location.href='index.php'">Voltar</button>
	</form>
</body>
</html>