<?php
require "../Service/conexao.php";

function getLogin($email, $senha)
{
    global $conn;
    try {
        if (isset($_POST['login'])) {
            if (strlen($_POST['email']) == 0 || $_POST['email'] == '') {
                echo "<script>alert('O seu email não pode ser enviado vazio!');</script>";
            } else if (strlen($_POST['senha']) == 0 || $_POST['senha'] == '') {
                echo "<script>alert('A sua senha não pode ser enviado vazio!');</script>";
            }
            $email = $conn->quote($_POST['email']);
            $senha = $conn->quote($_POST['senha']);

            $stmt = $conn->prepare("SELECT * FROM `usuarios` WHERE `email` = $email");
            $stmt->execute();

            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]; // usuario = [1], email = [2], senha = [3];
            return $usuario;
        }
    } catch (PDOException $e) {
        echo json_encode(['erro ao fazer o login' => $e->getMessage()]);
    }
}
