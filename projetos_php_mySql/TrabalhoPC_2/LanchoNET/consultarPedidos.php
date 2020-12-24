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
				<a href="index.php" class="nav-item nav-link" style="color: #fff;">Comer <i class="fas fa-utensils" style="color: "></i></a>
				<a href="pedido.php" class="nav-item nav-link active" style="font-style: italic;font-weight: bolder;color: #fff">Pedidos <i class="fas fa-thumbs-up"></i></a>
				<a href="login.php" class="nav-item nav-link" style="color: #fff">Admin <i class="fas fa-user"></i></a>
			</div>
		</div>
	</nav>
	<?php 
	include_once "config.php";
	$sql = "SELECT * FROM pedidos";
	$sqlSelect = mysqli_query($conexao,$sql);
	?>
	<div class="container-fluid text-center" style="background: url(img/logotipo.png) no-repeat center fixed;height: auto;margin-top: 42px;width: auto">
		<h1 class="h3 mb-3 font-weight-bold" style="color: #EA5F00;text-shadow: 2px 2px 0 #000;">Consulte seus pedidos &nbsp;&nbsp;<i class="fas fa-hourglass" style="font-size: 60px"></i></h1>
		<!--Criando formulário de pesquisa-->
		<form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><!--usa-se $_SERVER['PHP_SELF']; no action para que a pagina se atualize ao invés de enviar para oiutra página-->
		    <input type="search" name="busca" class="form-control mr-sm-2" placeholder="Busca">
		    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar <i class="fas fa-search"></i></button>  
		</form>
		<?php
		if (count($_POST)>0) {// verificando se a super global $_POST tem algum valor
		include_once("config.php"); // incluindo a página coma conexao com o banco de dados
		$busca = $_POST['busca']; // recuperando os dados passados pelo metodo post
		$sql4 = "SELECT *FROM pedidos WHERE nome LIKE '%$busca%'"; // comando sql
		$sqlSelect = mysqli_query($conexao,$sql4); // executando o comando sql
		?>
		<table class="table table-light text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Prato</th>
					<th scope="col">Bebida</th>
					<th scope="col">Total a pagar</th>
					<th scope="col">Situação</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while ($lista = mysqli_fetch_assoc($sqlSelect)) { // criando um loop para exibir os resultados da consulta coma função fetch_assoc
				?>
				<tr>
					<td><?php echo $lista['id_pedido']; ?></td>
					<td><?php echo $lista['nome']; ?></td>
					<td><?php $id = $lista['prato'];
					$sql2 = "SELECT * FROM prato WHERE id_prato = $id";
					$sqlSelect2 = mysqli_query($conexao,$sql2);
					$listap = mysqli_fetch_assoc($sqlSelect2);
					echo $listap['nome']; ?></td>
					<td><?php $id = $lista['bebida'];
					$sql3 = "SELECT * FROM bebidas WHERE id_bebida = $id";
					$sqlSelect3 = mysqli_query($conexao,$sql3);
					$listab = mysqli_fetch_assoc($sqlSelect3);
					echo $listab['nome']; ?></td>
					<td>R$ <?php echo number_format($lista['preco_total'],2,',','.') ?></td>
					<td><?php 
					if ($lista["pago"] == 0) {
					?>
					<a href="pagar.php?id=<?php echo $lista["id_pedido"];?>" class="btn btn-outline-danger">Não Pago <i class="far fa-money-bill-alt"></i></a>
					<?php
					} else {
					?>
					<a href="#" class="btn btn-outline-success">Pago <i class="fas fa-thumbs-up"></i></a>
					<?php
					}
					?></td>
				</tr>
				<?php
					}
				}
				?>
			</tbody>
		</table>
	</div>
	<div class="blockquote-footer text-center">
		<p>Copyright© - Desenvolvido por Luiz Miguel - 2º Informática</p>
	</div>
</body>
</html>