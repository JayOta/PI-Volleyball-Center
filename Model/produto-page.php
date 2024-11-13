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
function buscarCategoria()
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `categoria` ");
        $stmt->execute();

        $categoria = $stmt->fetchAll();
        return $categoria;
    } catch (PDOException $e) {
        return "Erro ao mostrar informações -> " . $e;
    }
}