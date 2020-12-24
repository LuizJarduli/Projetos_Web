<?php
include_once("config.php");
$sql = "SELECT * FROM cursos";
$sqlSelect =mysqli_query($conexao,$sql);
?>

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
              <legend>Cadastro de Aluno</legend>
              <div class="form-group">
                <label for="matricula">Matrícula: </label>
                <input type="number" name="matricula" required autofocus><br/><br/>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required>
                <br><br>
                <label for="curso">Curso: </label>
                <select class="form-control" id="curso" name="curso" style="width: 230px;">
                  <option value="">Selecione uma opção</option>
                  <?php 
                    while ($resultado = mysqli_fetch_assoc($sqlSelect)) {
                  ?>
                  <option value="<?php echo $resultado['id'];?>"><?php echo $resultado["nome"]; ?></option>
                  <?php    
                    }
                  ?>
                </select>
                <input type="hidden" name="opcao" value="1"><br/>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
          </fieldset>
      </form>
</div>
</body>
</html>