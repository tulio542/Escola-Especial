<?php 
include '../db/conexao.php';

$id = $_GET['id'];

$deletar = "DELETE FROM `usuarios` WHERE id_usuario = $id";
$fila = mysqli_query($conn, $deletar);

header("Location: aprovar_usuario.php");
?>