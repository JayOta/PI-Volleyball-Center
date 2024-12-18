<?php
require "../Model/admin.php";

// <CRUD PRODUTOS> 

// <Redirecionamento de formulários>
if (isset($_POST['adicionar'])) {
    header('Location: ../Routes/admin_produtos_adicionar.php');
} else if (isset($_POST['editar'])) {
    header('Location: ../Routes/admin_produtos_editar.php');
} else if (isset($_POST['remover'])) {
    header('Location: ../Routes/admin_produtos_remover.php');
}
// </Redirecionamento de formulários>

// <Vendidos Hoje>
function produtoAdicionadoHoje()
{
    return adicionadosHoje();
}
// </Vendidos Hoje>

// <Inserir Produtos>
if (isset($_POST['inserir'])) {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = number_format($_POST['preco'], 2, '.', '');
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
function produtoID($id)
{
    return buscarId($id);
}

if (isset($_POST['editar_produto'])) {
    $nome = $_POST['nome_produto'];
    $descricao = $_POST['descricao_produto'];
    $preco = number_format($_POST['preco_produto'], 2, '.', '');
    $categoria_id = $_POST['categoria_produto'];
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
    $qtd_estoque = $_POST['qtd_estoque_produto'];
    $produtoID = $_POST['produto_id'];
    if (isset($_FILES['imagemTempProduto']) && $_FILES['imagemTempProduto']['error'] == 0) {
        $imagemTempProduto = file_get_contents($_FILES['imagemTempProduto']['tmp_name']);
    } else {
        echo "Erro no envio da imagem: " . $imagemTempProduto;
    }

    editarProduto($produtoID, $categoria_id, $imagemTempProduto, $nome, $descricao, $preco, $qtd_estoque);
}
// </Atualizar Produtos>

// <Deletar Produtos>
else if (isset($_POST['delete'])) {
    // Captura o ID do produto e chama a função para deletar
    $produto_id = $_POST['delete'];
    deletarProduto($produto_id);
    header('Location: ../Routes/admin_produtos_remover.php');
    exit();
}
// </Deletar Produtos>

// </CRUD PRODUTOS> 



// <CRUD CLIENTES>

function buscarCliente()
{
    $cliente = buscarClientes();
    return $cliente;
}
// <Atualizar Cliente>
function clienteID($id)
{
    return buscarIdCliente($id);
}
// </Atualizar Cliente>

// <Redirecionamento de formulários>
if (isset($_POST['adicionar_cliente'])) {
    header('Location: ../Routes/admin_clientes_adicionar.php');
} else if (isset($_POST['editar_cliente'])) {
    header('Location: ../Routes/admin_clientes_editar.php');
} else if (isset($_POST['remover_cliente'])) {
    header('Location: ../Routes/admin_clientes_remover.php');
}
// </Redirecionamento de formulários>

// <Inserir Clientes>
if (isset($_POST['inserir_cliente'])) {
    // Captura os dados do formulário
    $nome = $_POST['nome_cliente'];
    $email = $_POST['email_cliente'];
    $senha = $_POST['senha_cliente'];

    // Processa a imagem
    if (isset($_FILES['imagem_cliente']) && $_FILES['imagem_cliente']['error'] == 0) {
        $imagemTempCliente = file_get_contents($_FILES['imagem_cliente']['tmp_name']);
    } else {
        echo "Erro no envio da imagem: " . $imagemTempCliente;
    }
    // Chama a função para inserir o produto no Model
    adicionarCliente($nome, $email, $senha, $imagemTempCliente);
    echo "Seu cliente foi inserido!!<br>Retorne a página de admin para vê-lo!";
}
// </Inserir Clientes>

// <Editar Clientes>
if (isset($_POST['editar_cliente'])) {
    // Captura os dados do formulário
    $nome = $_POST['nome_cliente'];
    $email = $_POST['email_cliente'];
    $senha = $_POST['senha_cliente'];
    $clienteId = $_POST['cliente_id'];

    // Processa a imagem
    if (isset($_FILES['imagem_cliente']) && $_FILES['imagem_cliente']['error'] == 0) {
        $imagemTempCliente = file_get_contents($_FILES['imagem_cliente']['tmp_name']);
    } else {
        echo "Erro no envio da imagem: " . $imagemTempCliente;
    }
    // Chama a função para inserir o produto no Model
    editarCliente($clienteId, $nome, $email, $senha, $imagemTempCliente);
}
// </Editar Clientes>

// <Deletar Clientes>
if (isset($_POST['delete_cliente'])) {
    // Captura o ID do produto e chama a função para deletar
    $cliente_id = $_POST['delete_cliente'];
    deletarCliente($cliente_id);
    header('Location: ../Routes/admin_clientes_remover.php');
    exit();
}
    // </Deletar Clientes>

// </CRUD CLIENTES>

// <CRUD NOTICIAS>

// <Redirecionamento de formulários>
if (isset($_POST['adicionar_noticias'])) {
    header('Location: ../Routes/admin_noticias_adicionar.php');
} else if (isset($_POST['editar_noticias'])) {
    header('Location: ../Routes/admin_noticias_editar.php');
} else if (isset($_POST['remover_noticias'])) {
    header('Location: ../Routes/admin_noticias_remover.php');
}
// </Redirecionamento de formulários>

// <Inserir Noticias>
if (isset($_POST['inserir_noticia'])) {
    // Captura os dados do formulário
    $titulo = $_POST['titulo_noticia'];
    $descricao = $_POST['descricao_noticia'];
    $data = $_POST['data_noticia'];
    $camps_normais = $_POST['camps_normais'];

    // Processa a imagem
    if (isset($_FILES['imagem_noticia']) && $_FILES['imagem_noticia']['error'] == 0) {
        $imagemTemp = file_get_contents($_FILES['imagem_noticia']['tmp_name']);
    } else {
        echo "Erro no envio da imagem: " . $imagemTemp;
    }
    // Chama a função para inserir o produto no Model
    adicionarNoticia($imagemTemp, $titulo, $descricao, $data, $camps_normais);
    echo "Sua notícia foi inserida!!<br>Retorne a página de admin para vê-la!";
}
// </Inserir Noticias>

// <Editar Noticias>
function noticiasID($id)
{
    return buscarIdNoticia($id);
}
if (isset($_POST['editar_noticia'])) {
    $titulo = $_POST['titulo_noticia'];
    $descricao = $_POST['descricao_noticia'];
    $data = $_POST['data_noticia'];
    $camps_normais = $_POST['camps_normais'];

    $noticiaID = $_POST['id_noticias'];
    if (isset($_FILES['imagem_noticia']) && $_FILES['imagem_noticia']['error'] == 0) {
        $imagemTemp = file_get_contents($_FILES['imagem_noticia']['tmp_name']);
    } else {
        echo "Erro no envio da imagem: " . $imagemTemp;
    }

    editarNoticia($noticiaID, $imagemTemp, $titulo, $descricao, $data, $camps_normais);
}
// </Editar Noticias>

// <Remover Noticias>
if (isset($_POST['delete_noticia'])) {
    // Captura o ID do produto e chama a função para deletar
    $id_noticia = $_POST['delete_noticia'];
    deletarNoticia($id_noticia);
    header('Location: ../Routes/admin_noticias_remover.php');
    exit();
}
// </Remover Noticias>

// </CRUD NOTICIAS>