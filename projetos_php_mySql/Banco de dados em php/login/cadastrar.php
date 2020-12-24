<meta charset="utf-8">
<?php 
include_once "config.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios(nome,email,senha) VALUES('$nome','$email','$senha')";// 1º etapa: criação do comando sql(no caso aqui o insert)
$sqlInsert = mysqli_query($conexao,$sql);// 2º etapa: mysqli_query é uma função para executar os comandos sql
?>
<script type="text/javascript">
	alert("Usuário cadastrado com sucesso");
</script>
<meta http-equiv="refresh" content="0;url=cadastro.php">