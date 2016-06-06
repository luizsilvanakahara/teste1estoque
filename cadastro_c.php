<h1 class="page-header">Cadastrar Clientes</h1>
<fieldset style="color (#FF0000)">	
	<form class="form-group" role="form" action="?page=salvar&acao=cadastrar&cat=c" method="post">
		<div class="form-group">
			<label class="control-label col-sm-4" for="nome">Nome:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome">
			</div>
		</div>
		<div class="form-group" >
			<label class="control-label col-sm-4" for="email" >Email:</label>
			<div class="col-sm-10"> 
				<input type="email" class="form-control" id="email" name="email" placeholder="Insira o email">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-4" for="telefone">Telefone:</label>
			<div class="col-sm-10">
				<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Insira o telefone">
			</div>
		</div>
		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
				<a href="indexo.php">menu</a>
				<a href="salvar.php?&page=salvar&acao=cadastrar&cat=c">salvar</a>
				<p><input type="submit" /></p>		
				
				</button>
			</div>
		</div>
	</form>
</fieldset>
