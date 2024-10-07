<?php
    require "../Service/conexao.php";

    function buscarhistoriaModel() {
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM `historia` ");
            $stmt->execute();

            $historia = $stmt->fetchAll();
            return $historia;
        } catch (PDOException $e) {
        }

    }
    ?>