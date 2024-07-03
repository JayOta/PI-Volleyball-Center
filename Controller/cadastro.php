<?php 
    require '../Model/cadastro.php';

    if($_POST){
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        getCadastro($usuario, $email, $senha);
        }