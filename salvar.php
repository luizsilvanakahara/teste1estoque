<?php

	switch($_REQUEST["acao"]){
		case "editar":
			switch($_REQUEST["cat"]){
				case "c":
					$nome = $_REQUEST["nome"];
					$email = $_REQUEST["email"];
					$telefone = $_REQUEST["telefone"];
					$sql = "UPDATE cliente SET
								nome = '".$nome."',
								email = '".$email."',
								telefone = '".$telefone."'
							WHERE id = ".$_REQUEST["id"]."
						";
					$res = mysqli_query($con,$sql);
					if($res == true){
						print "<script>alert('Editado');</script>";
						print "<script>location.href='?page=editar_cliente&id=".$_REQUEST["id"]."';</script>";
					}else{
						print "Não editou<br>";
						print $sql;
					}
				break;
				case "p":
					$nome = $_REQUEST["nome"];
					$preco = $_REQUEST["preco"];
					$descricao = $_REQUEST["descricao"];
					$sql = "UPDATE produto SET
								nome = '".$nome."',
								preco = '".$preco."',
								descricao = '".$descricao."'
							WHERE id = ".$_REQUEST["id"]."
						";
					$res = mysqli_query($con,$sql);
					if($res == true){
						print "<script>alert('alterado');</script>";
						print "<script>location.href='?page=editar_produto&id=".$_REQUEST["id"]."';</script>";
					}else{
						print "não foi aletardo<br>";
						print $sql;
					}
				break;
			}
		break;
		
		case "excluir":
			switch($_REQUEST["cat"]){
				case "c":
					$sql = "DELETE FROM cliente 
					WHERE id = ".$_REQUEST["id"];
					$res = mysqli_query($con,$sql);
					if($res == true){
						print "<script>alert('Excluído  com sucesso');</script>";
						
						print "<script>location.href='index.php?page=Clientes';</script>";
					}else{
						print "não foi excluido<br>";
						print $sql;
					}
				break;
				case "p":
					$sql = "DELETE FROM produto 
					WHERE id = ".$_REQUEST["id"];
					$res = mysqli_query($con,$sql);
					if($res == true){
						print "<script>alert('Excluír');</script>";
						print "<script>location.href='index.php?page=Produtos';</script>";
					}else{
						print "não foi excluido<br>";
						print $sql;
					}
				break;

			}
		break;
		
		case "cadastrar":
			switch($_REQUEST["cat"]){
				case "c":
					$nome = $_REQUEST["nome"];
					$email = $_REQUEST["email"];
					$telefone = $_REQUEST["telefone"];
					$sql = "INSERT INTO cliente (nome, email, telefone) 
							VALUES ('".$nome."', '".$email."', '".$telefone."')
						";
					$res = mysqli_query($con,$sql);
					if($res == true){
						print "<script>alert('Cadastrar');</script>";
						print "<script>location.href='index.php?page=Clientes';</script>";
					}else{
						print "não cadastrou<br>";
						print $sql;
					}
				break;
				case "p":
					$nome = $_REQUEST["nome"];
					$preco = $_REQUEST["preco"];
					$descricao = $_REQUEST["descricao"];
					$sql = "INSERT INTO produto (nome, preco, descricao) 
							VALUES ('".$nome."','".$preco."','".$descricao."')
						";
					$res = mysqli_query($con,$sql);
					if($res == true){
						print "<script>alert('Cadastrado');</script>";
						print "<script>location.href='index.php?page=Produtos';</script>";
					}else{
						print "não cadastrou<br>";
						print $sql;
					}
				break;
			}
		break;

	}

?>
