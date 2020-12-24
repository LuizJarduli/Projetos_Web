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
<body width="100%" height="100%" >
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to right, #013c8c, #034d8f, #014873, #0BBDAE, #F06005) !important;border-radius: 7px;">
		<div class="slide navbar-default" id="navbarAltMarkup">
			<div class="navbar-nav">
				<a href="index.php" class="nav-item nav-link"><img src="img/background.png" width="100%" height="100%" style="height: 25px;width: 35px;position: absolute;right: 0;margin-right: 15px;">
				<a href="index.php" class="nav-item nav-link active" style="font-style: italic;font-weight: bolder;color: #fff;">Comer <i class="fas fa-utensils" style="color: "></i></a>
				<a href="pedido.php" class="nav-item nav-link" style="color: #fff">Pedidos <i class="fas fa-thumbs-up"></i></a>
				<a href="login.php" class="nav-item nav-link" style="color: #fff">Admin <i class="fas fa-user"></i></a>
			</div>
		</div>
	</nav>
	<?php 
	include_once "config.php"; // incluindo a página php com a conexão com o banco de dados
	if (!isset($_GET['id'])) { // verificando a negaçao de algum valor dentro da superglobal GET
		header("Location: index.php"); // caso sim, o usuário será redirecionado para o inínio
	}
	// recuperando o id pelo GET e os demais valores passados pelo POST
	$id = $_GET['id'];
	// comando select
	$sql = "SELECT * FROM prato WHERE id_prato = $id";
	// executando o comando select
	$sqlSelect = mysqli_query($conexao,$sql);
	$lista = mysqli_fetch_assoc($sqlSelect); // recuperando os valores da consulta com o  fetch_assoc
	?>
	<div class="container-fluid text-center" style="background: url(img/logotipo.png) no-repeat center fixed;height: auto;margin-top: 42px;width: auto">
		<h1 class="h3 mb-3 font-weight-bold" style="color: #EA5F00;text-shadow: 2px 2px 0 #000;">Cadastre seu pedido &nbsp;&nbsp;<i class="fas fa-pen-square" style="font-size: 60px"></i></h1>
		<div class="jumbotron jumbotron-fluid" style="margin: 0 20rem;border-radius: 10px;background-color: #fff;border: 1px solid #ccc;">
			<div class="row">
				<div class="col text-center">
					<img src="<?php echo $lista['imgPrato'];?>" alt="img prato" width="100%" height="100%" style="width: 300px;height: 192px;border-radius: 10px;margin: 10px">
				</div>
				<div class="col">
					<form action="cadastrarPedido.php?id=<?php echo $lista['id_prato']; ?>" method="POST" id="cadform" style="margin: 7px">
						<label for="nome">Nome: </label>
						<input type="text" name="nome" id="nome" class="form-control" required><br/>
						<label for="bebida">Escolha uma Bebida: </label>
						<div>
							<?php 
								$sqlbebida = "SELECT * FROM bebidas"; // comando select
								$sqlSelectBebida = mysqli_query($conexao,$sqlbebida); // executando o comando select
								$loop2 = 4; // variavel loop2 recebe 4 
								$i = 1; // variavel i recebe 1 
								while ($resultado = mysqli_fetch_assoc($sqlSelectBebida)) { // criando um loop para exibir os resultados retornados da consulta com o fetch_assoc
								if ($i < $loop2) { // caso a variavel i for menor que a variavel loop
							?>	
								<div style="float: left">
									<input type="radio" name="bebida" id="bebida" value="<?php echo $resultado['id_bebida']?>"><img src="<?php echo $resultado['imgBebida'];?>" alt="img bebida" width="100%" height="100%" style="width: 80px;height: 80px;" required>
								</div>
							<?php
							} else if ($i == $loop2) { // caso I for igual aloop
							?>
								<div>
									<input type="radio" name="bebida" id="bebida" value="<?php echo $resultado['id_bebida']?>"><img src="<?php echo $resultado['imgBebida'];?>" alt="img bebida" width="100%" height="100%" style="width: 80px;height: 80px;" required>
								</div>

							<?php
								$i++; // incrementando a variavel i
								}
								$i = 0; // zerando a variavel i
							}
							?>
						</div>
						<br><br>
					</form>				
				</div>
			</div>
		</div>
		<div class="jumbotron-fluid" style="margin: 0rem 20rem;padding: 1rem 0;border-radius: 10px;background-color: #fff;border: 1px solid #ccc;">
			<button type="submit" class="btn btn-info" form="cadform">Cadastrar <i class="fas fa-check"></i></button>
			<button type="reset" class="btn btn-dark" form="cadform">Limpar <i class="fas fa-eraser"></i></button>
		</div>
	</div>
	<div class="blockquote-footer text-center">
		<p>Copyright© - Desenvolvido por Luiz Miguel - 2º Informática</p>
	</div>
</body>
</html>