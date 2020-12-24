<!DOCTYPE html>
<html>
<head>
	<title>Exercício 5</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="exibir.php" method="POST">
		<fieldset>
			<legend>Cadastro de um novo produto</legend>
			<label>Nome do produto: </label>
			<input type="text" name="nome" required><br><br>
			<label>Tipo de produto: </label>
			<select name="tipo">
				<option>Eletrodoméstico</option>
				<option>Higiene Pessoal</option>
				<option>Limpeza</option>
				<option>alimentício</option>
				<option>Eletrônico Industrial</option>
				<option>Mesa e banho</option>
				<option>Lazer</option>
				<option>Outros</option>
			</select>
			<br><br>
			<label>Público alvo: </label><br>
			<input type="radio" name="publico" value="infantil" required>Infantil &nbsp;&nbsp;<br>
			<input type="radio" name="publico" value="infantojuvenil" required>Infanto-juvenil<br>
			<input type="radio" name="publico" value="adulto" required>Adulto<br>
			<input type="radio" name="publico" value="idoso" required>Idosos<br>
			<input type="radio" name="publico" value="industria" required>Indústria<br><br>
			<label>Preço: </label>
			<input type="number" name="preco" required><br><br>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>
</body>
</html>