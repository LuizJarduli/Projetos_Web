<meta charset="utf-8">
<?php
session_start(); // iniciando uma sessao
if (!isset($_SESSION["usuario"]) && !isset($_SESSION["senha"])) { // verificando a negação de algum valor dentro da super global session
   header("Location: login.php"); // caso sim, o usuário será redirecionado à página de login
} 
$_UP["pasta"] = 'img/';
$_UP["tamanho"] = 1024 * 1024 * 2;// este tamanho tem que ser informado em bytes.O php por padrão aceita até dois megabytes de tamanho de arquivos, para modificar no php.ini é a linha upload_max_filesize =2M
$_UP["extensoes"] = array('jpg','png','gif');
$_UP["renomeia"] = true;// vetor para mudar nome do arquivo(false), caso queira que o servidor mude o nome durante o processo é só definir true
$_UP["erros"][0] = "Não houve erros";
$_UP["erros"][1] = "O arquivo do upload é maior do que o limite do php";
$_UP["erros"][2] = "O arquivo ultrapassa o limite de tamanho especificado";
$_UP["erros"][3] = "O upload do arquivo foi feito parcialmente";
$_UP["erros"][4] = "Não foi feito o upload do arquivo";

if ($_FILES["img"]["error"] !=0) {// super global $_FILES é responsável por recuperar arquivos, é a única super global que é uma matriz
   die("não foi possével fazer upload, erro: ".$_UP["erros"][$_FILES["img"]["error"]]);
   exit; // para encerrar o código
}

$ext = explode('.', $_FILES["img"]["name"]);// explode é uma função que divide uma string e divide entre várias strings, primeiro coloca- se o caractere delimitador
$exten = end($ext);// função end pega o ultimo valor do vetor, no caso seria a extensão do arquivo
$extensao = strtolower($exten);// strtolower tranforma tudo em minúsculo

if (array_search($extensao, $_UP["extensoes"]) === false) {// array_search, procura o que voce quiser dentro de um vetor, seus parametros são : o vetor qu esta guardando o arquivo e o vetor que quero pesquisar as extensões, tres sinais de igualdade significa que se é igual e do mesmo tipo de dados.
   echo "Envie arquivos com as seguintes extensões: jpg, png ou gif";
   exit;
}
if ($_UP["tamanho"] < $_FILES["img"]["size"]) {
   echo "O arquivo enviado é maior que dois megas(2MB)";
   exit;
}
if ($_UP["renomeia"] == true) { // time() = pega a hora, minutos, segundos. Ano, Mês e dia tambem
   $nome_final =time().".jpg";

} else {
   $nome_final = $_FILES["img"]["name"];
}
if (move_uploaded_file($_FILES["img"]["tmp_name"], $_UP["pasta"].$nome_final)) {  //dentro de um if(se), move_upload precisa de dois parâmetros -> o lugar onde esta(local temporário) e o lugar para onde irá(local de destino)
   include_once "config.php"; // incluindo a pagina php com a conexão com o banco
   // recuperando valores passados pelo POST
   $nome = $_POST["nome"];
   $preco = $_POST["preco"];
   $fornecedor = $_POST['fornecedor'];
   $data = new DateTime($_POST['datafab']); // criando um objeto DateTime
   $data2 = new DateTime($_POST['dataval']);// Criando um objeto dateTime
   $datafab = $data->format('Y-m-d'); // formatando o objeto para inserção no banco
   $dataval = $data2->format('Y-m-d'); // formatando o objeto para inserção no banco
   $img = $_UP["pasta"].$nome_final;

   //comando insert
   $sql = "INSERT INTO bebidas VALUES(0,'$nome','$img','$fornecedor','$datafab','$dataval',$preco)";
   // executando o comando insert
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