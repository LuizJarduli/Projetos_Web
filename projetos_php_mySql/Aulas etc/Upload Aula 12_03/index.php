<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data"><!--enctype="multipart/formdata" -> atributo usado em formulários para criptografia, multipart é exclusico de arquivos  -->
		<fieldset>
			<label>Arquivo : </label>
			<input type="file" name="arquivo">
			<br><br>
			<input type="submit" value="Enviar">
		</fieldset>
		
		
	</form>
</body>
</html>