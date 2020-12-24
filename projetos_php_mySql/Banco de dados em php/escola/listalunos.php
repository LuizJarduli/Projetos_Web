<?php 
include_once("config.php");
$sql = "SELECT *FROM alunos";
$sqlSelect = mysqli_query($conexao,$sql);
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
      <a class="nav-item nav-link" href="cadastro.php">Cadastro</a>
      <a class="nav-item nav-link" href="listagem.php">Listagem <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="consulta.php">Consulta</a>
    </div>
  </div>
</nav>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Matrícula</th>
        <th scope="col">Nome</th>
        <th scope="col">Curso</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        while ($resultado = mysqli_fetch_assoc($sqlSelect)) {
      ?>
        <tr>
          <td scope="row"><?php echo $resultado['matricula']; ?></td>
          <td><?php echo  $resultado['nome']; ?></td>
          <?php
              $sqlcurso = 'SELECT * FROM cursos WHERE id = '.$resultado["curso"];
              $sqlSelectCurso = mysqli_query($conexao,$sqlcurso);
              $result = mysqli_fetch_assoc($sqlSelectCurso);
          ?>
          <td><?php echo $result["nome"]; ?></td>
        </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</body>
</html>