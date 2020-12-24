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
	include_once "config.php"; // incluindo a pagina php com a conexão com o banco de dados
	$sql = "SELECT * FROM prato"; // comando select
	$sqlSelect = mysqli_query($conexao,$sql); // executando o comando select
	?>
	<div class="container-fluid text-center" style="background: url(img/logotipo.png) no-repeat center fixed;height: auto;margin-top: 42px;width: auto">
		<h1 class="h3 mb-3 font-weight-bold" style="color: #EA5F00;text-shadow: 2px 2px 0 #000;">Cardápio &nbsp;&nbsp;<i class="fas fa-book" style="font-size: 60px"></i></h1>
		<?php 
		$loop = 2;
			$i = 1;
			while ($lista = mysqli_fetch_assoc($sqlSelect)) {// criando um loop para exibir os resultados da consulta por meio a função fetch_assoc
			if($i < $loop) { // se I for menor que loop, execute o escopo abaixo
		?>
		<div class="card flex-row flex-wrap" style="width: 700px;float: left;height: 350px;background: rgba(255,255,255,0.6);margin-left: 38px;">
        	<div class="card-header border-0">
            	<img src="<?php echo $lista['imgPrato']; ?>" alt="Imagem Prato" width="100%" height="100%" style="width: 300px;height: 192px;margin: 50px 0px">
        	</div>
        	<div class="card-block px-2">
            	<h4 class="card-title"><?php echo $lista["nome"]." - R$ ".number_format($lista['preco'],2,',','.'); ?></h4>
            	<p class="card-text text-justify" style="width: 300px;"><?php echo $lista["descricao"]; ?></p>
            	<a href="detalhePrato.php?id=<?php echo $lista['id_prato']; ?>" class="btn btn-outline-primary" style="margin-right: 50px">Detalhes <i class="fas fa-info"></i></a>
            	<a href="cadpedido.php?id=<?php echo $lista['id_prato']; ?>" class="btn btn-outline-secondary">Pedir <i class="fas fa-utensil-spoon"></i></a>
        	</div>
        	<div class="w-100"></div>
    	</div>
		<?php 
		} else if($i == $loop) { // senão se I foi igual a loop, execute este escopo
		?>
		<div class="card flex-row flex-wrap" style="width: 700px;height: 350px;background: rgba(255,255,255,0.6);">
        	<div class="card-header border-0">
            	<img src="<?php echo $lista['imgPrato']; ?>" alt="Imagem Prato" width="100%" height="100%" style="width: 300px;height: 192px;margin: 50px 0px">
        	</div>
        	<div class="card-block px-2">
            	<h4 class="card-title"><?php echo $lista["nome"]." - R$ ".number_format($lista['preco'],2,',','.'); ?></h4>
            	<p class="card-text text-justify" style="width: 300px;"><?php echo $lista["descricao"]; ?></p>
            	<a href="detalhePrato.php?id=<?php echo $lista['id_prato']; ?>" class="btn btn-outline-primary" style="margin-right: 50px">Detalhes <i class="fas fa-info"></i></a>
            	<a href="cadpedido.php?id=<?php echo $lista['id_prato']; ?>" class="btn btn-outline-secondary">Pedir <i class="fas fa-utensil-spoon"></i></a>
        	</div>
        	<div class="w-100"></div>
    	</div>
		<?php
		 	$i = 0;// zerando i 
			}
			$i++;// incrementando i
		}
		?>
	<div class="blockquote-footer text-center">
		<p>Copyright© - Desenvolvido por Luiz Miguel - 2º Informática</p>
	</div>
</body>
</html>