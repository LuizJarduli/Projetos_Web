<?php 
include_once "config.php";
$arquivo = array();

if(isset($_FILES['foto']))
   {
      require 'lib/WideImage.php'; //Inclui classe WideImage à página

      date_default_timezone_set("Brazil/East");

      $name     = $_FILES['foto']['name']; //Atribui uma array com os nomes dos arquivos à variável
      $tmp_name = $_FILES['foto']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável

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

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$origem = array(".",",");
$troca = array("",".");
$diaria = str_replace($origem, $troca, $_POST["diaria"]);

$sql = "INSERT INTO quartos VALUES(0,'$nome','$descricao',$diaria,1,'$arquivo[0]','$arquivo[1]','$arquivo[2]')";
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script>alert("Quarto cadastrado com sucesso");</script>
<meta http-equiv="refresh" content="0;url=cadastro.php">