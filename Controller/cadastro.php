<?php
require '../Model/cadastro.php';

if ($_POST) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    getCadastro($usuario, $email, $senha);
    echo "<script>alert('Cadastro feito com sucesso! Agora retorne ao site de login <3')</script>";
    // header("Location: http://localhost/GitHub/PI-Volleyball-Center/View/index.php"); tentar aprender sobre como redirecionar ao "index.php" sem utilizar pastas específicas
}
