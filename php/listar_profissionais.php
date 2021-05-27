<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body>

<?php 

session_start();

if(isset($_SESSION['usuarioAdmin'])){
    

?>

    <div class="container" style="margin-top: 40px">

        <center>
            <h3>Lista de Profissionais</h3>
        </center>
        <br>
        <br>
        <table class="table" id="table_id">
            <thead>
                <tr>
                    <th scope="col" style="min-width: 120px;">Nome do Profissional</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cpf</th>
                    <th scope="col" style="min-width: 148px;">
                        <center>Ação</center>
                    </th>
                </tr>
            </thead>


            <?php
            include '../db/conexao.php';
            $sql = "SELECT * FROM `profissional`";
            $busca = mysqli_query($conn,$sql);

            while ($array = mysqli_fetch_array($busca)) {
                
                $id_usuario = $array['id'];
                $nome = $array['nome_prof'];
                $email = $array['email_prof']; 
                $cpf = $array['cpf_prof'];
                $telefone = $array['telefone_prof'];

        ?>
            <tr>
                <td style="vertical-align: inherit;"> <?php echo $nome ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $email ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $telefone ?> </td>
                <td style="vertical-align: inherit;"> <?php echo $cpf ?> </td>
                <td style="vertical-align: inherit;">
                    <center>
                        <a href="editar_profissionais.php?id=<?php echo $id_usuario ?>" role="button"
                            class="btn btn-warning btn-sm"><i class="far fa-edit"></i>&nbsp; Editar</a>
                    </center>
                </td>
                <?php } ?>

            </tr>
        </table>

        <div style="text-align: right; margin-top:20px;">
            <a href="../index.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js">
    </script>

    <script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro encontrado",
                "infoFiltered": "(Filtrado de _MAX_ registros totais)",
                "search": "Pesquisar:"
            }
        });
    });
    </script>
    <?php
}else{?>
<script type="text/javascript">
    alert("Faça seu login primeiro!");
setTimeout("window.location='login.php';");
</script><?php
}

    
    ?>

</body>

</html>