<!DOCTYPE html>
<html>
<head>
  <title>Sistema Escolar</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home</a>
      <a class="nav-item nav-link" href="cadastro.php">Cadastro <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="listagem.php">Listagem</a>
      <a class="nav-item nav-link" href="consulta.php">Consulta</a>
    </div>
  </div>
</nav>
<div class="jumbotron" style="height: 430px;">
      <form action="cadastrar.php" method="POST">
          <fieldset>
              <legend>Cadastro de Curso</legend>
              <div class="form-group">
                <label for="curso">Nome: </label>
                <input type="text" name="curso" id="curso" required autofocus>
                <br><br>
                <label for="periodo">Período: </label>
                <select class="form-control" id="periodo" name="periodo" style="width: 230px;">
                  <option value="">Selecione uma opção</option>
                  <option value="Integral">Integral</option>
                  <option value="Vespertino">Vespertino</option>
                  <option value="Noturno">Noturno</option>
                </select>
                <input type="hidden" name="opcao" value="2"><br/>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
          </fieldset>
      </form>
</div>
</body>
</html>