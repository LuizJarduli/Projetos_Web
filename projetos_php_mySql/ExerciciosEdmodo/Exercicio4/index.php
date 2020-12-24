<?php
if (!isset($_POST["dadocliente"])) {
 	# code...
  
echo '<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="index.php" method="POST">
		<fieldset>
			<legend>Cadastro Cliente</legend>
			<label>Cadastre seus dados corretamente:</label><br><br>
			<input type="radio" name="dadocliente" value="fisica" required>Pessoa Física &nbsp;&nbsp;
			<input type="radio" name="dadocliente" value="juridica" required>Pessoa Jurídica
			<br><br>
			<input type ="submit" value="Iniciar cadastro">';
		}
else{
	if ($_POST["dadocliente"] == "fisica") {

		echo '<!DOCTYPE html>
<html>
<head>
	<title> Cadastro Pessoa Física</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="exibirFisica.php" method="POST">
		<fieldset>
			<legend>Pessoa física</legend>
			<label>Cadastre seus dados corretamente:</label><br><br>
			<input type="button" value="Voltar" onclick="window.history.back();"><br><br>
			<input type="text" name="nome" required placeholder="Nome.."><br><br>
			<input type="number" name="telefone" required placeholder="Telefone.."><br><br>
			<input type="number" name="cpf" required placeholder="CPF.."><br><br>
			<input type="text" name="cidade" required placeholder="Cidade.."><br><br>
			<label>Selecione seu estado:</label>
			<select name="estado">
				<option>São paulo</option>
				<option>Minas gerais</option>
				<option>Espírito santo</option>
				<option>Rio de janeiro</option>
				<option>Mato grosso</option>
				<option>Mato grosso do sul</option>
				<option>Goiás</option>
				<option>Distrito Federal</option>
				<option>Santa Catarina</option>
				<option>Rio grande do Sul</option>
				<option>Paraná</option>
			</select>
			<br><br>
			<input type="password" name="senha" required placeholder="Digite uma senha.." required><br><br>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>
</body>
</html>';
	}
	else{
		echo '<html>
<head>
	<title>Cadastro de pessoa jurídica</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="exibirJuridica.php" method="POST">
		<fieldset>
			<legend>Pessoa jurídica</legend>
			<label>Cadastre seus dados corretamente:</label><br><br>
			<input type="button" value="Voltar" onclick="window.history.back();"><br><br>
			<input type="text" name="nome" required placeholder="Nome.."><br><br>
			<input type="text" name="nomeI" required placeholder="Estabelecimento/Indústria.."><br><br>
			<input type="number" name="telefone" required placeholder="Telefone.."><br><br>
			<input type="number" name="cnpj" required placeholder="CNPJ.."><br><br>
			<input type="text" name="cidade" required placeholder="Cidade.."><br><br>
			<label>Selecione seu estado:</label>
			<select name="estado">
				<option value="SP">São paulo</option>
				<option value="MG">Minas gerais</option>
				<option value="ES">Espírito santo</option>
				<option value="RJ">Rio de janeiro</option>
				<option value="MT">Mato grosso</option>
				<option value="MS">Mato grosso do sul</option>
				<option value="GO">Goiás</option>
				<option value="DF">Distrito Federal</option>
				<option value="SC">Santa Catarina</option>
				<option value="RS">Rio grande do Sul</option>
				<option value="PR">Paraná</option>
			</select>
			<br><br>
			<input type="password" name="senha" required placeholder="Digite uma senha.." required><br><br>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>
</body>
</html>';
	}
}
?>
