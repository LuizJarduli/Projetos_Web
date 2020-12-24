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
	<div class="col-md-12" style="padding: 0px 0px 15px 0px;">
		<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #f30 !important;border-bottom: 2px solid #00f;">
			<a href="index.php" class="nav-item nav-link">
				<img src="img/logohotwheels.png" style="width: 30%;height: 70%;margin: 0;padding: 0;">
			</a>
				<div class="navbar-nav">
					<a href="index.php" class="nav-item nav-link active">HOME</a>
					<a href="pedidos.php" class="nav-item nav-link">PEDIDOS</a>
					<a href="cadastrocarrinho.php" class="nav-item nav-link">VENDA CONOSCO!</a>
				</div>
		</nav>
	</div>
</div>
<?php 
	include_once "conexao.php"; // incluindo a pagina php com a conexão com o banco de dados
	$sql = "SELECT * FROM carrinho"; // comando select
	$comando = $con->prepare($sql);
	$comando->execute(); // executando o comando select
?>
<div class="row">
	<div class="col-md-12">
		<div class="jumbotron-fluid" style="color: #f6fefe;">
			<?php 
		$loop = 2;
			$i = 1;
			while ($lista = $comando->fetch()) {// criando um loop para exibir os resultados da consulta por meio a função fetch_assoc
			if($i < $loop) { // se I for menor que loop, execute o escopo abaixo
		?>
		<div class="card flex-row flex-wrap text-center" style="width: 700px;float: left;height: 350px;background: rgba(0,0,0,0.6);margin-left: 38px;margin-right: 10px;">
        	<div class="card-header border-0">
            	<img src="<?php echo $lista['imgcarrinho']; ?>" alt="Imagem Carrinho" width="100%" height="100%" style="width: 300px;height: 192px;margin: 50px 0px;border: 3px solid #f30;border-radius: 5px;">
        	</div>
        	<div class="card-block px-2">
            	<h4 class="card-title"><?php echo $lista["nome"]." - R$ ".number_format($lista['preco'],2,',','.'); ?></h4>
            	<p class="card-text text-center p-5" style="width: 300px;">Disponível: <?php echo $lista["qtdcarrinho"]; ?></p>
            	<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal<?php echo $lista['idcarrinho']?>">Pedir <i class="fas fa-shopping-cart"></i></button>
        	</div>
        	<div class="w-100"></div>
    	</div>
		<?php 
		} else if($i == $loop) { // senão se I foi igual a loop, execute este escopo
		?>
		<div class="card flex-row flex-wrap text-center" style="width: 700px;height: 350px;background: rgba(0,0,0,0.6);">
        	<div class="card-header border-0">
            	<img src="<?php echo $lista['imgcarrinho']; ?>" alt="Imagem Carrinho" width="100%" height="100%" style="width: 300px;height: 192px;margin: 50px 0px;border: 3px solid #f30;border-radius: 5px;">
        	</div>
        	<div class="card-block px-2">
            	<h4 class="card-title"><?php echo $lista["nome"]." - R$ ".number_format($lista['preco'],2,',','.'); ?></h4>
            	<p class="card-text p-5" style="width: 300px;">Disponível: <?php echo $lista["qtdcarrinho"]; ?></p>
            	<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal<?php echo $lista['idcarrinho'];?>">Pedir <i class="fas fa-shopping-cart"></i></button>
        	</div>
        	<div class="w-100"></div>
    	</div>

		<?php
		 	$i = 0;// zerando i 
			}
			?>
			<div class="modal fade" id="modal<?php echo $lista['idcarrinho']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color: #000;">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $lista['nome']; ?></h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form action="cadastropedido.php?idcarrinho=<?php echo $lista['idcarrinho']; ?>" method="POST">
			      		<div class="form-group">
			      			<input type="text" class="form-control" name="nome" placeholder="Seu nome" required>
			      		</div>
			      		<div class="form-group">
			      			<label for="preco">R$:</label>
			      			<input type="text" class="form-control" name="preco" placeholder="Seu nome" readonly="true" value="<?php echo $lista['preco'];?>">
			      		</div>
			      		<input type="submit" class="btn btn-primary" value="Comprar">
			      	</form>
			      </div>
			    </div>
			  </div>
			</div>
			<?php
			$i++;// incrementando i
		}
		?>
		</div>
	</div>
</div>
</body>
</html>