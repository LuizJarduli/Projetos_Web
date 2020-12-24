<?php 
session_start(); // iniciando uma sessao
if (!isset($_SESSION["usuario"]) && !isset($_SESSION["senha"])) { // verificando a negação  de algum valor da super global session
	header("Location: login.php"); // caso sim, o usuário será redirecionado para a tela de login
}
$min = new DateTime("now",new DateTimeZone("America/Sao_paulo")); // criando um objeto dateTime com o tempo atual da região
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
<body style="background-color: #0A173D">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: #439923 !important;">
		<div class="slide navbar-default" id="navbarAltMarkup">
			<div class="navbar-nav">
				<a href="sair.php" class="btn btn-dark" style="position: absolute;right: 0;margin-right: 15px;">Sair <i class="fas fa-sign-out-alt"></i></a>
				<a href="index.php" class="nav-item nav-link" style="color: #fff;">Comer <i class="fas fa-utensils"></i></a>
				<a href="admin.php" class="nav-item nav-link" style="color: #fff">Admin <i class="fas fa-user"></i></a>
				<a href="fornecedor.php" class="nav-item nav-link" style="color: #fff">Fornecedores <i class="fas fa-truck"></i></a>
				<a href="cadastro.php" class="nav-item nav-link active" style="font-style: italic;font-weight: bolder;color: #fff">Cadastro <i class="fas fa-truck-loading"></i></a>
				<a href="consulta.php" class="nav-item nav-link" style="color: #fff">Consulta <i class="fas fa-search"></i></a>
			</div>
		</div>
	</nav>
	<div class="container-fluid" style="min-height: 679px;width: 100%">
		<div class="row">
			<div class="col-md-6" style="border-right-width: 1px;border-right-style: solid; border-right-color: #666;background: linear-gradient(to top, #0A173D, #5ADEED, #FFFFFF, #84B833, #439923);">
				<div class="container-fluid text-center" style="margin-top: 30px ">
					<form action="cadprato.php" method="POST"  enctype="multipart/form-data" class="form-control" style="width: 350px;margin: 0px auto;background: rgba(255,255,255,0.1);border: none;margin-top: 105px; padding: 15px;">
						<h1 class="h3 mb-3 font-weight-bold" style="color: #fff;text-shadow: 2px 2px 0 #000;"><i class="fas fa-utensils" style="font-size: 52px;"></i><br/>Cadastro de Pratos</h1>
						<label for="nomep" class="sr-only">Nome: </label>
						<input type="text" class="form-control" name="nomep" id="nomep" placeholder="Nome" required autofocus style="margin-bottom: 5px">
						<label for="precop" class="sr-only">Preço: </label>
						<input type="number" class="form-control" name="precop" id="precop" placeholder="Preço" required style="margin-bottom: 5px">
						<select name="fornecedorp" id="fornecedorp" class="custom-select-md form-control" style="margin-bottom: 5px" required>
							<option value="">Selecione um fornecedor: </option>
							<?php 
							include_once "config.php"; // incluindo a pagina php com a conexao com o banco de dados
							$sql = "SELECT * FROM fornecedor"; // comando sql com a consulta
							$sqlSelect = mysqli_query($conexao,$sql); // executando o comando sql
							while ($resultado = mysqli_fetch_assoc($sqlSelect)) { // criando um loop com os resultados recuperados com fetch_assoc 
							?>
							<option value="<?php echo $resultado['id_fornecedor'];?>"><?php echo $resultado['nome'] ?></option>
							<?php
							}
							?>
						</select>
						<label for="imgp" class="sr-only">Imagens: </label>
						<input type="file" class="form-control" name="imgp[]" id="imgp" placeholder="Imagens" multiple required
						style="margin-bottom: 5px">
						<label for="datafabp" class="form-control-label">Data de Fabricação: </label>
						<input type="date" class="form-control" name="datafabp" id="datafabp" max="<?php echo $min->format('Y-m-d'); ?>" required style="margin-bottom: 5px">
						<label for="dataval" class="form-control-label">Data de Validade: </label>
						<input type="date" class="form-control" name="datavalp" id="datavalp" min="<?php echo $min->format('Y-m-d'); ?>" required style="margin-bottom: 5px">
						<label for="descricao" class="form-control-label">Descrição: </label>
						<textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" style="margin-bottom: 5px; " required></textarea>
						<button type="submit" class="btn btn-primary" style="margin-right: 107px">Cadastrar <i class="fas fa-check-circle"></i></button>
						<button type="reset" class="btn btn-light">Limpar <i class="fas fa-eraser"></i></button>
					</form>
					<img src="img/logotipo.png" alt="Logo" width="100%" height="100%" style="width: 270px;height: 151px;">
				</div>
			</div>
			<div class="col-md-6 text-center" style="background: linear-gradient(to top, #0A173D, #5ADEED, #FFFFFF, #84B833, #439923);">
				<form action="cadbebida.php" method="POST"  enctype="multipart/form-data" class="form-control" style="width: 350px;margin: 0px auto;background: rgba(255,255,255,0.1);border: none;margin-top: 105px; padding: 15px;">
						<h1 class="h3 mb-3 font-weight-bold" style="color: #fff;text-shadow: 2px 2px 0 #000;"><i class="fas fa-beer" style="font-size: 52px;"></i><br/>Cadastro de Bebidas</h1>
						<label for="nome" class="sr-only">Nome: </label>
						<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required autofocus style="margin-bottom: 5px">
						<label for="preco" class="sr-only">Preço: </label>
						<input type="number" class="form-control" name="preco" id="preco" placeholder="Preço" required style="margin-bottom: 5px">
						<select name="fornecedor" id="fornecedor" class="custom-select-md form-control" style="margin-bottom: 5px">
							<option value="">Selecione um fornecedor: </option>
							<?php 
							include_once "config.php";
							$sql = "SELECT * FROM fornecedor"; // comando select 
							$sqlSelect = mysqli_query($conexao,$sql); // executando o comando select
							while ($resultado = mysqli_fetch_assoc($sqlSelect)) { // criando um loop com o retorno da consulta usando a função fetch_assoc que agrupa os registros num array e associa eles ao nome de seus campos
							?>
							<option value="<?php echo $resultado['id_fornecedor'];?>"><?php echo $resultado['nome'] ?></option>
							<?php
							}
							?>
						</select>
						<label for="img" class="sr-only">Imagem: </label>
						<input type="file" class="form-control" name="img" id="img" placeholder="Imagem" required
						style="margin-bottom: 5px">
						<label for="datafab" class="form-control-label">Data de Fabricação: </label>
						<input type="date" class="form-control" name="datafab" id="datafab" max="<?php echo $min->format('Y-m-d'); ?>" required style="margin-bottom: 5px">
						<label for="dataval" class="form-control-label">Data de Validade: </label>
						<input type="date" class="form-control" name="dataval" id="dataval" min="<?php echo $min->format('Y-m-d'); ?>" required style="margin-bottom: 5px">
						<button type="submit" class="btn btn-primary" style="margin-right: 107px">Cadastrar <i class="fas fa-check-circle"></i></button>
						<button type="reset" class="btn btn-light">Limpar <i class="fas fa-eraser"></i></button>
					</form>
					<img src="img/logotipo.png" alt="Logo" width="100%" height="100%" style="width: 270px;height: 151px;">
			</div>
		</div>
	</div>
	<div class="blockquote-footer text-center" style="background-color: #0A173D">
		<p style="color: #fff">Copyright© - Desenvolvido por Luiz Miguel - 2º Informática</p>
	</div>
</body>
</html>