<meta charset="utf-8">
<?php 
include_once "conexao.php";

$sql = "SELECT * FROM livros";
$sqlexecuta = mysqli_query($conexao,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administração de Livros</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<link rel="stylesheet" type="text/css" href="font/css/open-iconic-bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body class="text-center" style="background: linear-gradient(to bottom, #b5bdc8 0%, #a1f32a 36%, #2587a5 100%);">
	<table class="table table-striped table-light" style="width: 60%">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>	
				<th scope="col">Nome</th>
				<th scope="col">Autor</th>
				<th scope="col">Gênero</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 
				while ($resultado = mysqli_fetch_assoc($sqlexecuta)) {// tambem existe a função mysqli_fetch_array, a diferença entre eles é que o assoc separa a matriz pelos índices
					
			?>
			<tr>
			<th scope="row"><?php echo $resultado['id']; ?></th>
			<th><?php echo $resultado['nome']; ?></th>
			<th><?php echo $resultado['autor']; ?></th>
			<th><?php echo $resultado['genero']; ?></th>
			</tr>
			<?php 
			}
			?>
			<thead class="thead-dark">
				<th></th>
				<th></th>
				<th></th>
				<th scope="col"><a href="index.php" class="btn btn-success">Sair <span class="badge badge-light"><span class="oi oi-account-logout" style="color: #218838; font: 18px;"></span></span></a></th>
			</thead>
			