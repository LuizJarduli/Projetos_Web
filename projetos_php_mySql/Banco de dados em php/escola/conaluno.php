
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
<form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="search" name="busca" class="form-control mr-sm-2" placeholder="Busca">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar <i class="fas fa-search"></i></button>  
</form>
<?php
if (count($_POST)>0) {
$busca = $_POST['busca'];  
include_once("config.php");
$sql = "SELECT *FROM alunos WHERE nome LIKE '%$busca%'";
$sqlSelect = mysqli_query($conexao,$sql);
?>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Matrícula</th>
        <th scope="col">Nome</th>
        <th scope="col">Curso</th>
        <th scope="col"></th>
        <th scope="col"></th>
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
          <td scope="row"><a href="funcao.php?acao=excluir&matricula=<?php echo $resultado["matricula"];?>" class="btn btn-danger" >Excluir <span class="badge badge-light"><span class="oi oi-circle-x" style="color: #c82333;font: 16px;"></span></span></a></td>
          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $resultado['matricula']; ?>">Editar <span class="badge badge-light"><span class="oi oi-pencil" style="color: #236ad6;font: 16px;"></span></span></button></td>
          <div id="modal<?php echo $resultado['matricula']; ?>" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Aluno <?php echo $resultado['nome']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="form-signin" action="funcao.php?acao=editar&matricula=<?php echo $resultado["matricula"];?>" method="POST">
                  <h1 class="h3 mb-3 font-weight-normal">Alteração dos dados</h1>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">
                        Nome
                      </span>
                    </div>
                    <input type="text" name="nome" id="inputName" class="form-control" value="<?php echo $resultado["nome"]; ?>" required autofocus>
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">
                        Curso
                      </span>
                    </div>
                    <input type="text" name="curso" id="inputName" class="form-control" value="<?php echo $resultado['curso']; ?>" required>
                  </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              </div></form>
                </div>
            </div>
          </div>
        </div>

        </tr>
      <?php
        }
      }
      ?>
    </tbody>
  </table>
</body>
</html>