<?php
require "../Service/conexao.php";

function buscarCategoriasModel() {
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `categorias` ");
        $stmt->execute();

        $categorias = $stmt->fetchAll();
        return $categorias;
    } catch (PDOException $e) {
    }

}
?>