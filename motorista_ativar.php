<?php
include "Conexao.php";

$id_motorista = $_GET['id_motorista'];

session_start();
$_SESSION['id_motorista'] = $id_motorista;

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">

        <!-- Viewport Meta Tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <title>Ativar motorista</title>
        <style>
            .body{
                text-align: right;
            }
        </style>
    </head>
    <body>
        <div class="container">

            <form method="POST" action="motorista_query.php">
                <div class="form-group row">
                    <h3>Confirma ativaçao do motorista?</h3>
                    <div class="col-8">
                        <input type="hidden" value="<?php echo $id_motorista ?>" name="id_motorista" id="id_motorista">
                    </div>
                </div>
                <div class="form-group row">
                        <button type="submit" class="btn btn-danger" id="ativar" name="ativar">Ativar</button>
                    <div class="col-8">
                        <a href="index.php"><input type="button" class="btn btn-info" value="Cancelar"></button></a>
                    </div>
                </div>
            </form>

        </div>
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body>
</html>