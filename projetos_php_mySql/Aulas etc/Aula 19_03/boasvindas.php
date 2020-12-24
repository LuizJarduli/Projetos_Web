<?php 
if (!isset($_COOKIE["usuario"])) {
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
 	<p style="margin: 10 0; font: bold Arial 20px " align="center">
 	Seja bem vindo <?php  echo $_COOKIE["usuario"]; ?></p>
</body>
</html>