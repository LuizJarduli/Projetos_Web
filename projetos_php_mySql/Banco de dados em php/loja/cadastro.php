<!DOCTYPE html>
<html>
<head>
	<title>Loja Virtual</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/fontawesome.css">
	<script src="/js/jquery.js" type="text/javascript"></script>
	<script src="/js/bootstrap.js" type="text/javascript"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background: #353535">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a href="index.php" class="nav-item nav-link">Home <span class="sr-only">(current)</span></a>
				<a href="cadastro.php" class="nav-item nav-link active">Cadastro</a>
			</div>
		</div>
	</nav>
	<div class="jumbotron">
		<form action="cadastrar.php" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>Cadastro de Produtos</legend>
			</fieldset>
			<div class="form-group">
				<label for="marca">Marca: </label>
				<input type="text" name="marca" id="marca" required><br/>
				<label for="modelo">Modelo: </label>
				<input type="text" name="modelo" id="modelo" required><br/>
				<label for="preco">Preço (R$): </label>
				<input type="text" name="preco" id="preco" required><br/>
				<label for="foto">Foto: </label>
				<input type="file" name="foto" id="foto" required><br/><br/>
				<button type="submit" class="btn btn-dark">Cadastrar</button>
				<button type="reset" class="btn btn-light">Limpar</button>
			</div>
		</form>
	</div>
</body>
</html>
