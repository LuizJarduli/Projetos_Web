<!DOCTYPE html>
<html>
<head>
  <title>Aluguel de Carro</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background: url(img/ferrari1.jpg) no-repeat ;">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #f00;">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="cadastracar.php">Cadastro</a>
      <a class="nav-item nav-link" href="aluguel.php">Aluguel</a>
    </div>
  </div>
</nav>
<div class="jumbotron">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <legend>Cadastro e locação</legend>
    <label for="veiculo">Selecione o veículo</label>
    <select name="veiculo" id="veiculo"></select>
  </form>
</div>
</body>
</html>