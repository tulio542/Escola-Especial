<?php 

include '../db/conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome']; 
//$email = $_POST['email'];
$data = $_POST['data'];
$deficiencia = $_POST['deficiencia'];

$sql = "UPDATE `portador` SET `nomedef`='$nome',`data_nasc`= $data,`deficiencia`= '$deficiencia' WHERE portador_id = $id";
    
$atualiza = mysqli_query($conn,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width: 400px;"></div>
<center>
    <div style="margin-top: 30px;">
        <h3>Atualizado com sucesso!</h3>
    </div>
    <div style="margin-top: 10px;">
        <a href="menu.php" class="btn btn-sm btn-primary">Menu</a>
    </div>
</center>