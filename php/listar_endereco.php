<?php 
include '../db/conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" />
    <style>
    #container {
        width: 500px;
    }
    </style>

</head>

<body>

    <div class="container" style="margin-top: 40px" id="container">

        <h3>Endereço</h3>

        <form action="atualizar_endereco.php" method="post" style="margin-top: 20px">
            <?php 
            
            $sql = "SELECT * FROM `endereco_escola` WHERE endereco_id = $id";
            $buscar = mysqli_query($conn,$sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $id = $array['endereco_id'];
                $cep = $array['cep']; 
                $endereco = $array['endereco'];
                $numero = $array['numero'];
                $bairro = $array['bairro'];
                $cidade = $array['cidade'];
                $estado = $array['estado'];

            ?>
            <div class="form-group">
                <label>Cep</label>
                <input type="number" class="form-control" name="id" value="<?php echo $id?>">
                <input type="number" class="form-control" name="id" value="<?php echo $id?>" style="display:none;">
            </div>
            <div class="form-group">
               <label>Cep</label>
                <input type="text" class="form-control" name="cep" value="<?php echo $cep?>">
                <label>Rua</label>
                <input type="text" class="form-control" name="endereco" value="<?php echo $endereco?>">
                <label>Numero</label>
                <input type="text" class="form-control" name="numero" value="<?php echo $numero?>">
                <label>Bairro</label>
                <input type="text" class="form-control" name="bairro" value="<?php echo $bairro?>">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade" value="<?php echo $cidade?>">
                <label>Estado</label>
                <input type="text" class="form-control" name="estado" value="<?php echo $estado?>">
            </div>
           
            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-warning btn-sm">Atualizar</button>
            </div>
            <?php } ?>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>