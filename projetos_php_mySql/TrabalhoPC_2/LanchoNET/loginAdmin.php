<?php 
session_start(); // inciando uma sessão
include_once "config.php"; // incluindo a página php com a conexão com o banco de dados

//recuperando valores passados pelo método POST
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//comando select
$sql = "SELECT * FROM admin WHERE nome_usuario = '$usuario' AND senha= '$senha'";
//executando o comando select
$sqlexecuta = mysqli_query($conexao,$sql);
if (mysqli_num_rows($sqlexecuta) == 1) { // mysqli_num_rows retorna o numero de registros retornados, neste caso o código só será executado caso a consulta retorne apenas um registro
	// atribuindo valores para a super global session
	$_SESSION["usuario"] = $usuario;
	$_SESSION["senha"] = $senha;
	header("Location: admin.php"); // redirecionando o usuário para a página do admin
} else {
	 // caso retorne mais de um registro a variável super global session terá seus valores apagados
	unset($_SESSION["usuario"]);
	unset($_SESSION["senha"]);
?>
	<script>
		alert("Usuário e/ou senha Incorretos");
	</script>
	<meta http-equiv="refresh" content="0;url=login.php">

<?php
	}
?>