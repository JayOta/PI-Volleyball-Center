<?php
require "../Service/conexao.php";

function buscarProdutosModel()
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `produtos` ");
        $stmt->execute();

        $produtos = $stmt->fetchAll();
        return $produtos;
    } catch (PDOException $e) {
        return "Erro ao mostrar informações -> " . $e;
    }
}
function buscarId($id)
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `produtos` where `produto_id` = '$id'");
        $stmt->execute();

        $produtos = $stmt->fetchAll()[0];
        return $produtos;
    } catch (PDOException $e) {
        return "Erro ao mostrar informações -> " . $e;
    }
}
function buscarCategoriasModel()
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `categoria` ");
        $stmt->execute();

        $categorias = $stmt->fetchAll();
        return $categorias;
    } catch (PDOException $e) {
    }
}
