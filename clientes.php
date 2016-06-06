<?php
	$sql = "SELECT * FROM cliente ORDER BY id";
	$res = mysqli_query($con,$sql);
?>
<h1 class="page-header">Clientes</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#oi</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Telefone</th>
			</tr>
		</thead>
		<?php
			if(mysqli_num_rows($res) >= 1){
				while($row = mysqli_fetch_array($res)){
					
					<tbody>
					<tr>
						<td>".$row["id"]."</td>
						<td><a href='?page=editar_c&id=".$row["id"]."'>".$row["nome"]."</a></td>
						<td>".$row["email"]."</td>
						<td>".$row["telefone"]."</td>
					</tr>
					</tbody>";
				}
			}
		?>
	</table>
</div>
