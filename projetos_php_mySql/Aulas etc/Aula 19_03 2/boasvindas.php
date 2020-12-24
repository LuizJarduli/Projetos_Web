<?php 
session_start();
if (!isset($_SESSION["usuario"])) {
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
 	<p style="margin: 10 0; font: bold Arial 20px " align="center"> Seja bem-vindo,  <?php echo $_SESSION["usuario"]; ?></p>
 	<a href="sair.php">Sair</a>
</body>
</html>