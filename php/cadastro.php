<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TCC</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
    <script type="text/javascript" src="js/funcoes.js"></script>
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body>
        <div id="menu">
            <ul>
                <a href="../index.php">Home</a>
                <a href="quemsomos.php">Quem somos</a>
                <a href="login.php">Login</a>
            </ul>
        </div>
        <center><br><img id="titlemaior" src="../img/titlecad.png"></center>
        <div class="alinhar">
            <div id="cadastro">
                <img id="icon" src="../img/titleesc.png"><a href="cadastroEsc.php">Cadastrar escola</a><br>
                <img id="icon" src="../img/titleprof.png"><a href="cadastroProf.php">Cadastrar Profissional</a><br>
                <img id="icon" src="../img/titleport.png"><a href="cadastroResp.php">Cadastrar Portador</a>


                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);   
                    }
                ?>
            </div>
        </div>
        <div class="voltar">
            <a href="../index.php">Voltar para o site</a>
        </div>
        <div style="height: 150px; overflow: hidden;" id="rodapeCad"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #00a9ba;"></path></svg></div>
    </body>
</html>