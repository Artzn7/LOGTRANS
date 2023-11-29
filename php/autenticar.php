<?php
include 'conexao.php';
session_start();


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $usuarioInput = $_POST['email'];
    $senhaInput = $_POST['senha'];

    $sql = "select * from usuario where email = '$usuarioInput' and senha = '$senhaInput'";
    $resultado = $conexao ->query($sql);

    if ($resultado->num_rows=== 1) {
        $_SESSION['autenticado'] = true;
        header("location: ../entrega.html");
        exit;

    } else {
        echo "Nome de usuário ou senha invalidos. Por favor, tente novamente.";
    };

    $conexao -> close();
}
?>