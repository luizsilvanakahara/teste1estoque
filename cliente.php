<?php
	$sql = "SELECT * FROM cliente ORDER BY id";
	$res = mysqli_query($con,$sql);
?>



<h1  class="navbar-text" Clientes /h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				
				<th>Nome</th>
				
				<th>email</th>
				
				<th>fone</th>
			</tr>
		</thead>
		<?php
			if(mysqli_num_rows($res) >= 1){
				while($row = mysqli_fetch_array($res)){
					print"
					<tbody>
					
					<tr>
						<td>".$row["id"]."</td>
					
						<td><a href='?page=editar_cliente&id=".$row["id"]."'>".$row["nome"]."</a></td>
						
						<td>".$row["email"]."</td>
						
						<td>".$row["telefone"]."</td>
					
					</tr>
					
					</tbody>";
				}
			}
		?>
	</table>
</div>
