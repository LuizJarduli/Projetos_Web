<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de pessoa física</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="validarJ.php" method="POST">
		<fieldset>
			<legend>Pessoa física</legend>
			<label>Cadastre seus dados corretamente:</label><br><br>
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
</html>