<?php

require '../service/conexao.php';

session_start();
if(!isset($_SESSION['busca'])){
    $_SESSION['busca'] = array();
}

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];


    $sql = "SELECT * FROM produtos WHERE nome LIKE '%$nome%'";  
    $resultado = $conn->query($sql);
    
    
    if ($resultado->rowCount() > 0) {
        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['produtos'] = $produtos;
        
        header("Location: loja.php");
        
    } else {
        echo json_encode(['mensagem' => 'Nenhum produto encontrado com esse nome.']);
    }
}