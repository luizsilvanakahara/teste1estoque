<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$bd   = "estoque";
	
	$con  = mysqli_connect($host,$user,$pass);
	
	mysqli_select_db($con,$bd);

?>
