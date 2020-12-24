<!DOCTYPE html>
<html>
<head>
	<title>Exercício 2</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="exibirdados.php" method="POST">
		<fieldset>
			<legend>Preencha os campos abaixo corretamente</legend>
			<input type="text" name="nome" placeholder="Nome.." required>
			<br><br>
			<input type="email" name="email" placeholder="Email.." required>
			<br><br>
			<input type="date" name="dataN" placeholder="Data de nascimento.." required>
			<br><br>
			<label>Selecione a bandeira do seu cartão de crédito: </label><br>
			<select name="bandeira" required>
				<option>Visa</option>
				<option>MasterCard</option>
				<option>Amrecian Express</option>
				<option>Elo</option>
				<option>Discover Network</option>
			</select>
			<input type="submit" value="Enviar">
		</fieldset>
	</form>
</body>
</html>