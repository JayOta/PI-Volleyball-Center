<?php
require '../Model/login.php';

if ($_POST) {
    session_start();

    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $adminEmail = 'admin@admin.com';
        $adminSenha = 'admin';
    }
    if (isset($_POST['login'])) {
        if (strlen($_POST['email']) == 0 || $_POST['email'] == '') {
            echo "<script>alert('O seu email não pode ser enviado vazio!');</script>";
        } else if (strlen($_POST['senha']) == 0 || $_POST['senha'] == '') {
            echo "<script>alert('A sua senha não pode ser enviado vazio!');</script>";
        } else {
            $usuario = getLogin($email, $senha);
            if (strcasecmp($email, $adminEmail) == 0 && strcasecmp($senha, $adminSenha) == 0) {
                $_SESSION['usuario_atual'] = ['nome' => 'Admin', 'email' => $adminEmail, 'senha' => $adminSenha];
                header("Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/admin.php");
                exit; // Certifica-se de que o script não continue após o redirecionamento
            }
            if (!strcasecmp($usuario['email'], $email) && !strcasecmp($usuario['senha'], $senha)) {
                $_SESSION['usuario_atual'] = $usuario;
                $perfil_butao = $_POST['usuario_atual'];
                header("Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/inicial.php");
                exit; // Certifica-se de que o script não continue após o redirecionamento
            } else {
                print_r($usuario);
                echo "<script>alert('Senha ou Email incorretos!');</script>";
                echo "<center><a href='../Routes/index.php'><button style='
                padding: 2rem; 
                font-size: 2rem; 
                background: #f9cc02; 
                border: 2px solid #eee; 
                color: #fff;'>Voltar ao Login</button></a></center>";
            }
        }
    } else {
        session_unset();
        session_destroy();
        header("Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/index.php");
    }
}


/* "strcasecmp($email, $adminEmail) == 0:"

Esta função compara duas strings ($email e $adminEmail) de maneira que não diferencia maiúsculas de minúsculas (case-insensitive).
O retorno de strcasecmp() é 0 se as duas strings forem iguais, independentemente de suas letras estarem em maiúsculas ou minúsculas.
Portanto, esta parte verifica se o e-mail fornecido pelo usuário ($email) é igual ao e-mail do administrador ($adminEmail).
strcasecmp($senha, $adminSenha) == 0:

De forma similar, esta função compara a senha fornecida pelo usuário ($senha) com a senha do administrador ($adminSenha) de forma insensível a maiúsculas e minúsculas. */

/* "$_SESSION['usuario_atual'] = ['email' => $adminEmail, 'senha' => $adminSenha];"

Se as credenciais fornecidas forem as do administrador, a linha acima armazena essas credenciais em uma variável de sessão ($_SESSION['usuario_atual']).
Uma sessão é usada para manter o estado de autenticação do usuário enquanto ele navega pelo site. Neste caso, o usuário autenticado como administrador tem suas credenciais armazenadas na sessão. */
