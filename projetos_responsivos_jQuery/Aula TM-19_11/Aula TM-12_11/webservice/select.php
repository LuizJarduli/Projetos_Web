<?php 
header('Access-Control-Allow-Origin: *');
include_once 'config.php';

$sql = "SELECT * FROM agenda ORDER BY nome";
$sqlSelect = mysqli_query($con,$sql);
?>
<table class=" table table-striped">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">E-mail</th>
			<th scope="col">Telefone</th>
		</tr>
	</thead>
	<tbody class="bg-white ">
		<?php 
		while ($agenda = mysqli_fetch_array($sqlSelect)) {
		?>
			<tr>
				<td scope="row"><?=$agenda['nome']?></td>
				<td scope="row"><?=$agenda['email']?></td>
				<td scope="row"><?=$agenda['telefone']?></td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>