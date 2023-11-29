<?php

//criação de variaveis para conexão com o banco de dados
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'logtrans';

//criação de conexão com o banco de dados

$conexao = new mysqli($host, $user, $password, $database);

//teste de conexão com o banco de dados 

if($conexao -> connect_error){ 

    die('ERRO DE CONEXÃO: '.$conexao -> connect_error);

}
?>