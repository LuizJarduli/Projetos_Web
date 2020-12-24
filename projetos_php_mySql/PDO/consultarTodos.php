<?php 

	include_once "conexao.php";

	$sql = "SELECT * FROM contato";
	$comando  = $con->prepare($sql);
	$comando->execute();
	$todos =  $comando->fetchAll();
	foreach ($todos as $registro) {
		//pegando os valores de cada campo
		?>
		<style type="text/css">
			a{
				text-decoration: none;
				color: #000;
			}
		</style>
		<table style="border: 1px solid #000">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col">Telefone</th>
					<th scope="col">Cidade</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $registro['nome']; ?></td>
					<td><?php echo $registro['email']; ?></td>
					<td><?php echo $registro['telefone']; ?></td>
					<td><?php echo $registro['cidade']; ?></td>
					<td><button type="button">
						<a href="excluir.php?id=<?php echo $registro['idcontato']; ?>">Excluir</a></button></td>
				</tr>
			</tbody>
		</table>
		<?php
	}
?>