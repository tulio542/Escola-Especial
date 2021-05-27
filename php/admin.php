
<?php
session_start();
include_once("../db/conexao.php");

	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = $_POST['email']; 
		$senha = $_POST['senha'];
		$senha = md5($senha);
			
		
		$result_admin = "SELECT * FROM admin WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        
		$resultado_admin = mysqli_query($conn, $result_admin);
		$resultado = mysqli_fetch_assoc($resultado_admin);
		
		
		if(isset($resultado)){
			$_SESSION['usuarioAdmin'] = $resultado['email'];
            $logado = $_SESSION['usuarioAdmin'];
            header("Location: aprovar_usuario.php");
		}else{	
			$_SESSION['loginErro'] = "<p style='color:red;'>Usuário ou senha Inválido</p>";
			
            header("Location: administrador.php");
		}
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: administrador.php");
        echo "ERRADO";
	}
?>
