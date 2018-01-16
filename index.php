<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Viewport Meta Tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            .alinhar{
                font-size: 20px;
                vertical-align: middle;
            }
        </style>
        <title>Corridas</title>
    </head>
    <body>
        <?php
        ?>
        <nav class="navbar navbar-inverse bg-inverse"">
            <a class="navbar-brand" href="#"">Corridas</a>
        </nav>
        <table>
            <tr>
                <td style="padding:20px;">
                    <a href="motorista_adicionar.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus" style="font-size: 100px;"></span><p class="alinhar"> Adicionar Motorista</p> 
                    </a>
                </td>
                <td style="padding:20px;">
                    <a href="motorista_listar.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-list-alt" style="font-size: 100px;"></span><p class="alinhar"> Listar Motoristas</p> 
                    </a>
                </td>
                <td style="padding:20px;">
                    <a href="passageiro_adicionar.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus" style="font-size: 100px;"></span><p class="alinhar"> Adicionar Passageiro</p>
                    </a>
                </td>
                <td style="padding:20px;">
                    <a href="passageiro_listar.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-list-alt" style="font-size: 100px;"></span><p class="alinhar"> Listar Passageiros</p>
                    </a>
                </td>
                <td style="padding:20px;">
                    <a href="passageiro_corrida.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus" style="font-size: 100px;"></span><p class="alinhar"> Adicionar Corrida</p>
                    </a>
                </td>
                <td style="padding:20px;">
                    <a href="corrida_listar.php" class="btn btn-default">
                        <span class="glyphicon glyphicon-list-alt" style="font-size: 100px;"></span><p class="alinhar"> Listar Corridas</p>
                    </a>
                </td>
            </tr>
        </table>

        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>
