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
                <a href="login.php">Login</a>
                <a href="cadastro.php">Cadastre-se</a>
            </ul>
        </div>
        <center><br><img id="title" src="../img/titlecadPort.png"></center>
        <div class="alinhar">   
            <div id="cadastroResp">
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);   
                    }
                ?>
                <form method="post" action="processaresponsavel.php" name="formCadResp" id="idFormResp">

                    <p>
                        Nome:&nbsp;&nbsp;<input class="campos" type="text" name="nome" id="idnomeResp" required>
                    </p>
                    <p>
                        Email:&nbsp;&nbsp;<input class="campos" type="text" name="email" id="idemailResp" required>
                    </p>
                    <p>Digite o CPF:&nbsp;&nbsp;<input id="cpf" type="text" onkeyup="cpfCheck(this)" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );" name="cpf" class="campos"> <span id="cpfResponse"></span></p>
                    <p>
                       Celular:&nbsp;&nbsp;<input class="campos" type="text" name="telefone" id="idtelefoneResp" placeholder="(XX)XXXX-XXXX" maxlength="14" required onkeypress="return somenteNumeros();" onkeydown="javascript: cMasc( this, mCel );">  
                    </p>
                    <p>
                        Crie uma senha:&nbsp;&nbsp;<input class="campos" type="password" name="senha" id="idsenhaResp" required>
                    </p>
                    <p>
                        Repita a senha:&nbsp;&nbsp;<input class="campos" type="password" name="repeteSenha" id="idrepeteSenhaResp" required>
                    </p>
                    <br><br>
                    <p>
                        Nome do portador:&nbsp;&nbsp;<input class="campos" type="text" name="nomedef" id="idnomePort" required>
                    </p>
                    <p>
                        Idade do portador:&nbsp;&nbsp;<input class="campos" type="text" name="data_nasc" id="ididadePort" required>
                    </p>
                    <p>Genero do portador:
                    <input type="radio" name="genero" value="Masculino" checked id="botao" class="visual">Masculino
                    <input type="radio" name="genero" value="Feminino" id="botao" class="visual">Feminino
                    </p>
                    <p>Deficiencia:</p>
                    <p><input id="botao" type="radio" class="visual" name="deficiencia" checked value="Visual"> Visual&nbsp;&nbsp;
                    <input type="radio" class="auditiva" name="deficiencia" value="Auditiva">Auditiva 
                    <input type="radio" class="motora" name="deficiencia" value="Motora">Motora
                    <input type="radio" class="sindrome" name="deficiencia" value="Intelectual">Intelectual</p>
                            <br>
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