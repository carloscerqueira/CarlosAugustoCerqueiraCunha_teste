<?php

require_once "Conexao.php";
session_start();
//############# Caso o post seja ADD ##############//
if (isset($_POST['add'])) {
// Recebe os valores do POST
    $nome = $_POST ['nome'];
    $dt_nascimento = $_POST ['dt_nascimento'];
    $cpf = $_POST ['cpf'];
    $modelo_carro = $_POST ['modelo_carro'];
    $stats = true;
    $sexo = $_POST ['sexo'];

// Consulta para inserir motorista
    $consulta = "insert into tb_motorista(nome, dt_nascimento, cpf,
	modelo_carro, stats, sexo)
	
	values('$nome', str_to_date('$dt_nascimento', '%Y-%m-%d'), '$cpf',
	'$modelo_carro', '$stats', '$sexo');";

// Faz as querys no banco
    mysqli_query($conexao, $consulta) or die($erro = mysqli_error($conexao));

// Voltando para index
    header("Location:index.php");
}

//############# Caso o post seja DESATIVAR ##############//

if (isset($_POST['desativar'])) {
    $id_motorista = $_SESSION ['id_motorista'];
// Consulta para fazer update do motorista para o estado desativado
    $consulta = "update tb_motorista
				set stats = false
				where id_motorista = $id_motorista";
// Faz as querys no banco
    mysqli_query($conexao, $consulta) or die($erro = mysqli_error($conexao));
//Voltando para index
    header("Location:index.php");
}

//############# Caso o post seja ATIVAR ##############//

if (isset($_POST['ativar'])) {
    $id_motorista = $_SESSION ['id_motorista'];
// Consulta para fazer update do motorista para o estado ativado
    $consulta = "update tb_motorista
				set stats = true
				where id_motorista = $id_motorista";
// Faz as querys no banco
    mysqli_query($conexao, $consulta) or die($erro = mysqli_error($conexao));
//Voltando para index
    header("Location:index.php");
}
?>