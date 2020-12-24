<!DOCTYPE html>
<html>
<head>
	<title>Loja Virtual</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.css">
	<script src="/js/jquery.js" type="text/javascript"></script>
	<script src="/js/bootstrap.js" type="text/javascript"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background: #353535">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a href="index.php" class="nav-item nav-link active">Home <span class="sr-only">(current)</span></a>
				<a href="cadastro.php" class="nav-item nav-link">Cadastro</a>
			</div>
		</div>
	</nav>
<?php 
include_once "config.php";
$id = $_GET["id"];
$sql = "SELECT * FROM produtos WHERE id = '$id'";
$sqlSelect = mysqli_query($conexao,$sql);
$resultado = mysqli_fetch_assoc($sqlSelect);
?>
	<div class="jumbotron" style="padding-left: 22rem;">
		<table class="table">
			<tr>
				<td rowspan="4"><img src="<?php echo $resultado['foto']; ?>" style="width: 572px;height: 360px;"></td>
				<th><?php echo $resultado['marca']; ?> - <?php echo $resultado['modelo']; ?></th>
			</tr>
			<tr>
				<th>R$ <?php echo number_format($resultado['preco'],2,",","."); ?></th>
			</tr>
			<tr>
				<th><label for="qtde">Quantidade: </label><input type="number" name="qtde" id="qtde" value="1"></th>
			</tr>
			<tr>
				<th><button type="button" class="btn btn-success">Comprar <span class="badge badge-pill badge-success"><i class="fas fa-shopping-cart" style="color: #218838"></i></span></button></th>
			</tr>
		</table>
	</div>
</body>
</html>
