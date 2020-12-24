<?php 
$nome = $_GET["nome"];//super global $_GET é utilizada para recuperar dados visíveis ao usuário
unlink($nome);// unlink é utilizado para apagar arquivos(no caso as imagens da pagina upload)
header("Location:index.php");
?>