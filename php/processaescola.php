<?php

    session_start();

    include_once("../db/conexao.php");
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $repeteSenha = $_POST['repeteSenha'];
    $telefone = $_POST['telefone'];
    $acessibilidade = $_POST['acessibilidade'];
    
    $cep = mysqli_real_escape_string($conn, $_POST['cep']);
    $cep = str_replace('-','', $cep);
	$endereco = mysqli_real_escape_string($conn, $_POST['rua']);
	$bairro = mysqli_real_escape_string($conn, $_POST['bairro']);
	$numero = mysqli_real_escape_string($conn, $_POST['numero']);
	$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
	$estado = mysqli_real_escape_string($conn, $_POST['uf']);
	
    if($repeteSenha == $senha){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    $senha   = md5($senha);
    header("Location: cadastroEsc.php");
    }else{
    $_SESSION['msg'] = "<p style='color:red;'>Digite a mesma senha!</p>";
    header("Location: cadastroEsc.php");
    exit();
    }

    $result_end = "INSERT INTO endereco_escola (cep, endereco, bairro, numero, cidade, estado, created) VALUES ('$cep', '$endereco', '$bairro', '$numero', '$cidade', '$estado', NOW())";
    $resultado_end = mysqli_query($conn, $result_end); 
    
     $_sql = $_pdo->prepare("select * from endereco_escola where endereco_id = (select max(endereco_id) from endereco_escola)");
                    
                    $_sql->execute();
                    
                    $_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($_resultset as $_line)
                    {
                        $endereco = $_line['endereco_id'];                         
                    }

    $result_esc = "INSERT INTO escola (endereco_id, nome, email, senha, telefone, acessibilidade, data_cadastro) VALUES ('$endereco', '$nome', '$email', '$senha', '$telefone', '$acessibilidade', NOW())";
    $resultado_esc = mysqli_query($conn, $result_esc);
     $nivel = 1;
    $status = 'Inativo';
    $tipo = 'Escola';

    $result_usu = "INSERT INTO usuarios (tipo_usuario, nome, mail_usuario, senha_usuario, nivel_usuario, status) VALUES ('$tipo', '$nome', '$email', '$senha', '$nivel', '$status')";
    $resultado_usu = mysqli_query($conn, $result_usu);
    
    
    if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: cadastroEsc.php");
    }else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastroEsc.php");
    }
    
?>