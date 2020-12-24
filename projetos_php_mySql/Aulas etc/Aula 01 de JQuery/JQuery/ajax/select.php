<meta charset="utf-8">
<?php 
header('Access-Control-Allow-Origin:*');
include 'config.php';
$sql = "SELECT * FROM nomes";
$sqlInsert = mysqli_query($conexao,$sql);
while ($linha = mysqli_fetch_assoc($sqlInsert)) {
?>
<tr>
	<td><?php echo $linha['id'] ?></td>
	<td><?php echo $linha['nome'] ?></td>
</tr><br>
<?php 
}
?>