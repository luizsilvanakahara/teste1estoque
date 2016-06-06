<?php
	$sql = "SELECT pedido.*, cliente.nome AS cli, produto.nome AS pro, produto.preco FROM pedido, cliente, produto WHERE id_produto = produto.id AND id_cliente = cliente.id";
	$res = mysqli_query($con,$sql);
?>
<h1 class="page-header">Pedidos</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Cliente</th>
				<th>Produto</th>
				<th>Preço</th>
			</tr>
		</thead>
		<?php
			if(mysqli_num_rows($res) >= 1){
				while($row = mysqli_fetch_array($res)){
					print ""
					<tbody>
					<tr>
						<td><a href='?page=editar_cliente&id=".$row["id_cliente"]."'>".$row["cli"]."</a></td>
						<td><a href='?page=editar_produto&id=".$row["id_produto"]."'>".$row["pro"]."</a></td>
						<td>".$row["preco"]."</td>
					</tr>
					</tbody>
				}
			}
		?>
	</table>
</div>
