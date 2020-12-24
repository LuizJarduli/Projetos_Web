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
<body style="background: url(img/gta.jpg) no-repeat ;">
<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right, #f00, #f66, #fee );;">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="cadastracar.php">Cadastro</a>
      <a class="nav-item nav-link active" href="aluguel.php">Aluguel</a>
    </div>
  </div>
</nav>
<div class="jumbotron" style="background: rgba(255,255,255,0.8);width: 90%;margin: 0px auto" align="middle" >
  <a href="cadaluguel.php" class="btn btn-success" style="margin-bottom: 40px;">Locação <span class="badge badge-pill badge-light"><i class="fas fa-exchange-alt" style="color: #218838"></i></span></a>
  <table class="table">
    <thead class="thead-dark">
      <tr align="center">
        <th>Veículo</th>
        <th>Valor Total</th>
        <th>Data da retirada</th>
        <th>Data da devolução</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
  <?php 
  include_once "config.php";
  $sql = "SELECT * FROM aluguel";
  $sqlSelect = mysqli_query($conexao,$sql);
  while ($resultado = mysqli_fetch_assoc($sqlSelect)) {
  
  ?>
  <tr align="center">
    <td><?php $sqlVeiculo= "SELECT * FROM veiculos WHERE id=".$resultado['id_veiculo'];
    $sqlVeicExec = mysqli_query($conexao,$sqlVeiculo);
    $linha =mysqli_fetch_assoc($sqlVeicExec);
    echo $linha['nome']; 
    ?></td>
    <td>R$ <?php echo number_format($resultado['valor_total'], 2, ",","."); ?></td>
    <td><?php echo date("d-m-Y",strtotime($resultado['data_retirada'])); ?></td>
    <td><?php echo date("d-m-Y",strtotime($resultado['data_devolucao'])); ?></td>
    <td><?php 
    if ($linha['status'] == 0) {
    ?>
      <a href="status.php?id=<?php echo $linha['id']; ?>" class="btn btn-danger">Alugado <span class="badge badge-pill badge-light"><i class="far fa-thumbs-down" style="color: #c82333"></i></span></a>
    <?php  
    } else {
    ?>
    <a href="status.php" class="btn btn-success">Liberado <span class="badge badge-pill badge-light"><i class="far fa-thumbs-up" style="color: #218838"></i></span></a>
    <?php
    }
    ?></td>
  </tr>
  <?php
    }
  ?>
  </tbody>
 </table>
</div>
</body>
</html>