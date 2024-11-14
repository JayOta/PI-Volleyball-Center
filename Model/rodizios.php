<?php

    require "../Service/conexao.php";

    function buscarRodiziosmodel() {
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM `rodizios` ");
            $stmt->execute();

            $rodizios = $stmt->fetchAll();
            return $rodizios;
            
        } catch (PDOException $e) {
            echo json_encode(['erro ao mostrar rodízios' => $e->getMessage()]);
        }
    }
?>