<meta charset="utf-8">
<?php 
include_once "conexao.php";

$nome = $_POST["nome"];
$autor = $_POST["autor"];
$genero = $_POST["genero"];

$sql = "INSERT INTO livros(nome,autor,genero) VALUES('$nome','$autor','$genero')";
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
	alert("Usuário cadastrado com sucesso");
</script>
<meta http-equiv="refresh" content="0;url=index.php">