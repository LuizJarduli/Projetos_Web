<meta charset="utf-8">
<?php 
include_once("config.php");
$opcao = $_POST["opcao"];
if ($opcao == 1) {
	$matricula = $_POST["matricula"];
	$nome = $_POST["nome"];
	$curso = $_POST["curso"];
	$sql = "INSERT INTO alunos(matricula,nome,curso) VALUES('$matricula','$nome','$curso')";
	$sqlInsert = mysqli_query($conexao,$sql);
?>
<script>
	alert("Aluno cadastrado com sucesso!");
</script>
<meta http-equiv="refresh" content="0;url=cadaluno.php">
<?php
} else {
	$curso = $_POST["curso"];
	$periodo = $_POST["periodo"];
	$sql = "INSERT INTO cursos(nome,periodo) VALUES('$curso','$periodo')";
	$sqlInsert = mysqli_query($conexao,$sql);
?>
	<script>
		alert("Curso cadastrado com sucesso");
	</script>
	<meta http-equiv="refresh" content="0;url=cadcurso.php">

<?php 
}
?>