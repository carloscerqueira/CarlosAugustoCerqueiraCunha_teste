<!DOCTYPE html>
<?php
$id_passageiro = $_GET['id_passageiro'];
session_start();
$_SESSION['id_passageiro'] = $id_passageiro;

include "Conexao.php";

$sql = mysqli_query($conexao, "select * from tb_motorista "
        . "where stats = true;");
?>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Lista de motoristas</title>
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
                <h1>Escolha um motorista para fazer a corrida</h1>
                </tr>
                <th hidden="true">ID Motorista</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Modelo do Carro</th>
                <th>Status</th>
                <th>Sexo</th>
                </thead>

                <?php
                if (mysqli_num_rows($sql) > 0) {
                    while ($registro = mysqli_fetch_array($sql)) {
                        $id_motorista = $registro['id_motorista'];
                        $nome = $registro['nome'];
                        $dt_nascimento = $registro['dt_nascimento'];
                        $cpf = $registro['cpf'];
                        $modelo_carro = $registro['modelo_carro'];
                        if ($registro['stats'] == true)
                            $stats = "Ativo";
                        else
                            $stats = "Inativo";
                        $sexo = $registro ['sexo'];

                        echo "<tr>";
                        echo "<td hidden> $id_motorista </td>";
                        echo "<td> $nome </td>";
                        echo "<td> $dt_nascimento </td>";
                        echo "<td> $cpf </td>";
                        echo "<td> $modelo_carro </td>";
                        echo "<td> $stats  </td>";
                        echo "<td> $sexo  </td>";
                        echo "<td><a href='corrida_adicionar.php?id_motorista=" . $id_motorista . "'>
                                <input type='button' class='btn btn-danger' value='Escolher Motorista'></a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </body>
</html>