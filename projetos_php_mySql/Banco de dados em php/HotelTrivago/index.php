<!DOCTYPE html>
<html>
<head>
	<title>Trivago</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background: #333">
<nav class="navbar navbar-expand-lg navbar-dark" style="background: #333;">
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a href="index.php" class="nav-item nav-link active" style="color: #8c72d3;">Home <span class="sr-only">(current)</span></a>
			<a href="cadastro.php" class="nav-item nav-link">Cadastro</a>
			<a href="reserva.php" class="nav-item nav-link">Reserva</a>
		</div>
	</div>
</nav>
<?php 
include_once "config.php";
$sql = "SELECT * FROM quartos where status = 1";
$sqlSelect = mysqli_query($conexao,$sql);
?>
	<div class="jumbotron jumbotron-fluid" style="background: #1b1d20;border-color: #8c72d3;padding-left: 22rem;color: #fff;">
		<?php 
			$loopH = 3;
			$i = 1;
			while ($lista = mysqli_fetch_assoc($sqlSelect)) {
			if ($i < $loopH) {
		?>
		<div class="card" style="width: 18rem;float: left;background: #1b1d20;border-color: #8c72d3;color: #fff;" align="middle">
			<img class="card-img-top" src="<?php echo $lista['foto1']; ?>" style="width: 286px;height: 180px;" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"><?php echo $lista['nome']; ?></h5>
				<p class="card-text"><?php echo $lista['descricao']; ?></p>
				<!--number_format() o primeiro parametro é o valor, o segundo é o numero de casa decimais, o terceiro é o caractere separador do decimal e o quarto é o caractere separador de milhar-->
				<p class="card-text">R$ <?php echo number_format($lista["diaria"],2,",","."); ?></p> 
				<a href="detalhes.php?id=<?php echo $lista['id'];?>" class="btn btn-outline-light">Detalhes &nbsp;&nbsp;<span class="badge badge-pill badge-light"><i class="fas fa-info" style="color: #8c72d3;"></i></span></a>

			</div>
		</div>
		<?php 
			} else if($i == $loopH){
		?>
		<div class="card" style="width: 18rem;background: #1b1d20;border-color: #8c72d3;color: #fff" align="middle">
			<img class="card-img-top" src="<?php echo $lista['foto3']; ?>" style="width: 286px;height: 180px;" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"><?php echo $lista['nome']; ?></h5>
				<p class="card-text"><?php echo $lista['descricao']; ?></p>
				<!--number_format() o primeiro parametro é o valor, o segundo é o numero de casa decimais, o terceiro é o caractere separador do decimal e o quarto é o caractere separador de milhar-->
				<p class="card-text">R$ <?php echo number_format($lista["diaria"],2,",","."); ?></p> 
				<a href="detalhes.php?id=<?php echo $lista['id'];?>" class="btn btn-outline-light">Detalhes &nbsp;&nbsp;<span class="badge badge-pill badge-light"><i class="fas fa-info" style="color: #8c72d3;"></span></i></a>

			</div>
		</div><br/>
		<?php
			$i = 0;
			}
			$i++;
		}
		?>
</body>
</html>