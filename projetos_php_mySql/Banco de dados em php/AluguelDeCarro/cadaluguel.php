<?php 
$min = new DateTime("now",new DateTimeZone("America/Sao_paulo"));
?>
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
<nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(to right, #f00, #f66, #fee );">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home </span></a>
      <a class="nav-item nav-link" href="cadastracar.php">Cadastro</a>
      <a class="nav-item nav-link active" href="aluguel.php">Aluguel <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
<div class="jumbotron" style="width: 500px;height: 380px;margin: 0px auto;margin-top: 40px;background: rgba(0,0,0,0.5);" align="middle">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <legend style="color: #fff;">Cadastro e locação</legend>
    <label for="veiculo" style="color: #fff;">Selecione o veículo: </label>
    <select name="veiculo" id="veiculo">
      <option value="">Selecione uma opção: </option>
      <?php 
        include_once "config.php";
        $sql = "SELECT * FROM veiculos WHERE status = 1 ORDER BY nome";
        $sqlSelect = mysqli_query($conexao,$sql);
        while ($resultado = mysqli_fetch_assoc($sqlSelect)) {
          
      ?>
      <option value="<?php echo $resultado['id']; ?>"><?php echo $resultado['nome']; ?></option>
      <?php
       }
      ?>
    </select><br/><br/>
    <label for="dias" style="color: #fff;">Quantidade de dias: </label>
    <input type="number" name="dias" value="1" min="1" id="dias" required><br/><br/>
    <label for="data" style="color: #fff;">Data de retirada: </label>
    <input type="date" name="data" id="data" required min="<?php echo $min->format('Y-m-d'); ?>"><br/><br/>
    <button type="submit" class="btn btn-warning" onclick="window.history.refresh()">Cadastrar</button>&nbsp;&nbsp;
    <button type="reset" class="btn btn-danger">Limpar</button>
  </form>
</div>
<?php 
if (count($_POST) > 0) {
  $id_veiculo = $_POST['veiculo'];
  $dias = $_POST["dias"];
  // Classe DateTime
  $data_retirada = new DateTime($_POST["data"]);/*DateTime(now,new DateTimeZone(America/Sao_paulo))*/
  $data = $data_retirada->format("Y-m-d");
  $data_devolucao = date_format($data_retirada->add(new DateInterval("P".$dias."D")),'Y-m-d');
  $sql = "SELECT * FROM veiculos WHERE id = $id_veiculo";
  $sqlexecuta =mysqli_query($conexao,$sql);
  $linha = mysqli_fetch_assoc($sqlexecuta);
  $valor_total = $linha['val_diaria'] * $dias;
  


  $sqlAluguel = "INSERT INTO aluguel(id_veiculo,valor_total,data_retirada,data_devolucao) VALUES($id_veiculo,$valor_total,'$data','$data_devolucao')";
  $sqlInsert = mysqli_query($conexao,$sqlAluguel);
  $sqlStatus = "UPDATE veiculos SET status = 0 WHERE id = $id_veiculo";
  $sqlUpdate =mysqli_query($conexao,$sqlStatus);
?>
<script>
  alert("Veículo alugado com sucesso");
</script>
<meta http-equiv="refresh" content="0;url=cadaluguel.php">
<?php

}
?>
</body>
</html>