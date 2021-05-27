<?php
    session_start();
    include_once("../db/conexao.php");

    $nome = $_SESSION['nome'];

    $_sql = $_pdo->prepare("SELECT * FROM usuarios WHERE nome = '$nome'");
    $_sql->execute();
    $_resultset = $_sql->fetchAll(PDO::FETCH_ASSOC);

    foreach($_resultset as $_line){
        $status = $_line['status'];
    }

    if($status == 'Inativo'){
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
                    Após algum administrador verificar se as informações inseridas são confiaveis e seguras, ele irá ativar seu perfil para que você possa ajudar milhares de pessoas!!
                </p>
            </div>
        </div>
        <div style="height: 150px; overflow: hidden;" id="rodapeCad"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #00a9ba;"></path></svg></div>
    </body>
</html>
<?php
             }else{
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
                <a href="quemsomos.php">Quem somos</a>
                <a href="listar_escola.php">Escolas</a>
                <a href="listar_profissionais.php">Profissionais</a>
                <a href="../chatpub/chat.php">Fórum</a>
                <a href="logout.php">Sair</a>
            </ul>
        </div>
        <center><br><img id="title" src="../img/titlesb.png"></center>
        <div class="alinhar">   
            <div class="caixa">
                <p>
                    Olá! <?php echo $nome ?><br>
                    O propósito do nosso site é ajudar pais e responsáveis a encontrar colégios e professores que estejam adeptos aos portadores!
                    <br>
                    Um administrador já verificou suas informações!
                    Agora seu perfil esta ativo e aparecerá na lista de profissionais!
                </p>
            </div>
        </div>
        <div style="height: 150px; overflow: hidden;" id="rodapeCad"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #00a9ba;"></path></svg></div>
    </body>
</html>
<?php
                  }
?>