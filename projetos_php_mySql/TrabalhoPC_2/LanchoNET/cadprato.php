<?php 
include_once "config.php"; // incluindo a pagina php com a conexão com o banco de dados
$arquivo = array(); // criando um vetor 

if(isset($_FILES['imgp']))
   {
      require 'lib/WideImage.php'; //Inclui classe WideImage à página

      date_default_timezone_set("Brazil/East");

      $name     = $_FILES['imgp']['name']; //Atribui uma array com os nomes dos arquivos à variável
      $tmp_name = $_FILES['imgp']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável

      $allowedExts = array(".gif", ".jpeg", ".jpg", ".png", ".bmp"); //Extensões permitidas

      $dir = 'img/';

      for($i = 0; $i < count($tmp_name); $i++) //passa por todos os arquivos
      {
         $ext = strtolower(substr($name[$i],-4));

         if(in_array($ext, $allowedExts)) //Pergunta se a extensão do arquivo, está presente no array das extensões permitidas
         {
            $new_name = date("Y.m.d-H.i.s") ."-". $i . $ext;

            $image = WideImage::load($tmp_name[$i]); //Carrega a imagem utilizando a WideImage

            $image->saveToFile($dir.$new_name); //Salva a imagem
            $arquivo[$i] = $dir.$new_name;
         }
      }
   }
   // recuperando os valores passados pelo método POST
   $nome = $_POST["nomep"];
   $descricao = $_POST['descricao'];
   $preco = $_POST["precop"];
   $fornecedor = $_POST['fornecedorp'];
   $data = new DateTime($_POST['datafabp']); // instanciando um objeto DateTime
   $data2 = new DateTime($_POST['datavalp']); // instanciando outro objeto DateTime
   $datafab = $data->format('Y-m-d'); // formatando o objeto criado para inserção correta ao banco
   $dataval = $data2->format('Y-m-d');// formatando o objeto criado para inserção correta ao banco

// comando insert
$sql = "INSERT INTO prato VALUES(0,'$nome','$arquivo[0]','$arquivo[1]','$arquivo[2]','$descricao','$fornecedor',$preco,'$datafab','$dataval')";
// executando o comando insert
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script>alert("Prato cadastrado com sucesso");</script>
<meta http-equiv="refresh" content="0;url=cadastro.php"> 

