<?php

$host = "localhost:3306";
$user = "root";
$pass = "123";
$database = "teste";

$conexao = mysqli_connect($host, $user, $pass, $database) or die(mysqli_error($conexao));
mysqli_select_db($conexao, $database) or die(mysqli_error($conexao));

if (!mysqli_set_charset($conexao, 'utf8')) {
    printf('Error ao usar utf8: %s', mysqli_error($link));
    exit;
}
?>