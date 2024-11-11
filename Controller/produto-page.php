<?php
require "../Model/produto-page.php";
function buscarProduto($id)
{
    $getAllprodutos = buscarId($id);
    return $getAllprodutos;
}

function getAllProdutos()
{
    $getAllprodutos = buscarProdutosModel();
    return $getAllprodutos;
}
function getAllCategorias(){
    $getAllCategorias = buscarCategoria();
    return $getAllCategorias;
}
if (!isset($_SESSION['quantity_cart'])) {
    $_SESSION['quantity_cart'] = 0;
}