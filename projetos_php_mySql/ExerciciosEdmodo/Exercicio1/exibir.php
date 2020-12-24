<meta charset="utf-8">
<?php 
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario != "etec" || $senha != "informatica") {
	echo "<script>
              alert('Usuário e/ou senha inválido(s)');
	      </script>";
	echo "<meta http-equiv=refresh content='0;url=index.php'>";
} else{
	echo "<script>
              alert('Logado com sucesso');
	      </script>";
	echo "<center>Seja bem-vindo ";
}
?>