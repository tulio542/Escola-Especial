<?php
session_start();
$nome = $_SESSION['nome'];
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
                <a href="listar_escola.php">Escolas</a>
                <a href="listar_profissional.php">Profissionais</a>
                <a href="../chatpub/chat.php">Fórum</a>
                <a href="logout.php">Sair</a>
            </ul>
        </div>
        <center><br><img id="title" src="../img/titlesb.png"></center>
        <div class="alinhar">   
            <div class="caixa">
                <p>
                    Olá! <?php echo $nome ?>
                    O propósito do nosso site é ajudar pais e responsáveis a encontrar colégios e professores que estejam adeptos aos portadores!
                    <br>
                    No menu, vocês tem a opção de verificar os profissionais e as escolas cadastradas!
                    <br>
                    Esperamos conseguir ajudar!
                </p>
            </div>
        </div>
        <div style="height: 150px; overflow: hidden;" id="rodapeCad"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #00a9ba;"></path></svg></div>
    </body>
</html>