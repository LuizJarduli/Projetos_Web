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
	<div class="jumbotron jumbotron-fluid" style="background: #1b1d20;border-color: #8c72d3;color: #fff;height: auto;">
		<table class="table table-dark" style="width: 80%" align="center">
			<thead>
				<tr align="center">
					<th scope="col">Quartos</th><!--Table Header( ou head) = cabeçalho da tabela-->
					<th scope="col">Check-in</th>
					<th scope="col">Check-out</th>
					<th scope="col">Valor</th>
					<th scope="col">Situação</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include_once "config.php";
				$sql = "SELECT * FROM reservas";
				$sqlSelect = mysqli_query($conexao,$sql);
				while ($resultado = mysqli_fetch_assoc($sqlSelect)) {
				?>
				<tr align="center">
					<td><?php $sqlQuarto = "SELECT * FROM quartos WHERE id = ".$resultado["id_quarto"]; //Table data = dados da tabela
					$sqlConsulta = mysqli_query($conexao,$sqlQuarto);
					$linha = mysqli_fetch_assoc($sqlConsulta);
					echo $linha["nome"]; ?></td>
					<td><?php echo  date("d/m/Y",strtotime($resultado["checkin"])); ?></td>
					<td><?php echo  date("d/m/Y",strtotime($resultado["checkout"])); ?></td>
					<td><?php echo  number_format($resultado["valor"],2,",","."); ?></td>
					<td><?php 
					if ($resultado["pago"] == 0) {
					?>
					<a href="pago.php?id=<?php echo $resultado["id"];?>&id_quarto=<?php echo $linha["id"]; ?>" class="btn btn-outline-danger">Não Pago <i class="fas fa-hand-holding-usd"></i></a>
					<?php
					} else {
					?>
					<a href="#" class="btn btn-outline-success">Pago <i class="fas fa-handshake"></i></a>
					<?php
					}
					?>
					</td>
				</tr>
				<?php 
				}
				?>
			</tbody>
		</table>	
	</div>
</body>
</html>