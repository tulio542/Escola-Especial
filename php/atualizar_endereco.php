<?php 

include '../db/conexao.php';

    $id = $_POST['id'];
    $cep = $_POST['cep']; 
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];


$sql = "UPDATE `endereco_escola` SET `cep`='$cep', `endereco`= '$endereco', `numero`= '$numero', `bairro`= '$bairro', `cidade`= '$cidade', `estado`= '$estado'  WHERE endereco_id = $id";
    
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