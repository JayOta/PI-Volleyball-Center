<?php
    require "../Service/conexao.php";
    function getCadastro($usuario, $email, $senha){
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO `clientes`(`nome`, `email`, `senha`)
            VALUES (\"$usuario\", \"$email\", \"$senha\")");
            $stmt->execute();
            $cliente_id = $conn->lastInsertId();
            $stmt = $conn->prepare("INSERT INTO `usuarios`(`nome`, `email`, `senha`, `cliente_id`)
            VALUES (\"$usuario\", \"$email\", \"$senha\", \"$cliente_id\")");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e){
            echo json_encode(['error' => $e->getMessage()]);
        }
    }