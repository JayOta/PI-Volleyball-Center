<?php
require "../Service/conexao.php";

// <CRUD PRODUTOS>
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
function adicionadosHoje()
{
    global $conn, $vendidos_hoje;

    try {
        $stmt = $conn->prepare("SELECT * FROM `produtos` WHERE `produto_id` = ':arrumar_aqui..'");
        $stmt->bindParam(':vendidos_hoje', $vendidos_hoje);
        $stmt->execute();
        $produtos_vendidos = $stmt->fetchAll()[0];
        if ($produtos_vendidos < 1) {
            return "Nenhum Produto vendido hoje";
        }
        return $produtos_vendidos;
    } catch (PDOException $e) {
        return "Erro ao mostrar informações -> " . $e;
    }
}
function adicionarProduto($categoria_id, $imagem, $nome, $descricao, $preco, $qtd_estoque)
{
    global $conn;
    try {
        // Prepara a consulta
        $stmt = $conn->prepare("INSERT INTO `produtos`(`categorias_id`, `imagem_produto`, `nome`, `descricao`, `preco`, `qtd_estoque`)
                                VALUES (:categoria, :imagem, :nome, :descricao, :preco, :qtd_estoque)");
        $stmt->bindParam(':categoria', $categoria_id);
        $stmt->bindParam(':imagem', $imagem, PDO::PARAM_LOB); // Armazena como BLOB
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':qtd_estoque', $qtd_estoque);
        $stmt->execute();
        $vendidos_hoje = $conn->lastInsertId();
    } catch (PDOException $e) {
        echo "Erro ao adicionar o produto: " . $e->getMessage();
    }
}
function editarProduto($produtoID, $categoria_id, $imagemTemp, $nome, $descricao, $preco, $qtd_estoque)
{
    global $conn;
    try {
        $stmt = $conn->prepare("UPDATE `produtos` SET categorias_id = :categoria, imagem_produto = :imagem, nome = :nome, descricao = :descricao, preco = :preco, qtd_estoque = :qtd_estoque WHERE produto_id = :produto_id");
        $stmt->bindParam(':categoria', $categoria_id);
        $stmt->bindParam(':imagem', $imagemTemp, PDO::PARAM_LOB);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':qtd_estoque', $qtd_estoque);
        $stmt->bindParam(':produto_id', $produtoID);
        $stmt->execute();
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo()); // Exibe o erro SQL
            exit;
        }

        if ($stmt->execute()) {
            echo "Produto editado com sucesso!!";
        } else {
            echo "Erro ao atualizar o produto!";
        }
        echo "Seu produto foi editado!!<br>Retorne a loja para vê-lo!";
    } catch (PDOException $e) {
        return "Erro ao mostrar informações -> " . $e;
    }
}
function deletarProduto($id)
{
    global $conn;
    try {
        // $id = buscarID($produtos['produto_id']);
        $stmt = $conn->prepare("DELETE FROM `produtos` WHERE `produto_id` = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro ao deletar o produto: " . $e->getMessage();
    }
}
// </CRUD PRODUTOS>

// <CRUD CLIENTES>
function buscarClientes()
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `usuarios` ");
        $stmt->execute();

        $clientes = $stmt->fetchAll();
        return $clientes;
    } catch (PDOException $e) {
        echo json_encode(['erro ao mostrar cliente' => $e->getMessage()]);
    }
}
function buscarIdCliente($id)
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `usuarios` WHERE `usuario_id` = '$id'");
        $stmt->execute();
        $clientes = $stmt->fetchAll()[0];
        return $clientes;
    } catch (PDOException $e) {
        return "Erro ao mostrar informações -> " . $e;
    }
}
function adicionarCliente($nome, $email, $senha, $imagemTempCliente)
{
    global $conn;
    try {
        // Prepara a consulta
        $stmt = $conn->prepare("INSERT INTO `clientes`(`nome`, `email`, `senha`, `imagem_perfil`)
                                VALUES (:nome, :email, :senha, :imagem_perfil)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':imagem_perfil', $imagemTempCliente, PDO::PARAM_LOB); // Armazena como BLOB
        $stmt->execute();

        $cliente_id = $conn->lastInsertId();
        $stmt = $conn->prepare("INSERT INTO `usuarios`(`nome`, `email`, `senha`, `imagem_perfil`, `cliente_id`)
                                VALUES (:nome, :email, :senha, :imagem_perfil, :cliente_id)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':imagem_perfil', $imagemTempCliente, PDO::PARAM_LOB); // Armazena como BLOB                        
        $stmt->bindParam(':cliente_id', $cliente_id);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro ao adicionar o cliente: " . $e->getMessage();
    }
}
function editarCliente($clienteId, $nome, $email, $senha, $imagemTempCliente)
{
    global $conn; // Faz a variável $conn ser acessível dentro da função

    try {
        $stmt = $conn->prepare("UPDATE `clientes` 
                                SET nome = :nome, email = :email, senha = :senha, imagem_perfil = :imagem_perfil 
                                WHERE cliente_id = :cliente_id");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':imagem_perfil', $imagemTempCliente, PDO::PARAM_LOB);
        $stmt->bindParam(':cliente_id', $clienteId);
        $stmt->execute();

        $stmt = $conn->prepare("UPDATE `usuarios` 
        SET nome = :nome, email = :email, senha = :senha, imagem_perfil = :imagem_perfil 
        WHERE cliente_id = :cliente_id");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':imagem_perfil', $imagemTempCliente, PDO::PARAM_LOB);
        $stmt->bindParam(':cliente_id', $clienteId);
        $stmt->execute();
        echo "Seu cliente foi alterado!!<br>Volte a página de admin para vê-lo!";
    } catch (PDOException $e) {
        die("Erro ao atualizar cliente: " . $e->getMessage());
    }
}

function deletarCliente($id)
{
    global $conn;
    try {
        // $id = buscarID($produtos['cliente_id']);
        $stmt = $conn->prepare("DELETE FROM `clientes` WHERE `cliente_id` = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        echo "Seu cliente foi removido!!<br>Volte a página de admin para vê-lo!";
    } catch (PDOException $e) {
        echo "Erro ao deletar o produto: " . $e->getMessage();
    }
}
// </CRUD CLIENTES>

// <CRUD NOTICIAS>

// <Inserir Noticias>
function adicionarNoticia($imagemTemp, $titulo, $descricao, $data, $camps_normais)
{
    global $conn;
    try {
        // Prepara a consulta
        $stmt = $conn->prepare("INSERT INTO `noticias`(`titulo_noticias`, `data_noticias`, `descricao_noticias`, `imagem_noticias`, `camps_normais`)
                                VALUES (:titulo_noticias, :data_noticias, :descricao_noticias, :imagem_noticias, :camps_normais)");
        $stmt->bindParam(':titulo_noticias', $titulo);
        $stmt->bindParam(':data_noticias', $data);
        $stmt->bindParam(':descricao_noticias', $descricao);
        $stmt->bindParam(':imagem_noticias', $imagemTemp, PDO::PARAM_LOB); // Armazena como BLOB
        $stmt->bindParam(':camps_normais', $camps_normais);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro ao adicionar o produto: " . $e->getMessage();
    }
}
// </Inserir Noticias>

// <Atualizar Noticias>
function buscarIdNoticia($id)
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `noticias` WHERE `id_noticias` = '$id'");
        $stmt->execute();
        $noticias = $stmt->fetchAll()[0];
        return $noticias;
    } catch (PDOException $e) {
        return "Erro ao mostrar informações -> " . $e;
    }
}
function editarNoticia($noticiaID, $imagemTemp, $titulo, $descricao, $data, $camps_normais)
{
    global $conn;
    try {
        $stmt = $conn->prepare("UPDATE `noticias` SET titulo_noticias = :titulo_noticias, data_noticias = :data_noticias, descricao_noticias = :descricao_noticias ,imagem_noticias = :imagem_noticias, camps_normais = :camps_normais WHERE id_noticias = :id_noticias");
        $stmt->bindParam(':titulo_noticias', $titulo);
        $stmt->bindParam(':data_noticias', $data);
        $stmt->bindParam(':descricao_noticias', $descricao);
        $stmt->bindParam(':imagem_noticias', $imagemTemp, PDO::PARAM_LOB); // Armazena como BLOB
        $stmt->bindParam(':camps_normais', $camps_normais);
        $stmt->bindParam(':id_noticias', $noticiaID);
        $stmt->execute();
        echo "Sua Notícia foi editada!!<br>Retorne a página de admin para vê-la!";
    } catch (PDOException $e) {
        return "Erro ao mostrar informações -> " . $e;
    }
}
// </Atualizar Noticias>

// <Remover Noticias>
function deletarNoticia($id)
{
    global $conn;
    try {
        // $id = buscarID($produtos['produto_id']);
        $stmt = $conn->prepare("DELETE FROM `noticias` WHERE `id_noticias` = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro ao deletar o produto: " . $e->getMessage();
    }
}
// </Remover Noticias>
// </CRUD NOTICIAS>