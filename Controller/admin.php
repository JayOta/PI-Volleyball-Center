<?php
require "../Model/admin.php";

function buscarCliente()
{
    $cliente = buscarClientes();
    return $cliente;
}
// <Redirecionamento de formulários>
if (isset($_POST['adicionar'])) {
    header('Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/admin_crud_adicionar.php');
} else if (isset($_POST['editar'])) {
    header('Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/admin_crud_editar.php');
} else if (isset($_POST['remover'])) {
    header('Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/admin_crud_remover.php');
} 
// </Redirecionamento de formulários>


// <Deletar Produtos>
else if (isset($_POST['delete'])) {
    // Captura o ID do produto e chama a função para deletar
    $produto_id = $_POST['delete'];
    deletarProduto($produto_id);
    header('Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/admin_crud_remover.php');
    exit();
}
// </Deletar Produtos>


// <Inserir Produtos>
if (isset($_POST['inserir'])) {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = number_format($_POST['preco'], 2, '.','');     
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
    } else {
        echo "Erro no envio da imagem: " . $imagemTemp;
    }
    // Chama a função para inserir o produto no Model
    adicionarProduto($categoria_id, $imagemTemp, $nome, $descricao, $preco, $qtd_estoque);
    echo "Seu produto foi inserido!!<br>Retorne a loja para vê-lo!";
}
// </Inserir Produtos>


// <Atualizar Produtos>
function produtoID($id){
    return buscarId($id);
}

if(isset($_POST['update'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = number_format($_POST['preco'], 2, '.','');     
    $categoria_id = $_POST['categoria'];
    $qtd_estoque = $_POST['qtd_estoque'];
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagemTemp = file_get_contents($_FILES['imagem']['tmp_name']);
    } else {
        echo "Erro no envio da imagem: " . $imagemTemp;
    }

    editarProduto($categoria_id, $imagemTemp, $nome, $descricao, $preco, $qtd_estoque);
    echo "Seu produto foi editado!!<br>Retorne a loja para vê-lo!";
}
// </Atualizar Produtos>
