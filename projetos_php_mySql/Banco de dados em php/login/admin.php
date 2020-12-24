<?php 
session_start();
if (!isset($_SESSION["email"]) && !isset($_SESSION["senha"])) {
	header("Location: index.php");
}
include_once "config.php";

$sql = "SELECT * FROM usuarios";
$sqlexecuta = mysqli_query($conexao,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administração de Usuários</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<link rel="stylesheet" type="text/css" href="font/css/open-iconic-bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body class="text-center" style="background: linear-gradient(to bottom, #b5bdc8 0%, #828c95 36%, #28343b 100%);">
	<table class="table table-striped table-light" style="width: 60%">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>	
				<th scope="col">E-mail</th>
				<th scope="col">Nome</th>
				<th scope="col"></th>
				<th scope="col"><a href="Sair.php" class="btn btn-success">Sair <span class="badge badge-light"><span class="oi oi-account-logout" style="color: #218838; font: 18px;"></span></span></a></th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while ($resultado = mysqli_fetch_assoc($sqlexecuta)) {// tambem existe a função mysqli_fetch_array, a diferença entre eles é que o assoc separa a matriz pelos índices
					
			?>
			<tr>
			<th scope="row"><?php echo $resultado['id']; ?></th>
			<th><?php echo $resultado['email']; ?></th>
			<th><?php echo $resultado['nome']; ?></th>
			<th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $resultado['id']; ?>">Editar <span class="badge badge-light"><span class="oi oi-pencil" style="color: #236ad6;font: 16px;"></span></span></button></th>
			<th><a href="funcao.php?acao=excluir&id=<?php echo $resultado["id"];?>" class="btn btn-danger" >Excluir <span class="badge badge-light"><span class="oi oi-circle-x" style="color: #c82333;font: 16px;"></span></span></a></th>
			</tr>
			<div id="modal<?php echo $resultado['id']; ?>" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title">Usuário <?php echo $resultado['nome']; ?></h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="form-signin" action="funcao.php?acao=editar&id=<?php echo $resultado["id"];?>" method="POST">
				          <h1 class="h3 mb-3 font-weight-normal">Alteração dos dados</h1>
				          <div class="input-group">
				            <div class="input-group-prepend">
				              <span class="input-group-text" id="inputGroup-sizing-sm">
				                E-mail
				              </span>
				            </div>
				            <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo $resultado["email"]; ?>" required autofocus>
				          </div>
				          <div class="input-group">
				            <div class="input-group-prepend">
				              <span class="input-group-text" id="inputGroup-sizing-sm">
				                Nome
				              </span>
				            </div>
				            <input type="text" name="nome" id="inputName" class="form-control" value="<?php echo $resultado['nome']; ?>" required>
				          </div>
				          <div class="input-group">
				            <div class="input-group-prepend">
				              <span class="input-group-text" id="inputGroup-sizing-sm">
				                Senha
				              </span>
				            </div>
				            <input type="password" name="senha" id="inputPassword" class="form-control" value="<?php echo $resultado['senha']; ?>" required>
				          </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn btn-primary">Salvar</button>
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				      </div></form>
				        </div>
				    </div>
				  </div>
				</div>
			<?php 
				}
			?>

		</tbody>
	</table>
		
</body>
</html>