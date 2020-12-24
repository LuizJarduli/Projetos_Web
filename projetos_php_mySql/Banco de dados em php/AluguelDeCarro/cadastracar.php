<!DOCTYPE html>
<html>
<head>
  <title>cadastro de veículos</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background: url(img/gta.jpg) no-repeat ;">
<nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right,#ff0,#ff5,#ffa);">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link active" href="cadastracar.php">Cadastro <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="aluguel.php">Aluguel</a>
    </div>
  </div>
</nav>
<div style="width: 350px;margin-left: 625px;margin-top: 150px">
  <form class="text-center" action="cadastro.php" method="POST">
    <h1 class="h3 mb-3 font-weigth-normal" style="color: #000;">Cadastro de Carros</h1>
    <label for="nome" class="sr-only">Nome: </label>
    <input type="text" name="nome" id="Nome" class="form-control" placeholder="Nome" required >
    <label for="autor" class="sr-only">Placa: </label>
    <input type="text" name="placa" id="placa" class="form-control" placeholder="Placa" required >
    <label for="genero" class="sr-only">Valor da diária: </label>
    <input type="number" name="valor" id="valor" class="form-control" placeholder="Valor diária (R$)" required >
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
    <button class="btn btn-lg btn-danger btn-block" type="reset">Limpar Dados</button>
  </form>
</div>

