<?php 
include_once "config.php";
$id_quarto = $_POST["id"];
$datain = new DateTime($_POST["checkin"]);
$dataout = new DateTime($_POST["checkout"]);
$dif = $dataout->diff(new DateTime($_POST["checkin"]));
$valor = $_POST["diaria"] * $dif->days;// diff = é usado para subtrair datas
$checkin = $datain->format("Y-m-d");
$checkout = $dataout->format("Y-m-d");
$sql = "INSERT INTO reservas VALUES(0,$id_quarto,'$checkin','$checkout',$valor,0)";
$sqlInsert = mysqli_query($conexao,$sql);
$sqlAtualiza = "UPDATE quartos SET status = 0 WHERE id = $id_quarto";
$sqlUpdate = mysqli_query($conexao,$sqlAtualiza);
?>
<script>alert("Reserva efetuada com sucesso!");</script>
<meta http-equiv="refresh" content="0;url = index.php">
