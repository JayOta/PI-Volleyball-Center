<?php 
    require '../Model/cadastro.php';

    if($_POST){
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        getCadastro($usuario, $email, $senha);
        header("Location: http://localhost/GitHub/PI-Volleyball-Center/View/index.php");
        }