<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="js/scripts.js"></script>
		
		<title>Estoque</title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<?php include("config.php"); ?>
	
		
	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    cadastro
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
  <li><a href="?page=Produto">lista produto</a></li>
  <li><a href="?page=Cliente">lista cliente</a></li>
  <li role="separator" class="divider"></li>
  <li><a href="?page=cadastrar_produto">cadastra produto</a></li>
  <li><a href="?page=cadastrar_cliente">cadastra cliente</a></li>
  <li role="separator" class="divider"></li>
  <li><a href="?page=edita_produto">edita_produto</a></li>
  <li><a href="?page=edita_cliente">edita_cliente</a></li>
 
  </ul>
</div>
		
		
		
		<div class="container">
		
		

			<?php  
					if(isset($_REQUEST["page"])){
						switch($_REQUEST["page"]){
							case "Produto":
								include("produtos.php"); 
							break;
							case "Cliente":
								include("clientes.php"); 
							break;
							case "busca":
								include("busca.php"); 
							break;
							case "edita_produto":
								include("editar_p.php"); 
							break;
							case "edita_cliente":
								include("editar_c.php"); 
							break;
						
							case "cadastrar_produto":
								include("cadastro_p.php"); 
							break;
							case "cadastrar_cliente":
								include("cadastro_c.php"); 
							break;
							default:
								include("produtos.php"); 
						}
					}else include("produtos.php");
				?>
		</div>

	
		
	</body>
</html>
