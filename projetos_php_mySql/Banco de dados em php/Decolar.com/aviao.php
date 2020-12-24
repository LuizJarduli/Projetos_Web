<!DOCTYPE html>
<html>
<head>
	<title>Decolar.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body style="background: #EEE;">
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #84a8fb !important;">
		<div class="collapse navbar-collapse" id="navbarAltMarkup">
			<div class="navbar-nav">
				<a href="index.php" class="nav-item nav-link" style="font-style: italic;font-weight: bolder;color: #124493">Decolar <i class="fas fa-plane" style="color: #e31019;transform: rotate(330deg);"></i></a>
				<a href="passagem.php" class="nav-item nav-link">Passagens <i class="fas fa-ticket-alt"></i></a>
				<a href="aviao.php" class="nav-item nav-link active">Aviões <i class="fas fa-fighter-jet" style="transform: rotate(330deg);"></i></a>
			</div>
		</div>
	</nav>
	<br/>
	<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#cadastrar" style="margin-left: 10px;">Cadastrar <i class="fas fa-plane" style="color: #124493;transform: rotate(330deg);"></i></button>
	<table class="table table-hover" style="margin: 3px 50px">
		<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Lugares</th>
		</tr>
		</thead>
		<tbody>
			<?php 
				include_once "config.php";
				$sql = "SELECT *FROM aviao";
				$sqlSelect = mysqli_query($conexao,$sql);

				while ($linha = mysqli_fetch_assoc($sqlSelect)) {
			?>
			<tr>
				<td><?php echo $linha["id"]; ?></td>
				<td><?php echo $linha["nome"]; ?></td>
				<td><?php echo $linha["lugares"]; ?></td>
				<td><?php if ($linha["lugares"] == 0) {
				?>
				<a href="liberar.php?id=<?php echo $linha['id']?>" class="btn btn-outline-danger">Lotação máxima <i class="fas fa-plane"></i></a>
				<?php
				} else {
				?>
				<a href="#" class="btn btn-outline-success">Liberado <i class="fas fa-paper-plane"></i></a>
				<?php
					} ?></td>
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
	<div class="modal fade" id="cadastrar" tabindex="-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Cadastro</h5>
					<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="cadaviao.php" method="POST" id="cadform">
						<label for="nome">Nome: </label>
						<input type="text" name="nome" id="nome" class="form-control">
						<label for="lugar">Lugares: </label>
						<input type="number" name="lugar" id="lugar" min="1" class="form-control">
					</form>
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-outline-secondary" form="cadform">Limpar</button>
					<button type="submit" class="btn btn-outline-primary" form="cadform">Cadastrar</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>