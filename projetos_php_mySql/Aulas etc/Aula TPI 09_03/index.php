<!DOCTYPE html>
<html>
<head>
	<title>Cálculo de Perímetro</title>
	<meta charset="utf-8">
</head>
<body>
<form action="header.php" method="POST">
	 <fieldset>
	 	<legend>Cálculo de perímetro</legend>
	 	<label>Escolha a figura: </label>
	 	<input type="radio" name="figura" value="quadrado" required>Quadrado &nbsp;&nbsp;
	 	<input type="radio" name="figura" value="retangulo" required>Retângulo
	 	<input type="radio" name="figura" value="ParaleloG" required>Paralelogramo
	 	<input type="radio" name="figura" value="trapezio" required>Trapézio
	 	<br><br>
	 	<input type="submit" value="Enviar">
	 </fieldset>
	
</form>
</body>
</html>