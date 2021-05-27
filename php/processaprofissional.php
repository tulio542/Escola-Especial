<?php
session_start();
include_once("../db/conexao.php");
$nome_prof = $_POST['nome_prof'];
$email_prof = $_POST['email_prof'];
$cpf_prof = $_POST['cpf_prof'];
$telefone_prof = $_POST['telefone_prof'];
$senha_prof = $_POST['senha_prof'];
$repeteSenha_prof = $_POST['repeteSenha_prof'];


if($repeteSenha_prof == $senha_prof){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    $senha_prof = md5($senha_prof);
    header("Location: cadastroProf.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Digite a mesma senha!</p>";
    header("Location: cadastroProf.php");
    exit();
}

$status = 'Inativo';

$result_profissional = "INSERT INTO profissional (nome_prof, email_prof, cpf_prof, telefone_prof, senha_prof, data_cadastro) VALUES ('$nome_prof', '$email_prof', '$cpf_prof', '$telefone_prof', '$senha_prof', NOW())";
$resultado_profissional = mysqli_query($conn, $result_profissional);
    $nivel = 3;
    
    $tipo_prof = 'Profissional';

    $result_usu = "INSERT INTO usuarios (tipo_usuario, nome, mail_usuario, senha_usuario, nivel_usuario, status) VALUES ('$tipo_prof', '$nome_prof', '$email_prof', '$senha_prof', '$nivel','$status')";
    $resultado_usu = mysqli_query($conn, $result_usu);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: cadastroProf.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastroProf.php");
}

?>