<?php
session_start();

// Inicializando o carrinho com quantidade 0 se ainda não foi definido
if (!isset($_SESSION['quantity_cart'])) {
    $_SESSION['quantity_cart'] = 0;
}

$quantity = $_SESSION['quantity_cart'];
if(isset($quantity)){
    $quantity += 1;
    echo $quantity;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Produto da Loja</h1>
        <div class="product-card card">
            <div class="card-body">
                <h5 class="card-title">Produto Exemplo</h5>
                <p class="card-text">Descrição do produto.</p>
                <p class="card-text">Preço: R$ 50,00</p>
                <div class="quantity-controls">
                    <form action="contador.php" method="POST" style="display: inline;">
                        <input type="hidden" name="action" value="decrement">
                        <button type="submit" class="btn btn-danger">-</button>
                    </form>
                    
                    <span class="mx-3">Quantidade: <?php echo $quantity; ?></span>
                    
                    <form action="cart_handler.php" method="POST" style="display: inline;">
                        <input type="hidden" name="action" value="increment">
                        <button type="submit" class="btn btn-success">+</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
