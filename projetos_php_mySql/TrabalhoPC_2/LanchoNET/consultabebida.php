<?php 
session_start();
if (!isset($_SESSION["usuario"]) && !isset($_SESSION["senha"])) {
	header("Location: login.php");
}
?>
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
<body style="background: linear-gradient(to top, #333A42, #485058, #A6A5A1, #F1ECE9 , #D7443F 90%);">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: #D7443F !important;">
		<div class="slide navbar-default" id="navbarAltMarkup">
			<div class="navbar-nav">
				<a href="sair.php" class="btn btn-dark" style="position: absolute;right: 0;margin-right: 15px;">Sair <i class="fas fa-sign-out-alt"></i></a>
				<a href="index.php" class="nav-item nav-link" style="color: #fff;">Comer <i class="fas fa-utensils"></i></a>
				<a href="admin.php" class="nav-item nav-link" style="color: #fff">Admin <i class="fas fa-user"></i></a>
				<a href="fornecedor.php" class="nav-item nav-link" style="color: #fff">Fornecedores <i class="fas fa-truck"></i></a>
				<a href="cadastro.php" class="nav-item nav-link" style="color: #fff">Cadastro <i class="fas fa-truck-loading"></i></a>
				<a href="consulta.php" class="nav-item nav-link active" style="font-style: italic;font-weight: bolder;color: #fff">Consulta <i class="fas fa-search"></i></a>
			</div>
		</div>
	</nav>
	<div class="container-fluid text-center" style="min-height: 679px;width: 100%">
		<h1 class="h3 mb-3 font-weight-bold" style="color: #fff;text-shadow: 2px 2px 0 #000;">Produtos Cadastrados &nbsp;&nbsp;<i class="fas fa-list" style="font-size: 60px"></i></h1>
		<!--Criando formulário de pesquisa-->
		<form class="form-inline text-center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
			<!--usa-se $_SERVER['PHP_SELF']; no action para que a pagina se atualize ao invés de enviar para oiutra página-->
		    <input type="search" name="busca" class="form-control mr-sm-2" placeholder="Busca">
		    <button class="btn btn-dark my-2 my-sm-0" type="submit">Buscar <i class="fas fa-search"></i></button>  
		</form>
		<?php
		if (count($_POST)>0) {// verificando se a super global $_POST tem algum valor
		include_once("config.php"); // incluindo a pagina com a conexao do banco de dados
		$busca = $_POST['busca'];// recuperando dados passados pelo metodo POST
		$sql = "SELECT *FROM bebidas WHERE nome LIKE '%$busca%'"; // comando select
		$sqlSelect = mysqli_query($conexao,$sql); // executando o comando select
		?>
		<table class="table table-striped text-center">
			<thead style="background: linear-gradient(to left, #211F1F, #505052, #A9C2B0, #D9C1BD, #F2F2F2) !important;">
				<tr>
					<th scope="col">Bebidas <i class="fas fa-beer"></i></th>
					<th scope="col">Nome</th>
					<th scope="col">Fornecedor</th>
					<th scope="col">Preço</th>
					<th scope="col">Data de Fabricação</th>
					<th scope="col">Data de Validade</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while ($lista2 = mysqli_fetch_assoc($sqlSelect)) { // criando um loop para exibir os resultados da consulta usando a função fetch_assoc
				?>
				<tr>
					<td><?php echo $lista2['id_bebida']; // exibindo o id do registro ?></td>
					<td><?php echo $lista2['nome']; //exibindo onome do registro?></td>
					<td><?php $id = $lista2['fornecedor'];
					$sql3 = "SELECT * FROM fornecedor WHERE id_fornecedor = $id";
					$sqlSelect3 = mysqli_query($conexao,$sql3);
					$listaf2 = mysqli_fetch_assoc($sqlSelect3);
					echo $listaf2['nome']; //exibindo o nome do fornecedor do registro?></td>
					<td>R$ <?php echo number_format($lista2['preco'],2,',','.') // exibindo o preço do registro?></td>
					<td><?php echo date("d/m/Y",strtotime($lista2['data_fab']));//exibindo a data de fabricação do registro?></td>
					<td><?php echo date("d/m/Y",strtotime($lista2['data_val'])); // exibindo a data de validade so registro ?></td>
					<td>
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal2<?php echo $lista2['id_bebida']; ?>">Editar <i class="fas fa-edit"></i></button>
						<a href="alterarcadBebida.php?acao=excluir&id=<?php echo $lista2['id_bebida']; ?>" class="btn btn-outline-danger">Excluir <i class="fas fa-times-circle"></i></a>
					</td>
				</tr>
				<div id="modal2<?php echo $lista2['id_bebida']; ?>" class="modal fade" tabindex="-1" role="dialog">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title"><?php echo $lista2['nome']; ?></h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form class="form-signin" action="alterarcadBebida.php?acao=editar&id=<?php echo $lista2["id_bebida"];?>" method="POST">
				          <h1 class="h3 mb-3 font-weight-normal">Alteração dos dados</h1>
				          <div class="input-group" style="margin-bottom: 10px;">
				            <div class="input-group-prepend">
				              <span class="input-group-text" id="inputGroup-sizing-sm">
				                Nome
				              </span>
				            </div>
				            <input type="text" name="nome" id="inputName" class="form-control" value="<?php echo $lista2['nome']; ?>" required>
				          </div>
				          <div class="input-group" style="margin-bottom: 10px;">
				            <div class="input-group-prepend">
				              <span class="input-group-text" id="inputGroup-sizing-sm">
				                Preço
				              </span>
				            </div>
				            <input type="number" name="preco" id="inputUserName" class="form-control" value="<?php echo $lista2['preco']; ?>" required>
				          </div>
				          <div class="input-group" style="margin-bottom: 10px;">
				            <div class="input-group-prepend">
				              <span class="input-group-text" id="inputGroup-sizing-sm">
				                Data de fabricação
				              </span>
				            </div>
				            <input type="date" name="datafab" id="datafab" class="form-control" required>
				          </div>
				          <div class="input-group" style="margin-bottom: 10px;">
				            <div class="input-group-prepend">
				              <span class="input-group-text" id="inputGroup-sizing-sm">
				                Data de Validade
				              </span>
				            </div>
				            <input type="date" name="dataval" id="datafab" class="form-control" required>
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
				}
				?>
			</tbody>
		</table>
	</div>
	<div class="blockquote-footer text-center" style="background-color: #343a40">
		<p style="color: #fff">Copyright© - Desenvolvido por Luiz Miguel - 2º Informática</p>
	</div>
</body>
</html>