<?php
require '../Model/login.php';
session_start();

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($_POST['login'])) {
        if (strlen($_POST['email']) == 0 || $_POST['email'] == '') {
            echo "<script>alert('O seu email não pode ser enviado vazio!');</script>";
        } else if (strlen($_POST['senha']) == 0 || $_POST['senha'] == '') {
            echo "<script>alert('A sua senha não pode ser enviado vazio!');</script>";
        } else {
            $usuario = getLogin($email, $senha);
            if (!strcasecmp($usuario['email'], $email) && !strcasecmp($usuario['senha'], $senha)) {
                $_SESSION['usuario_atual'] = $usuario;
                $perfil_butao = $_POST['usuario_atual'];
                header("Location: http://localhost/GitHub/PI-Volleyball-Center/View//inicial.php");
                
                
            } else {
                echo "<script>alert('Senha ou Email incorretos!');</script>";
            }
        }
    }
}
