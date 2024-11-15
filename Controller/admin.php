<?php
require "../Model/admin.php";

function buscarCliente()
{
    $cliente = buscarClientes();
    return $cliente;
}
if (isset($_POST['adicionar'])) {
    header('Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/admin_crud_adicionar.php');
} else if (isset($_POST['editar'])) {
    header('Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/admin_crud_editar.php');
} else if (isset($_POST['remover'])) {
    header('Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/admin_crud_remover.php');
} else if (isset($_POST['delete'])) {
    // Captura o ID do produto e chama a função para deletar
    $produto_id = $_POST['delete'];
    deletarProduto($produto_id);
    header('Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/admin_crud_remover.php');
    exit();
}
if (isset($_POST['inserir'])) {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $categoria_id = $_POST['categoria'];
    $qtd_estoque = $_POST['qtd_estoque'];

    if ($categoria_id == "Calçados") {
        $categoria_id = 1;
    } else if ($categoria_id == "Acessórios") {
        $categoria_id = 2;
    } else if ($categoria_id == "Camisetas") {
        $categoria_id = 3;
    } else if ($categoria_id == "Shorts") {
        $categoria_id = 4;
    } else if ($categoria_id == "Meias") {
        $categoria_id = 5;
    } else if ($categoria_id == "Bolas") {
        $categoria_id = 6;
    }
    // Processa a imagem
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagemTemp = file_get_contents($_FILES['imagem']['tmp_name']);
        $imagemBase64 = base64_encode($imagemTemp); // Converte para base64
    } else {
        $imagemBase64 = null; // Define como null caso não tenha imagem
    }

    // Chama a função para inserir o produto no Model
    adicionarProduto($categoria_id, $imagemBase64, $nome, $descricao, $preco, $qtd_estoque);
    echo "Seu produto foi inserido!!<br>Retorne a loja para vê-lo!";
}
