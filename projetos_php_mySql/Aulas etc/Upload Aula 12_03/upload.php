<?php 
$_UP["pasta"] = 'upload/';
$_UP["tamanho"] = 1024 * 1024 * 2; // este tamanho tem que ser informado em bytes.O php por padrão aceita até dois megabytes de tamanho de arquivos, para modificar no php.ini é a linha upload_max_filesize =2M
$_UP["extensoes"] = array('jpg','png','gif');
$_UP["renomeia"] = false;// vetor para mudar nome do arquivo(false), caso queira que o servidor mude o nome durante o processo é só definir true
$_UP["erros"][0] = "Não houve erros";
$_UP["erros"][1] = "O arquivo do upload é maior do que o limite do php";
$_UP["erros"][2] = "O arquivo ultrapassa o limite de tamanho especificado";
$_UP["erros"][3] = "O upload do arquivo foi feito parcialmente";
$_UP["erros"][4] = "Não foi feito o upload do arquivo";

if ($_FILES["arquivo"]["error"] !=0) {// super global $_FILES é responsável por recuperar arquivos, é a única super global que é uma matriz
	die("não foi possével fazer upload, erro: ".$_UP["erros"][$_FILES["arquivo"]["error"]]);
	exit; // para encerrar o código
}

$ext = explode('.', $_FILES["arquivo"]["name"]);// explode é uma função que divide uma string e divide entre várias strings, primeiro coloca- se o caractere delimitador
$exten = end($ext);// função end pega o ultimo valor do vetor, no caso seria a extensão do arquivo
$extensao = strtolower($exten);// strtolower tranforma tudo em minúsculo

if (array_search($extensao, $_UP["extensoes"]) === false) { // array_search, procura o que voce quiser dentro de um vetor, seus parametros são : o vetor qu esta guardando o arquivo e o vetor que quero pesquisar as extensões, tres sinais de igualdade significa que se é igual e do mesmo tipo de dados.
	echo "Envie arquivos com as seguintes extensões: jpg, png ou gif";
	exit;
}
if ($_UP["tamanho"] < $_FILES["arquivo"]["size"]) {
	echo "O arquivo enviado é maior que dois megas(2MB)";
	exit;
}
if ($_UP["renomeia"] == true) {
	$nome_final =time()."jpg"; // time() = pega a hora, minutos, segundos. Ano, Mês e dia tambem

} else {
	$nome_final = $_FILES["arquivo"]["name"];// $_FILES["arquivo"]["name"] ele guarda o nome completo do arquivo no servidor neste caso
}
if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $_UP["pasta"].$nome_final)) { // detalhe importante é colocar move_upload dentro de um if(se), move_upload precisa de dois parâmetros -> o lugar onde esta(local temporário) e o lugar para onde irá(local de destino)
	echo "Upload efetuado com sucesso!<br/>";
	echo '<a href="'.$_UP["pasta"].$nome_final.'">Clique aqui para acessar o arquivo<a/><br/><br/>';
	echo '<a href="apagar.php?nome='.$_UP["pasta"].$nome_final.'">Apagar<a/>';
} else{
	echo "Não foi possível enviar o arquivo, tente novamente";
}
?>