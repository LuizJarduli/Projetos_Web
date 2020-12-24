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
				<a href="passagem.php" class="nav-item nav-link active">Passagens <i class="fas fa-ticket-alt"></i></a>
				<a href="aviao.php" class="nav-item nav-link">Aviões <i class="fas fa-fighter-jet" style="transform: rotate(330deg);"></i></a>
			</div>
		</div>
	</nav>
	<br/>
	<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#cadastrar" style="margin-left: 10px;">Cadastrar <i class="fas fa-ticket-alt" style="color: #124493;"></i></button>
	<br/>
	<table class="table table-hover">
		<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Data do embarque</th>
			<th scope="col">Destino</th>
			<th scope="col">Valor</th>
			<th scope="col">Avião</th>
			<th scope="col">Pago</th>
		</tr>
		</thead>
		<tbody>
			<?php 
				include_once "config.php";
				$sql = "SELECT *FROM passagem";
				$sqlSelect = mysqli_query($conexao,$sql);

				while ($linha = mysqli_fetch_assoc($sqlSelect)) {
			?>
			<tr>
				<td><?php echo $linha["id"]; ?></td>
				<td><?php echo $linha["nome"]; ?></td>
				<td><?php echo date("d/m/Y",strtotime($linha["data_embarque"])); ?></td>
				<td><?php echo $linha["destino"]; ?></td>
				<td>R$ <?php echo number_format($linha["valor"],2,",","."); ?></td>
				<td><?php $sqlaviaoExi = "SELECT * FROM aviao WHERE id = ".$linha["id_aviao"];
					$sqlexecuta = mysqli_query($conexao,$sqlaviaoExi);
					$aviao = mysqli_fetch_assoc($sqlexecuta);
					echo $aviao['nome'];
					 ?></td>
				<td><?php 
					if ($linha["pago"] == 0) {
					?>
					<a href="pago.php?id=<?php echo $linha["id"];?>&aviao=<?php echo $aviao["id"]; ?>" class="btn btn-outline-danger">Não Pago <i class="fas fa-hand-holding-usd"></i></a>
					<?php
					} else {
					?>
					<a href="#" class="btn btn-outline-success">Pago <i class="fas fa-handshake"></i></a>
					<?php
					}
					?></td>
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
					<form action="cadpassagem.php" method="POST" id="cadform">
						<label for="nome">Nome: </label>
						<input type="text" name="nome" id="nome" class="form-control">
						<label for="data">Data do embarque: </label>
						<input type="date" name="data" id="data" min="1" class="form-control">
						<label for="destino">Destino: </label>
						<input type="text" name="destino" id="destino" class="form-control">
						<label for="valor">Valor: </label>
						<input type="text" name="valor" id="valor" class="form-control">
						<label for="nome">Avião: </label>
						<select name="aviao" id="aviao" class="form-control">
							<option value="">Selecione o avião</option>
							<?php 
							$sqlaviao = "SELECT * FROM aviao";
							$sqlSelectAviao = mysqli_query($conexao,$sqlaviao);
							while ($resultado = mysqli_fetch_assoc($sqlSelectAviao)) {
							?>
							<option value="<?php echo $resultado['id']; ?>"><?php echo $resultado["nome"]; ?></option>
							<?php 
							}
							?>
						</select>
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