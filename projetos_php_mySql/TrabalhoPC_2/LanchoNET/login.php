<!DOCTYPE html>
<html>
<head>
	<title>LanchoNET</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body style="background: linear-gradient(to bottom,#cad2d9, #f7f7f7, #fefefa, #fcfcfa, #f9f2e6)">
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to right, #013c8c, #034d8f, #014873, #0BBDAE, #F06005) !important;border-radius: 7px;">
		<div class="slide navbar-default" id="navbarAltMarkup">
			<div class="navbar-nav">
				<a href="index.php" class="nav-item nav-link"><img src="img/background.png" width="100%" height="100%" style="height: 25px;width: 35px;position: absolute;right: 0;margin-right: 15px;">
				<a href="index.php" class="nav-item nav-link" style="color: #fff;">Comer <i class="fas fa-utensils" style="color: "></i></a>
				<a href="pedido.php" class="nav-item nav-link" style="color: #fff">Pedidos <i class="fas fa-thumbs-up"></i></a>
				<a href="login.php" class="nav-item nav-link active" style="font-style: italic;font-weight: bolder;color: #fff">Admin <i class="fas fa-user"></i></a>
			</div>
		</div>
	</nav>
	<div class="container-fluid" style="min-height: 679px;width: 100%">
	<div class="jumbotron jumbotron-fluid text-center" style="background: url(img/background-empresarial.png) fixed no-repeat center;height: auto;margin: 2.5px; ">
		<img src="img/logotipo.png" alt="LanchonetLogo" width="100%" height="100%" style="width: 500px;height: 281px;">
		<form action="loginAdmin.php" method="POST" class="text-center" style="width: 300px;margin: 0px auto">
			<i class="fas fa-user" style="font-size: 30px;margin: 5px"></i>
			<label for="username" class="sr-only">Usuário</label>
			<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Administrador.." required>
			<label for="senha" class="sr-only">Senha</label>
			<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha.." required>
			<button type="submit" class="btn btn-info btn-block" style="margin-top:10px">Entrar <i class="fas fa-sign-in-alt"></i></button>
		</form>
	</div>
	</div>
	<div class="blockquote-footer text-center">
		<p>Copyright© - Desenvolvido por Luiz Miguel - 2º Informática</p>
	</div>
</body>