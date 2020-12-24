<?php 
session_start(); // iniciando uma sessão
if (!isset($_SESSION["usuario"]) && !isset($_SESSION["senha"])) { // verificando a negação de algum valor dentro da super global sessiom
	header("Location: login.php");// caso sim, o usuário será redirecionado para a página de login
}
?>
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
<body style="background-color: #343a40">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: #D7443F !important;">
		<div class="slide navbar-default" id="navbarAltMarkup">
			<div class="navbar-nav">
				<a href="sair.php" class="btn btn-dark" style="position: absolute;right: 0;margin-right: 15px;">Sair <i class="fas fa-sign-out-alt"></i></a>
				<a href="index.php" class="nav-item nav-link" style="color: #fff;">Comer <i class="fas fa-utensils"></i></a>
				<a href="admin.php" class="nav-item nav-link" style="color: #fff">Admin <i class="fas fa-user"></i></a>
				<a href="fornecedor.php" class="nav-item nav-link active" style="font-style: italic;font-weight: bolder;color: #fff">Fornecedores <i class="fas fa-truck"></i></a>
				<a href="cadastro.php" class="nav-item nav-link" style="color: #fff">Cadastro <i class="fas fa-truck-loading"></i></a>
				<a href="consulta.php" class="nav-item nav-link" style="color: #fff">Consulta <i class="fas fa-search"></i></a>
			</div>
		</div>
	</nav>
	<?php 
	include_once "config.php"; // incluindo a página com a conexão com o banco de dados
	$sql = "SELECT * FROM fornecedor"; // comando select
	$sqlSelect = mysqli_query($conexao,$sql); // executando o comando sql
	?>
	<div class="container-fluid" style="min-height: 679px;width: 100%">
		<div class="row">
			<div class="col-md-6" style="border-right-width: 1px;border-right-style: solid; border-right-color: #666;background: linear-gradient(to top, #333A42, #485058, #A6A5A1, #F1ECE9, #D7443F);">
				<div class="container-fluid text-center" style="margin-top: 30px ">
					<h1 class="h3 mb-3 font-weight-bold" style="color: #fff;text-shadow: 2px 2px 0 #000;"><i class="fas fa-truck" style="font-size: 60px"></i><br/>Fornecedores</h1>
					<?php 
						$loop = 2; // atribuindo 2 a variavel loop
						$i = 1; // atribuindo 1 a variavel i 
						while ($lista = mysqli_fetch_assoc($sqlSelect)) { // criando um loop para exibir os resultados da consulta com a função fetch_assoc
							if ($i < $loop) { // caso a variavel i seja menor que loop, o escopo abaixo será executado
						?>
						<div class="card" style="width: 18rem;background: #1b1d20;border-color: #fff;color: #fff; margin-right: auto; margin-left: auto;display: inline-block;" align="middle">
							<img class="card-img-top" src="<?php echo $lista['logo']; ?>" style="width: 286px;height: 180px;" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title"><?php echo $lista['nome']; ?></h5>
								<p class="card-text"><?php echo mask($lista['cnpj'],'##.###.###/####-##'); ?></p>
							</div>
						</div>
						<?php 
						 } else if ($i == $loop) { // senão se for igual a loop, será executado este escopo
						?>
						<div class="card" style="width: 18rem;background: #1b1d20;border-color: #fff;color: #fff;margin-right: auto; margin-left: auto;display: inline-block;" align="middle">
							<img class="card-img-top" src="<?php echo $lista['logo']; ?>" style="width: 286px;height: 180px;" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title"><?php echo $lista['nome']; ?></h5>
								<p class="card-text"><?php echo mask($lista['cnpj'],'##.###.###/####-##'); ?></p> 
							</div>
						</div><br/>
						<?php
							 $i = 0;// zerando i
							 }
							 $i++;// incrementando i
						}
						?>
				</div>
			</div>
			<div class="col-md-6 text-center" style="background: linear-gradient(to top, #333A42, #485058, #A6A5A1, #F1ECE9, #D7443F);">
				<form action="cadfornecedor.php" method="POST"  enctype="multipart/form-data" class="form-control" style="width: 350px;margin: 0px auto;background: rgba(0,0,0,0.4);border: none;margin-top: 135px">
						<h1 class="h3 mb-3 font-weight-bold" style="color: #fff;text-shadow: 2px 2px 0 #000;"><i class="fas fa-handshake" style="font-size: 52px;"></i><br/>Cadastro de Fornecedor</h1>
						<label for="nome" class="sr-only">Nome: </label>
						<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required autofocus style="margin-bottom: 5px">
						<label for="cnpj" class="sr-only">CNPJ: </label>
						<input type="number" class="form-control" name="cnpj" id="cnpj" placeholder="CNPJ" required style="margin-bottom: 5px">
						<label for="logo" class="sr-only">Logotipo: </label>
						<input type="file" class="form-control" name="logo" id="logo" placeholder="Logotipo" required
						style="margin-bottom: 5px">
						<button type="submit" class="btn btn-outline-light" style="margin-right: 110px">Cadastrar <i class="fas fa-check-circle"></i></button>
						<button type="reset" class="btn btn-outline-light">Limpar <i class="fas fa-eraser"></i></button>
					</form>
					<img src="img/logotipo.png" alt="Logo" width="100%" height="100%" style="width: 270px;height: 151px;">
			</div>
		</div>
	</div>
	<div class="blockquote-footer text-center" style="background-color: #343a40">
		<p style="color: #fff">Copyright© - Desenvolvido por Luiz Miguel - 2º Informática</p>
	</div>
</body>
</html>