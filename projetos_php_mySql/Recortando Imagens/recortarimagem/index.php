<?php
if(isset($_POST["imagem"])){
//Local onde a imagem deverá ser salva
$local = '../upload/usuario/';
//Script para transformar códificação em Imagem JPEG
$image_parts = explode(";base64,", $_POST['imagem']);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
//Criando um nome único para a imagem
$nome = uniqid() . '.jpg';
//Definindo endereço e nome do arquivo a ser salvo
$file = $local . $nome;
//Transferindo arquivo para pasta definida
file_put_contents($file, $image_base64);

echo '<script>parent.fecharEscolha("'.$nome.'", true);</script>';
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Enviar imagem</title>
		<link rel="stylesheet" type="text/css" href="../vendor/croppie/croppie.css">		
		<script type="text/javascript" src="../vendor/jquery/jquery.js"></script>			
		<script type="text/javascript" src="enviar.js"></script>
		<script type="text/javascript" src="../vendor/croppie/croppie.js"></script>
	</head>
	<body>
		<div id="area-escolher">				
				<label>Selecionar imagem</label>
				<input type='file' name="arquivo" accept="image/*" id="upload"> 					
			<br/><br/>
		</div>
		<div id="limite">		
			<input type="button" value="Recortar" class="enviar button green"/> <input type="button" value="Outra imagem" class="cancelar button red"/><br/><br/>
			<!-- Região onde será mostrada a área de recorte / Começar Invisível -->
	    	<div id="upload-area" style="display:none;"></div>    	    
		</div>		
	    <form action="index.php" method="post" class="resultado">	    	    
		    <input type="button" value="Escolher outra imagem" class="cancelar button blue"/>
		    <br/>
		    <br/>
	    </form>
	</body>
</html>