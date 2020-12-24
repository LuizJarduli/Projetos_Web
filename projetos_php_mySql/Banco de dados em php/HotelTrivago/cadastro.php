<!DOCTYPE html>
<html>
<head>
	<title>Trivago</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<style type="text/css">
	a:hover{
		color: #8C72D3 !important;
	}
	.btn:hover{
		
	}
	.card:hover{
		border-color: #fff;
	}
</style>
<body style="background-color: #1B1D20; ">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a href="index.php" class="nav-item nav-link " >Home </a>
			<a href="cadastro.php" class="nav-item nav-link active" style="color: #8C72D3">Cadastro <span class="sr-only">(current)</span></a>
			<a href="reserva.php" class="nav-item nav-link">Reserva</a>
		</div>
	</div>
</nav>
<div class="jumbotron jumbotron-fluid" style="background: #1B1D20;height: auto;width: 400px; margin: 0px auto;padding: 40px;">
	<form action="cadastrar.php" method="POST" enctype="multipart/form-data">
		<legend style="color: #FFF;">Cadastro de quartos</legend>
		<label for="nome" style="color: #FFF;">Nome: </label>
		<input type="text" name="nome" id="nome" class="form-control"><br>
		<label for="descricao" style="color: #FFF;">Descrição: </label><br>
		<textarea name="descricao" id="descricao" rows="4" cols="100" style="width: 100%"></textarea><br>
		<label for="diaria" style="color: #FFF;">Valor da Diária (R$): </label>
		<input type="text" name="diaria" id="diaria" class="form-control"><br>
		<label for="foto" style="color: #FFF;">Foto: </label>
		<input type="file" name="foto[]" id="foto" class="form-control" multiple><br>
		<button class="btn btn-outline-light btn-lg btn-block" type="submit" style="color: #8c72d3;border-color: #8c72d3">Cadastrar</button>
		<button class="btn btn-outline-light btn-lg btn-block" type="reset" style="color: #8c72d3;border-color: #8c72d3">Limpar</button>
	</form>
</div>
</body>
</html>