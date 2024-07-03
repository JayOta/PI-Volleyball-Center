<?php 
    require '../Model/login.php';

    if($_POST){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        getLogin($email, $senha);
    }