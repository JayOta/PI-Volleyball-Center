<?php
require "../Model/produto-page.php";

function buscarProduto($id){
    $getAllprodutos = buscarId($id);
    return $getAllprodutos;
}

function getAllProdutos(){
    $getAllprodutos = buscarProdutosModel();
    return $getAllprodutos;
}


?>