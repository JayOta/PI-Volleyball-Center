<?php

require '../Service/conexao.php';
global $conn; 

session_start();

if (!isset($_SESSION['busca'])) {
    $_SESSION['busca'] = array();
}

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];


    $sql = "SELECT * FROM produtos where nome LIKE '%$nome%'";
    $resultado = $conn->query($sql);

    
    if ($resultado->rowCount() > 0) {
        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['produtos'] = $produtos;

        header("Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/loja.php" );
    } else {
        echo json_encode(['mensagem' => 'Nenhum produto encontrado com esse nome.']);
    }
}
