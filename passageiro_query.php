<?php

require_once "Conexao.php";
session_start();
//############# Caso o post seja ADD ##############//
if (isset($_POST['add'])) {
// Recebe os valores do POST
    $nome = $_POST ['nome'];
    $dt_nascimento = $_POST ['dt_nascimento'];
    $cpf = $_POST ['cpf'];
    $sexo = $_POST ['sexo'];

// Consulta para inserir passageiro
    $consulta = "insert into tb_passageiro(nome, dt_nascimento, cpf, sexo)
	
	values('$nome', str_to_date('$dt_nascimento', '%Y-%m-%d'), '$cpf', '$sexo');";

// Faz as querys no banco
    mysqli_query($conexao, $consulta) or die($erro = mysqli_error($conexao));

// Voltando para index
    header("Location:index.php");
}

?>