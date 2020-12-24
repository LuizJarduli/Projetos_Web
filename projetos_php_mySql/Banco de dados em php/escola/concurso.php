
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
<br/>
<!--Criando formulário de pesquisa-->
<form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><!--usa-se $_SERVER['PHP_SELF']; no action para que a pagina se atualize ao invés de enviar para oiutra página-->
    <input type="search" name="busca" class="form-control mr-sm-2" placeholder="Busca">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar <i class="fas fa-search"></i></button>  
</form>
<?php
if (count($_POST)>0) {// verificando se a super global $_POST tem algum valor
include_once("config.php");
$busca = $_POST['busca'];
$sql = "SELECT *FROM cursos WHERE nome LIKE '%$busca%'";
$sqlSelect = mysqli_query($conexao,$sql);
?>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Curso</th>
        <th scope="col">Período</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        while ($resultado = mysqli_fetch_assoc($sqlSelect)) {
      ?>
        <tr>
          <td scope="row"><?php echo $resultado['id']; ?></td>
          <td><?php echo  $resultado['nome']; ?></td>
          <td><?php echo $resultado['periodo']; ?></td>
        </tr>
      <?php
        }
      }
      ?>
    </tbody>
  </table>
</body>
</html>