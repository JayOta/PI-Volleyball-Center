<?php
require "../Service/conexao.php";

function buscarClientes()
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM `clientes` ");
        $stmt->execute();

        $clientes = $stmt->fetchAll();
        return $clientes;
    } catch (PDOException $e) {
        echo json_encode(['erro ao mostrar cliente' => $e->getMessage()]);
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
    } catch (PDOException $e) {
        echo "Erro ao adicionar o produto: " . $e->getMessage();
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
