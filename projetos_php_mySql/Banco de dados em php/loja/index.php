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
$sql = "SELECT * FROM produtos";
$sqlSelect = mysqli_query($conexao,$sql);
?>
	<div class="jumbotron" style="padding-left: 22rem;">
		<?php 
			$loopH = 3;
			$i = 1;
			while ($lista = mysqli_fetch_assoc($sqlSelect)) {
			if ($i < $loopH) {
		?>
		<div class="card" style="width: 18rem;float: left;" align="middle">
			<img class="card-img-top" src="<?php echo $lista['foto']; ?>" style="width: 286px;height: 180px;" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"><?php echo $lista['marca']; ?></h5>
				<p class="card-text"><?php echo $lista['modelo']; ?></p>
				<!--number_format() o primeiro parametro é o valor, o segundo é o numero de casa decimais, o terceiro é o caractere separador do decimal e o quarto é o caractere separador de milhar-->
				<p class="card-text">R$ <?php echo number_format($lista["preco"],2,",","."); ?></p> 
				<a href="detalhes.php?id=<?php echo $lista['id'];?>" class="btn btn-primary">Detalhes &nbsp;&nbsp;<span class="badge badge-pill badge-light"><i class="fas fa-info" style="color: #0069D9"></i></span></a>

			</div>
		</div>
		<?php 
			} else if($i == $loopH){
		?>
		<div class="card" style="width: 18rem;" align="middle">
			<img class="card-img-top" src="<?php echo $lista['foto']; ?>" style="width: 286px;height: 180px;" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"><?php echo $lista['marca']; ?></h5>
				<p class="card-text"><?php echo $lista['modelo']; ?></p>
				<!--number_format() o primeiro parametro é o valor, o segundo é o numero de casa decimais, o terceiro é o caractere separador do decimal e o quarto é o caractere separador de milhar-->
				<p class="card-text">R$ <?php echo number_format($lista["preco"],2,",","."); ?></p> 
				<a href="detalhes.php?id=<?php echo $lista['id'];?>" class="btn btn-primary">Detalhes &nbsp;&nbsp;<span class="badge badge-pill badge-light"><i class="fas fa-info" style="color: #0069D9"><span></i></a>

			</div>
		</div><br/>
		<?php
			$i = 0;
			}
			$i++;
		}
		?>
	</div>
</body>
</html>
