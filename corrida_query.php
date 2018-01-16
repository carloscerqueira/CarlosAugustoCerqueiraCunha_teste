<?php
session_start();
require_once "Conexao.php";
//############# Caso o post seja ADD ##############//
if (isset($_POST['add'])) {
// Recebe os valores do POST
    $id_motorista = $_SESSION['id_motorista'];
    $id_passageiro = $_SESSION['id_passageiro'];
    $valor = $_POST ['valor'];

// Consulta para inserir passageiro
    $consulta = "insert into tb_corrida(id_passageiro, id_motorista, valor)
	
	values('$id_passageiro', '$id_motorista', '$valor');";

// Faz as querys no banco
    mysqli_query($conexao, $consulta) or die($erro = mysqli_error($conexao));

// Voltando para index
    header("Location:index.php");
}

?>