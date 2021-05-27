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
        <div id="menu2">
            <ul>
                <a href="../index.php">Home</a>
                <a href="quemsomos.php">Quem somos</a>
                <a href="cadastro.php">Cadastre-se</a>
            </ul>
        </div>
        <center><br><img id="title" src="../img/fa%C3%A7alog.png"></center>
        <div class="alinhar">   
            <div id="cadastroResp">
                    <form method="post" action="index1.php" name="formCadResp" id="idFormResp">

                    <p>
                        Email:&nbsp;&nbsp;<input class="campos" type="text" name="usuario" id="idnomeResp" required>
                    </p>
                    <p>
                        Senha:&nbsp;&nbsp;<input class="campos" type="password" name="senha" id="idemailResp" required>
                    </p>
                    <br><br>
                    <p>
                        <input class="botao" type="submit" name="btnCadastrar" id="idCadastrar" value="Logar">&nbsp;&nbsp;&nbsp;
<!--                            <h3><a href="cadastro.php">Cadastrar</a></h3>-->
                    </p>
                </form>                
                <?php
                    if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);   
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