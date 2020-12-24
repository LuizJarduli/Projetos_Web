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
	if (!isset($_GET['id'])) { // verificando  negação  de algum valor da super global GET
		header("Location: index.php"); //caso sim, o usuário será redirecionado para a página de login
	}
	$id = $_GET["id"]; // recuperando o id passado via url com o GET
	$sql = "SELECT * FROM prato WHERE id_prato=$id"; // comando select
	$sqlSelect = mysqli_query($conexao,$sql); // executando o comando select
	$lista = mysqli_fetch_assoc($sqlSelect); // recuperando os resultados da consulta com a  função fetch_assoc que é um array que ordena esse resultado pelos seus campos
	?>
	<div class="container-fluid text-center" style="background: url(img/logotipo.png) no-repeat center fixed;height: auto;margin-top: 42px;">
		<h1 class="h1 mb-1 font-weight-bold" style="color: #EA5F00;text-shadow: 2px 2px 0 #000;">Detalhes &nbsp;&nbsp;<i class="fas fa-info" style="font-size: 60px"></i></h1>
		<div class="container-fluid" style="margin-top: 2rem; width: 600px;height: 387px;">
			<div class="carousel slide" id="carrossel" data-ride="carousel">
				<div class="carousel-inner" style="border-radius: 10px">
					<div class="carousel-item active" style="height: 387px">
						<img  class="d-block w-100" src="<?php echo $lista["imgPrato"]; ?>">
					</div>
					<div class="carousel-item" style="height: 387px">
						<img  class="d-block w-100" src="<?php echo $lista["imgPrato2"]; ?>">
					</div>
					<div class="carousel-item" style="height: 387px">
						<img  class="d-block w-100" src="<?php echo $lista["imgPrato3"]; ?>">
					</div>
				</div>
				<a href="#carrossel" class="carousel-control-prev" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a href="#carrossel" class="carousel-control-next" role="button" data-slide="next">
					<span class="carousel-control-next-icon active"></span>
					<span class="sr-only">Próximo</span>
				</a>
				<p class="carousel-caption"><?php echo $lista['nome']; ?></p>
			</div>
		</div>
		<div class="container-fluid">
			<table class="table table-light table-bordered" style="width: 40%;margin: 0px auto;">
			<thead class="thead-dark text-center">
				<tr>
					<th>
						<a href="cadpedido.php?id=<?php echo $lista['id_prato']; ?>" class="btn btn-outline-success">Pedir <i class="fas fa-utensil-spoon"></i></a>
					</th>
					<td>Prato - <?php echo $lista['id_prato']; // exibindo o id do registro ?></td>
				</tr>
				<tr>
					<th>Nome</th>
					<td><?php echo $lista['nome']; //exibindo o nome do registro?></td>
				</tr>
				<tr>
					<th>Fornecedor</th>
					<td><?php 
					$id = $lista['fornecedor'];
					$sql2 = "SELECT * FROM fornecedor WHERE id_fornecedor = $id";
					$sqlConsulta = mysqli_query($conexao,$sql2);
					$listaF = mysqli_fetch_assoc($sqlConsulta);
					echo $listaF['nome']; // exibindo o nome do fornecedor do registro ?></td>
				</tr>
				<tr>
					<th>Preço</th>
					<td><?php echo number_format($lista['preco'],2,",",".");  // exibindo o preço do registro?></td>
				</tr>
				<tr>
					<th>Data de Validade</th>
					<td><?php echo date("d/m/Y",strtotime($lista['validade'])); // exibindo a data de validade do registro?></td>
				</tr>
				<tr>
					<th>Data de Fabricação</th>
					<td><?php echo date("d/m/Y",strtotime($lista['data_fab']));  // exibindo a data de fabricação do registro?></td>
				</tr>
				<tr>
					<th>Descrição</th>
					<td class="text-justify"><?php echo $lista['descricao']; //exibindo  a descrição do registro?></td>
				</tr>
			</thead>
		</table>
		</div>
	</div>
	<div class="blockquote-footer text-center">
		<p>Copyright© - Desenvolvido por Luiz Miguel - 2º Informática</p>
	</div>
</body>
</html>