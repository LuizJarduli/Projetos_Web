<?php 
include_once "config.php"; // incluindo a pagina php coma conexão com o banco de dados

//recuperando os dados passados pela super global POST
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$username = $_POST["username"];
$senha = $_POST["senha"];

// comando insert
$sqlInsert = "INSERT INTO admin VALUES(0,'$nome','$email','$cpf','$username','$senha')";
// executando o comando insert com o mysqli_query que recebe o banco e o comando sql como parâmetros
$sqlexecuta = mysqli_query($conexao,$sqlInsert);
?>
<script>
	alert("Registro efetuado com sucesso!");
</script>
<meta http-equiv="refresh" content="0;url=admin.php">