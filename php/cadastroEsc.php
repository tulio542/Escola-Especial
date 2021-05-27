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
        <center><br><img id="titlemaior" src="../img/titlecadEsc.png"></center>
        <div class="alinhar">
            <div id="cadastroEsc">
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);   
                    }
                ?>
                <form method="post" action="processaescola.php" name="formCadResp" id="idFormResp">
                    <p>
                        Nome:&nbsp;&nbsp;<input class="campos" type="text" name="nome" id="idnomeEsc" required>
                    </p>
                    <p>
                        Email:&nbsp;&nbsp;<input class="campos" type="text" name="email" id="idemailEsc" required>
                    </p>
                    <p>
                        Telefone:&nbsp;&nbsp;<input class="campos" type="text" name="telefone" id="idtelefoneEsc" placeholder="(XX)XXXX-XXXX" maxlength="13" required required onkeypress="return somenteNumeros();" onkeydown="javascript: telMasc( this, mTel );"> 
                    </p>
                    <p>
                        Cep:&nbsp;&nbsp;<input class="campos" name="cep" type="text" id="idcepEsc" value="" size="10" maxlength="9" placeholder="XXXXX-XXX" onblur="pesquisacep(this.value);" onkeypress="return somenteNumeros();" onkeydown="javascript: cepMasc( this, mCep );"/>
                    </p>
                    <p>
                        Rua:&nbsp;&nbsp;<input class="campos" name="rua" type="text" id="idruaEsc" size="60"/>
                    </p>
                    <p>
                        Bairro:&nbsp;&nbsp;<input class="campos" name="bairro" type="text" id="idbairroEsc" size="40"/>
                    </p>
                    <p>
                        Numero:&nbsp;&nbsp;<input class="campos" name="numero" type="text" id="idbairroEsc" size="40"/>
                    </p>
                    <p>
                        Cidade:&nbsp;&nbsp;<input class="campos" name="cidade" type="text" id="idcidadeEsc" size="40"/>
                    </p>
                    <p>
                        Estado:&nbsp;&nbsp;<input class="campos" name="uf" type="text" id="idufEsc" size="2"/>
                    </p>
                    <p>
                        Senha:&nbsp;&nbsp;<input class="campos" type="password" name="senha" id="idpasswordEsc" required>
                    </p>
                    <p>
                        Digite a senha novamente:&nbsp;&nbsp;<input class="campos" type="password" name="repeteSenha" id="idrepetesenhaEsc" required>
                    </p>
                    <br><br>
                    <p>Possui suporte para quais necessidades?<br><br>
                        <input class="styleCheck" id="check1" name="acessibilidade" type="checkbox" value="Intelectual">
                        <label for="check1">Intelectual</label>
                        <br><br>
                        <input class="styleCheck" id="check2" name="acessibilidade" type="checkbox" value="Visual">
                        <label for="check2">Visual</label>
                        <br><br>
                        <input class="styleCheck" id="check3" name="acessibilidade" type="checkbox" value="Motora">
                        <label for="check3">Motora</label>
                        <br><br>
                        <input class="styleCheck" id="check4" name="acessibilidade" type="checkbox" value="Auditiva">
                        <label for="check4">Auditiva</label>
                    </p>
                    <br><br><br>
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