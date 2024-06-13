<?php 
    require '../Model/cadastro.php';

    if($_POST){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    }