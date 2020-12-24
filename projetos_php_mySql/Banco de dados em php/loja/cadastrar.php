<meta charset="utf-8">
<?php 
$_UP["pasta"] = 'img/';
$_UP["tamanho"] = 1024 * 1024 * 2;
$_UP["extensoes"] = array('jpg','png','gif');
$_UP["renomeia"] = true;
$_UP["erros"][0] = "Não houve erros";
$_UP["erros"][1] = "O arquivo do upload é maior do que o limite do php";
$_UP["erros"][2] = "O arquivo ultrapassa o limite de tamanho especificado";
$_UP["erros"][3] = "O upload do arquivo foi feito parcialmente";
$_UP["erros"][4] = "Não foi feito o upload do arquivo";

if ($_FILES["foto"]["error"] !=0) {
	die("não foi possével fazer upload, erro: ".$_UP["erros"][$_FILES["foto"]["error"]]);
	exit;
}

$ext = explode('.', $_FILES["foto"]["name"]);
$exten = end($ext);
$extensao = strtolower($exten);

if (array_search($extensao, $_UP["extensoes"]) === false) {
	echo "Envie arquivos com as seguintes extensões: jpg, png ou gif";
	exit;
}
if ($_UP["tamanho"] < $_FILES["foto"]["size"]) {
	echo "O arquivo enviado é maior que dois megas(2MB)";
	exit;
}
if ($_UP["renomeia"] == true) {
	$nome_final =time().".jpg";

} else {
	$nome_final = $_FILES["foto"]["name"];
}
if (move_uploaded_file($_FILES["foto"]["tmp_name"], $_UP["pasta"].$nome_final)) {
	include_once "config.php";
	$marca = $_POST["marca"];
	$modelo = $_POST["modelo"];
	$preco = $_POST["preco"];
	$foto = $_UP["pasta"].$nome_final;

	$sql = "INSERT INTO produtos(marca,modelo,preco,foto) VALUES('$marca','$modelo','$preco','$foto')";
	$sqlInsert = mysqli_query($conexao,$sql);
?>
	<script type="text/javascript">
		alert("Produto cadastrado com sucesso");	
	</script>
	<meta  http-equiv="refresh" content="0;url=cadastro.php">
<?php

} else{
	echo "Não foi possível enviar o arquivo, tente novamente";
}
?>