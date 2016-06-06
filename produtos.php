<?php
	$sql = "SELECT * FROM produto ORDER BY id";
	$res = mysqli_query($con,$sql);
?>
<h1 class="page-header">Produtos</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>nome</th>
				<th>descrição</th>
				<th>preço</th>
			</tr>
		</thead>
		<?php
			if(mysqli_num_rows($res) >= 1){
				while($row = mysqli_fetch_array($res)){
					
					<tbody>
					<tr>
						<td>".$row["id"]."</td>
						<td><a href='?page=editar_p&id=".$row["id"]."'>".$row["nome"]."</a></td>
						<td>".$row["descricao"]."</td>
						<td>R$ ".$row["preco"]."</td>
					</tr>
					</tbody>
					;
				}
			}
		?>
	</table>
</div>
