<?php 
include_once "conexao.php";

$id = $_GET['id'];
$sql = "SELECT * FROM carrinho WHERE idcarrinho=:pidcarrinho";
$comando = $con->prepare($sql);
$comando->bindParam(':pidcarrinho',$id);
$comando->execute();
$listagem = $comando->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Compre seu hotwheels</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		@font-face{
			font-family: "HEAVYHEA";
			src: url(font/webfonts/HEAVYHEA.TTF) format('opentype') ;
		}
	</style>
</head>
<body style="font-family:'HEAVYHEA',sans-serif;background: url(img/wallpaper3.jpg) fixed no-repeat center;background-size: cover">
<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #f30 !important;border-bottom: 2px solid #00f;">
			<a href="index.php" class="nav-item nav-link">
				<img src="img/logohotwheels.png" style="width: 30%;height: 70%;margin: 0;padding: 0;">
			</a>
				<div class="navbar-nav">
					<a href="index.php" class="nav-item nav-link">HOME</a>
					<a href="pedidos.php" class="nav-item nav-link">PEDIDOS</a>
					<a href="cadastrocarrinho.php" class="nav-item nav-link">VENDA CONOSCO!</a>
				</div>
		</nav>
	</div>
</div>
<div class="row" style="margin: 10px;" id="formulario">
	<div class="col-md-4 jumbotron" style="background: rgba(0,0,0,0.4);">
		<h1 class="p-4" style="color: #f6fefe;text-shadow: 2px 2px 0 #000;">
			Atualize as informações do seu produto
		</h1>
	</div>
	<div class="col-md-8">
		<div class="jumbotron text-center" style="border: 2px solid #00f;background-color: #f30;">
			<form action="updatecarrinho.php?id=<?php echo $listagem['idcarrinho'];?>" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name="nome" class="form-control" placeholder="Nome" required value="<?php echo $listagem['nome']?>">
				</div>
				<div class="form-group">
					<input type="number" name="preco" class="form-control" placeholder="Valor do produto" required value="<?php echo $listagem['preco']?>">
				</div>
				<div class="form-group">
					<input type="number" name="qtd" class="form-control" placeholder="Quantidade em estoque" required value="<?php echo $listagem['qtdcarrinho']?>">
				</div>
				<div class="form-group">
					<input type="file" name="img" class="form-control" required>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit" id="btnenviar">Atualizar <i class="fas fa-car"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>