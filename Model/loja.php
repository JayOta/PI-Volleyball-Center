<?php 
require '../Service/conexao.php';
function getAllProdutos() {
    global $conn;

    try {
        $stmt = $conn->prepare("SELECT * FROM `produtos`");
        $stmt->execute();

        $produtos = $stmt->fetchAll();

        return $produtos;
    } catch (PDOException $e) {
        echo json_encode(['erro ao mostrar produtos' => $e->getMessage()]);
    }
}
function buscarCategoriasModel() {
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `categoria` ");
        $stmt->execute();

        $categorias = $stmt->fetchAll();
        return $categorias;
    } catch (PDOException $e) {
    }
}