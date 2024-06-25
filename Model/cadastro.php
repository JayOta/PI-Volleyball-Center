<?php
    require "../Service/conexao.php";
    function getCadastro($usuario, $email, $senha, $endereco, $cpf){
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO `clientes`(`nome`, `email`, `senha`, `endereco`, `cpf`)
            VALUES (\"$usuario\", \"$email\", \"$senha\", \"$endereco\", \"$cpf\")");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e){
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
    