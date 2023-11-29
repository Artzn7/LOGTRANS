<?php
include 'conexao.php';
session_start();


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $emailInput = $_POST['email'];
    $senhaInput = $_POST['senha'];
    $nomeInput = $_POST['nome'];

    $sql = "insert into usuario (nome, senha, email) values ( '$nomeInput','$senhaInput', '$emailInput')";

    if ($resultado = $conexao ->query($sql)=== true) {
        $_SESSION['autenticado'] = true;
        header("location: ../entrega.html");
        exit;

    } else {
        echo "Nome de usuário ou senha invalidos. Por favor, tente novamente.";
    };

    $conexao -> close();
}
?>