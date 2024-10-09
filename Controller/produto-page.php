<?php
require '../Model/produto-page.php';

if ($_POST) {
    $nome = $_POST['nome'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $old_price = $_POST['old_price'];
    $percent_discount = $_POST['percent_discount'];
    $qtd_estoque = $_POST['qtd_estoque'];  // add no Routes os names daqui pra baixo
    $tamanho = $_POST['tamanho'];
    $cor = $_POST['cor'];


    getInfoProduct($nome, $description, $price, $old_price, $percent_discount, $qtd_estoque, $tamanho, $cor);
}
