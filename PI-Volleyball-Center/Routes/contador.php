<?php
session_start();

// Inicializa o carrinho com quantidade 0 se ainda não foi definido
if (!isset($_SESSION['quantity_cart'])) {
    $_SESSION['quantity_cart'] = 0;
}

// Verifica a ação (incrementar ou decrementar)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'increment') {
        $_SESSION['quantity_cart']++;
    } elseif ($_POST['action'] === 'decrement' && $_SESSION['quantity_cart'] > 0) {
        $_SESSION['quantity_cart']--;
    }
}

// Redireciona de volta para a página principal
header("Location: produto-page.php");
exit();
