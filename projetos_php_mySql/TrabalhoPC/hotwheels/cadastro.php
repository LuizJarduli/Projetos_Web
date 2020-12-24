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

if ($_FILES["img"]["error"] !=0) {
	die("não foi possével fazer upload, erro: ".$_UP["erros"][$_FILES["img"]["error"]]);
	exit;
}

$ext = explode('.', $_FILES["img"]["name"]);
$exten = end($ext);
$extensao = strtolower($exten);

if (array_search($extensao, $_UP["extensoes"]) === false) {
	echo "Envie arquivos com as seguintes extensões: jpg, png ou gif";
	exit;
}
if ($_UP["tamanho"] < $_FILES["img"]["size"]) {
	echo "O arquivo enviado é maior que dois megas(2MB)";
	exit;
}
if ($_UP["renomeia"] == true) {
	$nome_final =time().".jpg";

} else {
	$nome_final = $_FILES["img"]["name"];
}
if (move_uploaded_file($_FILES["img"]["tmp_name"], $_UP["pasta"].$nome_final)) {

		include_once 'conexao.php';
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$qtd = $_POST['qtd'];
		$imgcarrinho = $_UP["pasta"].$nome_final;

		$sql = "INSERT INTO carrinho VALUES(0,:nome,:imgcarrinho,:preco,:qtddisponivel)";

		$sqlInsert = $con->prepare($sql);

		$sqlInsert->bindParam(":nome",$nome);
		$sqlInsert->bindParam(":imgcarrinho",$imgcarrinho);
		$sqlInsert->bindParam(":preco",$preco);
		$sqlInsert->bindParam(":qtddisponivel",$qtd);

		if ($sqlInsert->execute()) {
		?>
			<script>
				alert("Cadastro efetuado com sucesso");
			</script>
		<?php
		} else {
			?>
			<script>
				alert("Erro ao cadastrar");
			</script>
		<?php
		}
}
?>
<meta http-equiv="refresh" content="0;url=cadastrocarrinho.php">
            





















