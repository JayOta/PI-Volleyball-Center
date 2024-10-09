<?php
    require "../Service/conexao.php";
    function getInfoProduct($nome, $description, $price, $old_price, $percent_discount, $qtd_estoque, $tamanho, $cor){
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM `produtos` WHERE `nome` = '$nome'");
            $stmt->execute();

            $produto = $stmt->fetchAll(PDO::FETCH_ASSOC)[0]; // imagem_produto = [0], nome = [1], descricao = [2], preco = [3];
            return $produto;
        } catch (PDOException $e) {
        echo json_encode(['erro ao fazer o login' => $e->getMessage()]);
        }
    }