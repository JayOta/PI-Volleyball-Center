<?php 
    require '../Model/cadastro.php';

    if($_POST){
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];

        getCadastro($usuario, $email, $senha, $endereco, $cpf);
        }