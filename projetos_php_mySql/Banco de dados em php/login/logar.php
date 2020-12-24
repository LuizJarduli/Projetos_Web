<?php
session_start() ;
include_once "config.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$sqlSelect = mysqli_query($conexao,$sql);

if (mysqli_num_rows($sqlSelect) == 1) { // mysqli_num_rows = função que irá contar o número de retornos da minha consulta
	$_SESSION["email"] = $email;
	$_SESSION["senha"] = $senha;
	header("Location: admin.php");
} else {
	unset($_SESSION["email"]);
	unset($_SESSION["senha"]);
?>
	<script type="text/javascript">
		alert("Usuário e/ou senha incorretos");
	</script>
	<meta http-equiv="refresh" content="0;url=index.php">

<?php 
 
       }

?>



