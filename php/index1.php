<?php
session_start();

include_once("../db/conexao.php");

if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
    $usuario = $_POST['usuario']; 
    $senha = $_POST['senha'];
    $senha = md5($senha);
    
    $_sql = $_pdo->prepare("SELECT * FROM usuarios WHERE mail_usuario = '$usuario' and senha_usuario = '$senha'");
    $_sql->execute();
    $_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);

    foreach($_resultset as $_line){
        $nome = $_line['nome'];
        $nivel = $_line['nivel_usuario'];
    }
    
    $_SESSION['nome'] = $nome;

    if($nivel == 1){
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['senha'] = $_POST['senha'];
        
        header("Location: homeEsc.php");
    }else if($nivel == 2){
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['senha'] = $_POST['senha'];
        
        header("Location: homeResp.php");
    }else if($nivel == 3){
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['senha'] = $_POST['senha'];
        
        header("Location: homeProf.php");
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: login.php");
    }
}else{
    $_SESSION['loginErro'] = "Usuário não cadastrado";
    header("Location: login.php");
}


?>