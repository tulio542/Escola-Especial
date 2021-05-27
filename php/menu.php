<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body>

<?php 

session_start();

//$usuario = $_SESSION['usuario'];

if(isset($_SESSION['usuarioAdmin'])){



?>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="menu.php" style="font-weight: 700;"><i class="fab fa-php"></i>&nbsp; Find Inclusion</a>
        </div>
    </nav>
    <div class="container" style="margin-top:25px;">
        <div class="row">
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></i>&nbsp;Lista de Escolas</h5>
                        <p class="card-text">Edite, liste e adicione exclua as Escolas.</p>
                        <a href="listar_escolas.php" class="btn btn-sm btn-primary">Listar</a>
                    </div>
                </div>
            </div>
            
            
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></i>&nbsp Listar Portadores</h5>
                        <p class="card-text">Edite, liste e adicione exclua os Portadores e Responsaveis.</p>
                        <a href="listar_portador.php" class="btn btn-sm btn-primary">Listar</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></i>&nbsp Listar Profissionais</h5>
                        <p class="card-text">Edite, liste e adicione exclua os Profissionais.</p>
                        <a href="listar_profissionais.php" class="btn btn-sm btn-primary">Listar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></i>&nbsp Aprovar usuários</h5>
                        <p class="card-text">Aprove os usuários que se cadastraram no sistema por meio externo.</p>
                        <a href="aprovar_usuario.php" class="btn btn-sm btn-primary">Exibir lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/cae6919cdb.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <?php
}else{?>
<script type="text/javascript">
    alert("Faça seu login primeiro!");
setTimeout("window.location='administrador.php';");
</script><?php
}

    
    ?>

</body>
</html>