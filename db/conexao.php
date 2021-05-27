<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "banco";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
 mysqli_select_db($conn,$dbname) or die (mysqli_error());

    try{
        $_pdo = new
            PDO("mysql:host=localhost;dbname=banco","root","");
    }



catch(PDOException $_e){
    var_dump($_e);
    echo $_e->getMessage();
    
    echo "<br>";

    echo $_e->getCode();
}
