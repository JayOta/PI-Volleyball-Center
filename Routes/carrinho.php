<?php
require '../Controller/produto-page.php';
if(isset($_POST['remover_produto'])){
    $remover_produto = "display: none;";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Routes/img/logo-volei.png" type="image/x-icon">
    <title>Carrinho de compras</title>
    <link rel="stylesheet" href="css/carrinho.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header style="display: flex;">
        <a href="./loja.php" style="
        text-decoration: none; 
        color: #fff; 
        position: relative; 
        right: 43rem; display: flex; 
        justify-content: center; 
        align-items: center;
        border-radius: 3px;
        padding: 3.5px;
        transition: 0.3s ease-in-out;">
            <i class='bx bx-left-arrow-alt'></i>Voltar
        </a>
        <span>Carrinho de Compras</span>
    </header>
    <main>
        <form action="../Controller/carrinho.php" method="post">
            <div class="page-title">Seu Carrinho</div>
            <div class="content">
                <section>
                    <table>
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="<?php echo $remover_produto; ?>">
                                <td>
                                    <div class="product">
                                        <img src="https://picsum.photos/100/120" alt="">
                                        <div class="info">
                                            <div class="name">Nome do produto</div>
                                            <div class="category">Categoria</div>
                                        </div>
                                    </div>
                                </td>
                                <td>R$ 240</td>
                                <td>
                                    <div class="qty">
                                        <button><i class="bx bx-minus"></i></button>
                                        <span>1</span>
                                        <button><i class="bx bx-plus"></i></button>
                                    </div>
                                </td>
                                <td>R$ 240</td>
                                <td>
                                    <button type="submit" class="remove" name="remover_produto"><i class='bx bx-x'></i>
                                </td></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product">
                                        <img src="https://picsum.photos/100/120" alt="">
                                        <div class="info">
                                            <div class="name">Nome do produto</div>
                                            <div class="category">Categoria</div>
                                        </div>
                                    </div>
                                </td>
                                <td>R$ 240</td>
                                <td>
                                    <div class="qty">
                                        <button><i class="bx bx-minus"></i></button>
                                        <span>1</span>
                                        <button><i class="bx bx-plus"></i></button>
                                    </div>
                                </td>
                                <td>R$ 240</td>
                                <td>
                                    <button class="remove"><i class='bx bx-x'></i>
                                </td></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <aside>
                    <div class="box">
                        <header>Resumo da Compra</header>
                        <div class="info">
                            <div><span>Total</span><span>R$ 480</span></div>
                            <div><span>Frete</span><span>Gratuito</span></div>
                            <div><button>Adicionar cupom de desconto<i class='bx bx-right-arrow-alt'></i></button></div>
                        </div>
                        <footer>

                            <span>Total</span>
                            <span>R$ 480</span>
                        </footer>
                    </div>
                    <button id="finalizar">Finalizar compra</button>
                </aside>
            </div>
        </form>
    </main>
</body>

</html>