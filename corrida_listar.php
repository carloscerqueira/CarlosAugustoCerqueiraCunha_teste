<!DOCTYPE html>
<?php
include "Conexao.php";
$sql = mysqli_query($conexao, "SELECT tb_motorista.nome as nome_motorista, 
    tb_passageiro.nome as nome_passageiro, valor 
    FROM 
    tb_corrida JOIN tb_passageiro 
    ON (tb_corrida.id_passageiro = tb_passageiro.id_passageiro) 
        JOIN tb_motorista 
    ON (tb_corrida.id_motorista = tb_motorista.id_motorista);");
?>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Lista de corridas</title>
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
                <h1>Lista de Corridas</h1>
                </tr>
                <th>Nome do passageiro</th>
                <th>Nome do motorista</th>
                <th>Valor</th>
                </thead>

                <?php
                if (mysqli_num_rows($sql) > 0) {
                    while ($registro = mysqli_fetch_array($sql)) {
                        $nome_passageiro = $registro['nome_passageiro'];
                        $nome_motorista = $registro['nome_motorista'];
                        $valor = $registro['valor'];

                        echo "<tr>";
                        echo "<td> $nome_passageiro </td>";
                        echo "<td> $nome_motorista </td>";
                        echo "<td> $valor </td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </body>
</html>