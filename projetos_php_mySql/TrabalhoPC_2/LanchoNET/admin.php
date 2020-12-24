<?php 
session_start(); // iniciando uma sessão
if (!isset($_SESSION["usuario"]) && !isset($_SESSION["senha"])) { // verificando a negação de valores da superglobal session
	// caso seja verdade, o usuário retornará para a tela de login
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
<body style="background-color: #585858">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: #562DB6 !important">
		<div class="slide navbar-default" id="navbarAltMarkup">
			<div class="navbar-nav">
				<a href="sair.php" class="btn btn-danger" style="position: absolute;right: 0;margin-right: 15px;">Sair <i class="fas fa-sign-out-alt"></i></a>
				<a href="index.php" class="nav-item nav-link" style="color: #fff;">Comer <i class="fas fa-utensils"></i></a>
				<a href="admin.php" class="nav-item nav-link active" style="font-style: italic;font-weight: bolder;color: #fff">Admin <i class="fas fa-user"></i></a>
				<a href="fornecedor.php" class="nav-item nav-link" style="color: #fff">Fornecedores <i class="fas fa-truck"></i></a>
				<a href="cadastro.php" class="nav-item nav-link" style="color: #fff">Cadastro <i class="fas fa-truck-loading"></i></a>
				<a href="consulta.php" class="nav-item nav-link" style="color: #fff">Consulta <i class="fas fa-search"></i></a>
			</div>
		</div>
	</nav>
	<div class="container-fluid" style="min-height: 679px;width: 100%">
		<div class="row">
			<div class="col-md-6 text-center" style="border-right-width: 1px;border-right-style: solid; border-right-color: #666;background: linear-gradient(to bottom, #562DB6, #3600AF, #EFEFEF, #585858);">
					<h1 class="h3 mb-3 font-weight-bold" style="color: #fff;text-shadow: 2px 2px 0 #000;margin-top: 60px"><i class="fas fa-user"></i><br/>Administradores</h1>
					<table class="table table-light table-striped table-responsive" style="width: 95%; opacity: 0.9" align="center">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Email</th>
								<th scope="col">Username</th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php 
							include_once "config.php"; // incluindo  a pagina php com a conexão com o banco
							$sql = "SELECT * FROM admin"; // comando select
							$sqlSelect = mysqli_query($conexao,$sql); // executando o comando select
							while ($result = mysqli_fetch_assoc($sqlSelect)) { // criando um loop para exibir todos os resultados da consulta recuperados pelo fetch_assoc que é um array que separa os retornos pelo seus índices
							?>
							<tr>
								<td><?php echo $result["id"]; // exibindo ao usuário o retorno do id do registro ?></td>
								<td><?php echo $result["nome"];  // retornando o nome do registro?></td>
								<td><?php echo $result["email"];  // retornando o e-mail do registro?></td>
								<td><?php echo $result["nome_usuario"];  // retornando onome_usuario do registro?></td>
								<td>
									<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal<?php echo $result['id']; // enviando para o modal o id do registro?>">Editar <i class="fas fa-edit"></i></button>
								</td>
								<td>
									<a href="manipulacao.php?acao=excluir&id=<?php echo $result['id'];  // enviando o id pela url via GET?>" class="btn btn-outline-danger">Excluir <i class="fas fa-times-circle"></i></a>
								</td>
							</tr>
							<div id="modal<?php echo $result['id']; ?>" class="modal fade" tabindex="-1" role="dialog">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title">Admin <?php echo $result['nome']; ?></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <form class="form-signin" action="manipulacao.php?acao=editar&id=<?php echo $result["id"]; // enviando o id do registro via url com o GET?>" method="POST">
							          <h1 class="h3 mb-3 font-weight-normal">Alteração dos dados</h1>
							          <div class="input-group">
							            <div class="input-group-prepend">
							              <span class="input-group-text" id="inputGroup-sizing-sm">
							                Nome
							              </span>
							            </div>
							            <input type="text" name="nome" id="inputName" class="form-control" value="<?php echo $result['nome']; // exibindo o nome do registro?>" required>
							          </div>
							          <div class="input-group">
							            <div class="input-group-prepend">
							              <span class="input-group-text" id="inputGroup-sizing-sm">
							                E-mail
							              </span>
							            </div>
							            <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo $result["email"]; // exibindo o email do registro ?>" required autofocus>
							          </div>
							          <div class="input-group">
							            <div class="input-group-prepend">
							              <span class="input-group-text" id="inputGroup-sizing-sm">
							                CPF
							              </span>
							            </div>
							            <input type="number" name="cpf" id="inputcpf" class="form-control" value="<?php echo $result['cpf']; // exibindo o cpf do registro ?>" required>
							          </div>
							          <div class="input-group">
							            <div class="input-group-prepend">
							              <span class="input-group-text" id="inputGroup-sizing-sm">
							                Username
							              </span>
							            </div>
							            <input type="text" name="username" id="inputUserName" class="form-control" value="<?php echo $result['nome_usuario']; // exibindo o nome de usuário do registro ?>" required>
							          </div>
							          <div class="input-group">
							            <div class="input-group-prepend">
							              <span class="input-group-text" id="inputGroup-sizing-sm">
							                Senha
							              </span>
							            </div>
							            <input type="password" name="senha" id="inputPassword" class="form-control" value="<?php echo $result['senha']; //exibindo a senha do registro ?>" required>
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
			</div>
			<div class="col-md-6 text-center" style="background: linear-gradient(to bottom, #562DB6, #3600AF, #EFEFEF, #585858);">
				<h1 class="h3 mb-3 font-weight-bold" style="color: #fff;text-shadow: 2px 2px 0 #000;margin-top: 60px"><i class="fas fa-handshake"></i><br/>Cadastro de Admins</h1>
					<form action="cadadmin.php" method="POST" style="width: 350px;margin: 0px auto">
						<label for="nome" class="sr-only">Nome: </label>
						<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required autofocus style="margin-bottom: 5px">
						<label for="email" class="sr-only">E-mail: </label>
						<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required style="margin-bottom: 5px">
						<label for="cpf" class="sr-only">CPF: </label>
						<input type="number" class="form-control" name="cpf" id="cpf" placeholder="CPF" required style="margin-bottom: 5px">
						<label for="username" class="sr-only">Nome de usuário: </label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Nome de usuário" required style="margin-bottom: 5px">
						<label for="senha" class="sr-only">Senha: </label>
						<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required
						style="margin-bottom: 5px">
						<button type="submit" class="btn btn-success" style="margin-right: 136px">Cadastrar <i class="fas fa-check-circle"></i></button>
						<button type="reset" class="btn btn-info">Limpar <i class="fas fa-eraser"></i></button>
					</form>
					<img src="img/logotipo.png" alt="Logo" width="100%" height="100%" style="width: 270px;height: 151px;">
			</div>
		</div>
	</div>
	<div class="blockquote-footer text-center" style="background-color: #585858">
		<p style="color: #fff">Copyright© - Desenvolvido por Luiz Miguel - 2º Informática</p>
	</div>
</body>
</html>