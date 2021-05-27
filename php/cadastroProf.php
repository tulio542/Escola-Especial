<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pr-BR">
    <head>
        <meta charset="UTF-8">
        <title>TCC</title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
        <script type="text/javascript" src="js/funcoes.js"></script>
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body>
        <div id="menu2">
            <ul>
                <a href="../index.php">Home</a>
                <a href="quemsomos.php">Quem somos</a>
                <a href="login.php">Login</a>
                <a href="cadastro.php">Cadastre-se</a>
            </ul>
        </div>
        <center><br><img id="title" src="../img/titlecadProf.png"></center>
        <div class="alinhar">
            <div id="cadastroProf">
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);   
                    }
                ?>
                <form method="post" action="processaprofissional.php" name="formCadResp" id="idFormResp">

                    <p>
                        Nome:&nbsp;&nbsp;<input class="campos" type="text" name="nome_prof" id="idnomeResp" required>
                    </p>
                    <p>
                        Email:&nbsp;&nbsp;<input class="campos" type="text" name="email_prof" id="idemailResp" required>
                    </p>
                    <p>Digite o CPF:&nbsp;&nbsp;<input id="cpf" type="text" onkeyup="cpfCheck(this)" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );" name="cpf_prof" class="campos"> <span id="cpfResponse"></span></p>

                    <p>
                        Celular:&nbsp;&nbsp;<input class="campos" type="text" name="telefone_prof" id="idtelefoneProf" placeholder="(XX)XXXX-XXXX" maxlength="14" required onkeypress="return somenteNumeros();" onkeydown="javascript: cMasc( this, mCel );"> 
                    </p>
                    <p>
                        Crie uma senha:&nbsp;&nbsp;<input class="campos" type="password" name="senha_prof" id="idsenhaResp" required>
                    </p>
                    <p>
                        Repita a senha:&nbsp;&nbsp;<input class="campos" type="password" name="repeteSenha_prof" id="idrepeteSenhaResp" required>
                    </p>
                    <br><br>
                    <p>
                        <input class="botao" type="submit" name="btnCadastrar" id="idCadastrar" value="Cadastrar" onclick="verifica()">&nbsp;&nbsp;&nbsp;
                    </p>
                </form>
            </div>
        </div>
        <div class="voltar">
            <a href="../index.php">Voltar para o site</a>
        </div>
        <div style="height: 150px; overflow: hidden;" id="rodapeCad"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #00a9ba;"></path></svg></div>
    </body>
</html>