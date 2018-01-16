<?php
include "Conexao.php";
$sql = mysqli_query($conexao, "select * from tb_passageiro;");
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Lista de passageiros</title>
        <style>
            .volta{
                float: right;
            }
        </style>
    </head>
    <body>
        <div class = "volta">
            <a href="index.php">
                <input type='button' class='btn btn-danger' value='Voltar'>
            </a>
        </div>
        <div class="container" style="width:100%">
            <table class="table table-striped table-condensed" >
                <thead>
                    <tr>
                    <tr>
                <h1>Escolha um passageiro para a corrida</h1>
                </tr>
                <th hidden="true">ID Passageiro</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Sexo</th>
                </thead>

                <?php
                if (mysqli_num_rows($sql) > 0) {
                    while ($registro = mysqli_fetch_array($sql)) {
                        $id_passageiro = $registro['id_passageiro'];
                        $nome = $registro['nome'];
                        $dt_nascimento = $registro['dt_nascimento'];
                        $cpf = $registro['cpf'];
                        $sexo = $registro ['sexo'];
                        
                        echo "<tr>";
                        echo "<td hidden> $id_passageiro </td>";
                        echo "<td> $nome </td>";
                        echo "<td> $dt_nascimento </td>";
                        echo "<td> $cpf </td>";
                        echo "<td> $sexo  </td>";
                        echo "<td><a href='motorista_corrida.php?id_passageiro=" . $id_passageiro . "'>
                                <input type='button' class='btn btn-danger' value='Escolher Passageiro'></a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </body>
</html>