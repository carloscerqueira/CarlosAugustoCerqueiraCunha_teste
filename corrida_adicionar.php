<?php
ob_start();
$id_motorista = $_GET['id_motorista'];
session_start();
$_SESSION['id_motorista'] = $id_motorista;
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">

        <!-- Viewport Meta Tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <title>Adicionar corrida</title>
        <style>
            .body{
                text-align: right;
            }
        </style>
        <script type="text/javascript">
            function confirmaCadastro()
            {
                nValor = document.getElementById("valor").value;
                if (nValor == "")
                {
                    alert("Preencha os campos obrigatórios!");
                    exit;
                } else {
                    decisao = confirm("Confirma cadastro de corrida?");
                    if (decisao == true) {
                        document.add.action = "corrida_query.php";
                        document.add.method = "POST";
                        document.getElementById("add").submit();
                    } else
                    {
                        return;
                    }
                }
            }
        </script>
    </head>
    <body>
        <h1 align="center">Adicionar nova Corrida</h1>
        <div class="container">

            <form name="add" id="add" method="POST" action="corrida_query.php">
                <div class="form-group row">
                    <label for="nome" class="col-2 col-form-label">Valor da Corrida</label>
                    <div class="col-8">
                        <input type="text" class="form-control" id="valor" name="valor" required>
                    </div>
                </div>
                <input type="button" class="btn btn-info" id="add" name="add" onclick="confirmaCadastro()" value="Salvar">
                <input type="hidden" name="add">
                <a href="index.php"><input type="button" class="btn btn-info" value="Cancelar"></button></a>
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