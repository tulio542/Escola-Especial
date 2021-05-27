<?php

session_start();

include_once("../db/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$repeteSenha = $_POST['repeteSenha'];

$nomedef = $_POST['nomedef'];
$data_nasc = $_POST['data_nasc'];
$genero = $_POST['genero'];
$deficiencia = $_POST['deficiencia'];
//$endereco = $_POST['endereco'];

//50317829866

if(empty($nome) || empty($email) || empty($cpf) || empty($telefone) || empty($senha) || empty($repeteSenha) || empty($nomedef) || empty($data_nasc) || empty($genero) || empty($deficiencia)){
    $_SESSION['msg'] = "<p style='color:red;'>Preencha todos os campos!</p>";
    header("Location: cadastroResp.php");
    exit();
}

if($repeteSenha == $senha){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    $senha = md5($senha);
    header("Location: cadastroResp.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Digite a mesma senha!</p>";
    header("Location: cadastroResp.php");
    exit();
}


$result_def = "INSERT INTO portador (nomedef, data_nasc, genero, deficiencia, data_cadastrado) VALUES ('$nomedef', '$data_nasc', '$genero', '$deficiencia', NOW())";
$resultado_def = mysqli_query($conn, $result_def);


 $_sql = $_pdo->prepare("select * from portador where portador_id = (select max(portador_id) from portador)");
                    
                    $_sql->execute();
                    
                    $_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($_resultset as $_line)
                    {
                        $portador = $_line['portador_id'];                         
                    }


$result_usuario = "INSERT INTO responsavel (portador_id, nome, email, data_cadastro, cpf, telefone, senha) VALUES ('$portador', '$nome', '$email', NOW(), '$cpf', '$telefone', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$status = 'Ativo';
$nivel = 2;
    $tipo = 'Responsavel';

    $result_usu = "INSERT INTO usuarios (tipo_usuario, nome, mail_usuario, senha_usuario, nivel_usuario, status) VALUES ('$tipo', '$nome', '$email', '$senha', '$nivel','$status')";
    $resultado_usu = mysqli_query($conn, $result_usu);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: cadastroResp.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastroResp.php");
}
