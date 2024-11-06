<?php
// require '../Model/produto-page.php';

// if ($_POST) {
//     // $nome = $_POST['nome'];
//     // $description = $_POST['description'];
//     // $price = $_POST['price'];
//     // $old_price = $_POST['old_price'];
//     // $percent_discount = $_POST['percent_discount'];
//     // $qtd_estoque = $_POST['qtd_estoque'];  // add no Routes os names daqui pra baixo
//     // $tamanho = $_POST['tamanho'];
//     // $cor = $_POST['cor'];

//     // getInfoProduct($nome, $description, $price, $old_price, $percent_discount, $qtd_estoque, $tamanho, $cor);
//     // Verifica se a sessão de quantidade existe, se não existir, cria com valor 0
//     if (!isset($_SESSION['quantity_cart'])) {
//         $_SESSION['quantity_cart'] = 0;
//     }

//     // Verifica se o botão de adicionar ao carrinho foi clicado
//     if (isset($_POST['add_to_cart'])) {
//         $_SESSION['quantity_cart'] += 1; // Incrementa a quantidade
//         header("Location: ../Routes/produto-page.php");
//         exit(); // Garante que o redirecionamento funcione corretamente
//     }

//     // Verifica se o botão de remover do carrinho foi clicado
//     if (isset($_POST['remove_to_cart'])) {
//         $_SESSION['quantity_cart'] -= 1;
//         header("Location: ../Routes/produto-page.php");
//     }
// }

require "../Model/produto-page.php";

function buscarproduto($id){
    $getAllprodutos = buscarprodutomodel($id);
    return $getAllprodutos;
}

function getAllProdutos(){
    $getAllprodutos = buscarprodutosmodel();
    return $getAllprodutos;
}


?>