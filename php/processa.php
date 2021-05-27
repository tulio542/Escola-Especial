<?php
	include_once("../db/conexao.php");
	
	$cep = mysqli_real_escape_string($conn, $_POST['cep']);
	$endereco = mysqli_real_escape_string($conn, $_POST['rua']);
	$bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
	$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
	$estado = mysqli_real_escape_string($conn, $_POST['uf']);
	
	$result_end = "INSERT INTO endereco_escola (
		cep, 
		endereco, 
		bairro, 
		cidade, 
		estado, 
		created) VALUES (
		'$cep', 
		'$endereco', 
		'$bairro', 
		'$cidade', 
		'$estado',  
		NOW())";
		$resultado_end = mysqli_query($conn, $result_end); 
?>