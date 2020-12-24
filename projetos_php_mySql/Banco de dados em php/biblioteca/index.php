<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Livros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body class="text-center" style="background: url(Penguins.jpg) no-repeat center">
	<form class="form-signin" action="cadastro.php" method="POST">
		<h1 class="h3 mb-3 font-weigth-normal" style="color: #fff;">Cadastro de livros</h1>
		<label for="nome" class="sr-only">Nome: </label>
		<input type="text" name="nome" id="Nome" class="form-control" placeholder="Nome" required>
		<label for="autor" class="sr-only">Autor: </label>
		<input type="text" name="autor" id="autor" class="form-control" placeholder="Autor" required>
		<label for="genero" class="sr-only">Gênero: </label>
		<input type="text" name="genero" id="genero" class="form-control" placeholder="Gênero" required>
		<br>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
		<button class="btn btn-lg btn-orange btn-block" type="reset">Limpar Dados</button>
		<span class="mt-5 mb-3 text-muted">Consultar lista de livros? <a href="listar.php">Clique aqui</a></span>
	</form>
</body>
</html>