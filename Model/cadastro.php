<?php
    require "../Service/conexao.php";
    function getCadastro($usuario, $email, $senha){
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO `clientes`(`nome`, `email`, `senha`)
            VALUES (\"$usuario\", \"$email\", \"$senha\")");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e){
            echo json_encode(['error' => $e->getMessage()]);
        }
    }