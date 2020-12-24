<?php 
include_once "conexao.php";

$sql = "SELECT * FROM pedido";
$comando = $con->prepare($sql);
$comando->execute();
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
					<a href="pedidos.php" class="nav-item nav-link active">PEDIDOS</a>
					<a href="cadastrocarrinho.php" class="nav-item nav-link">VENDA CONOSCO!</a>
				</div>
		</nav>
	</div>
</div>
<div class="jumbotron text-center">
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Comprador</th>
				<th scope="col">Data da Compra</th>
				<th scope="col">Carrinho</th>
				<th scope="col">Preco</th>
				<th scope="col">Situação</th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while ($resultado = $comando->fetch()) {
			 ?>
			<tr>
				<td><?php echo $resultado['idpedido']; ?></td>
				<td><?php echo $resultado['comprador']; ?></td>
				<td><?php echo $resultado['datacompra']; ?></td>
				<td><?php $id = $resultado['idcarrinho'];
						  $sqlSelect = "SELECT * FROM carrinho WHERE idcarrinho = $id";
						  $comando2 = $con->prepare($sqlSelect);
						  $comando2->execute();
						  $result = $comando2->fetch();
						  echo $result['nome']; ?></td>
				<td><?php echo $resultado['valor']; ?></td>
				<td><?php 
				if ($resultado['pago'] == 0) {
				 ?>
				 <a href="pago.php?idpedido=<?php echo $resultado['idpedido'];?>" class="btn btn-outline-warning">Pagar <i class="fas fa-hand-holding-usd"></i></a>
				 <?php
				 } else {
				 ?>
				 <a href="#" class="btn btn-outline-success">Pago <i class="fas fa-handshake"></i></a>
				 <?php
				 } ?></td>
				<td><a href="#modal<?php echo $resultado['idpedido'];?>" class="btn btn-outline-dark" data-toggle="modal">Alterar <i class="fas fa-pen-square"></i></a></td>
				<td><a href="acao.php?idpedido=<?php echo $resultado['idpedido'];?>&acao=excluir" class="btn btn-outline-danger">Excluir <i class="fas fa-trash"></i></a></td>

			</tr>
			<div class="modal fade" id="modal<?php echo $resultado['idpedido']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color: #000;">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $resultado['comprador']; ?></h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form action="acao.php?idpedido=<?php echo $resultado['idpedido']; ?>&acao=alterar" method="POST">
			      		<div class="form-group">
			      			<input type="text" class="form-control" name="nome" placeholder="Seu nome" value="<?php echo $resultado['comprador']?>" required>
			      		</div>
			      		<div class="form-group">
			      			<select name="carrinho" class="form-control">
			      				<?php
			      				$carrinho ="SELECT * FROM carrinho";
			      				$carrinhoselect = $con->prepare($carrinho);
			      				$carrinhoselect->execute();
			      				while ($select = $carrinhoselect->fetch()) {
			      				?>
								<option value="<?php echo $select['idcarrinho'];?>"><?php echo $select['nome']; ?></option>
			      				<?php
			      				 } 
			      				 ?>
			      			</select>
			      		</div>
			      		<button type="submit" class="btn btn-primary" id="btnenviar">Alterar</button>
			      	</form>
			      </div>
			    </div>
			  </div>
			</div>
			<?php
			}
			?>
		</tbody>
	</table>
</div>
