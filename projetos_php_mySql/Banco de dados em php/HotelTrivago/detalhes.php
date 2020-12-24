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
$id = $_GET["id"]; 
include_once "config.php";
$sql = "SELECT * FROM quartos WHERE id =$id";
$sqlSelect = mysqli_query($conexao,$sql);
$resultado = mysqli_fetch_assoc($sqlSelect);
?>
	<div class="jumbotron jumbotron-fluid" style="background: #1b1d20;border-color: #8c72d3;padding: 1rem 10rem;color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col" style="margin-top: 2rem">
					<div class="carousel slide" id="carrossel" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img  class="d-block w-100" src="<?php echo $resultado["foto1"]; ?>">
							</div>
							<div class="carousel-item">
								<img  class="d-block w-100" src="<?php echo $resultado["foto2"]; ?>">
							</div>
							<div class="carousel-item">
								<img  class="d-block w-100" src="<?php echo $resultado["foto3"]; ?>">
							</div>
						</div>
					</div>
					<a href="#carrossel" class="carousel-control-prev" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a href="#carrossel" class="carousel-control-next" role="button" data-slide="next">
						<span class="carousel-control-next-icon"></span>
						<span class="sr-only">Anterior</span>
					</a>
				</div>
				<div class="col">
					<form action="cadreserva.php" method="POST" style="color: #fff;width: 60%;margin: 0px auto">
					<label for="nome">Nome: </label>
					<input type="text" name="nome" value="<?php echo $resultado['nome']; ?>" readonly class="form-control">
					<label for="descricao">Descrição: </label>
					<input type="text" name="descricao" value="<?php echo $resultado['descricao']; ?>" readonly class="form-control">
					<label for="diaria">Diária: </label>
					<input type="text" id="diaria" value="R$ <?php echo number_format($resultado['diaria'],2,',','.'); ?>" readonly class="form-control">
					<label for="checkin">Check-in: </label>
					<input type="date" name="checkin" id="checkin" class="form-control">
					<label for="checkout">Check-out: </label>
					<input type="date" name="checkout" id="checkout" class="form-control"><br>
					<button type="submit" class="btn btn-outline-success form-control" >Reservar <i class="far fa-check-square"></i></button>
					<input type="hidden" name="id" value="<?php echo $resultado["id"]; ?>">
					<input type="hidden" name="diaria" value="<?php echo $resultado["diaria"]; ?>">
					<a href="index.php" class="btn btn-outline-danger form-control">Cancelar <i class="fas fa-ban"></i></a>
					</form>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>