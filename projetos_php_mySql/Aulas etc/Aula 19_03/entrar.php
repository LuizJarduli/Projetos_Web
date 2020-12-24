<meta charset="utf-8">
<?php 
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if (($usuario != "sales") || ($senha != "123")) {
	echo "<script>
			alert('Usuário e/ou senha inválido(s)');
	      </script>";
	echo "<meta http-equiv=refresh content='0;url=index.php'>";
} 
else{
	setcookie("usuario", $usuario, time()+60*60*24*30);
	echo "<script>
			alert('Entrada autorizada');
	      </script>";
	echo "<meta http-equiv=refresh content='0;url=boasvindas.php'>";
}
?>
