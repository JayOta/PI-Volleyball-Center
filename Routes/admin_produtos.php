<!DOCTYPE html>
<?php
require '../Controller/loja.php';
$produtos = buscarProdutos();
$categoria = buscarCategoria();

?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
    <link rel="stylesheet" href="../Routes/css/admin.css">
    <link rel="stylesheet" href="../Routes/css/admin_crud_produtos.css">
    <title>CRUD PRODUTOS</title>

</head>

<body>
    <?php include '../Routes/perfil-on-navbar-admin.php'; ?>
    <div style="display: flex; flex-direction: row; gap: 1rem;">
        <div class="sidebar-part">
            <button id="openSidebarBtn" onclick="openSidebar()" style="display:none;"><i class='bx bx-menu'></i></button>
            <div id="sidebar" class="sidebar">
                <button id="closeSidebarBtn" onclick="closeSidebar()"><i class='bx bx-x'></i></button>
                <div class="line">
                    <a href="./admin.php" style="text-decoration: none; width: 100%;">
                        <button class="links"><i class='bx bx-left-arrow'></i>Voltar</button>
                    </a>
                </div>
                <div class="line">
                    <a href="./admin.php" style="text-decoration: none; width: 100%;">
                        <button class="links"><i class='bx bx-home'></i>Início</button>
                    </a>
                </div>
                <div class="line">
                    <a style="text-decoration: none; list-style: none; width: 100%;" href="./admin_clientes.php" target="_blank">
                        <button class="links"><i class='bx bx-user'></i>Clientes</button>
                    </a>
                </div>
                <div class="line">
                    <a style="text-decoration: none; width: 100%;" href="./admin_produtos.php" target="_blank">
                        <button class="links"><i class='bx bx-cart'></i>Produtos</button>
                    </a>
                </div>
                <hr>
                <div class="line">
                    <a style="text-decoration: none; width: 100%;" href="./admin_noticias.php" target="_blank">
                        <button class="links"><i class='bx bx-news'></i></i>Notícias</button>
                    </a>
                </div>
                <div class="line">
                    <a href="./inicial.php" style="text-decoration: none; width: 100%;" target="_blank">
                        <button class="links"><i class='bx bx-file-blank'></i>Páginas</button>
                    </a>
                </div>
            </div>
        </div>
        <form class="todos" action="../Controller/admin.php" method="post">
            <main class="todos" style="padding: 2rem 0 0 0.6rem; height: 130%;">
                <div class="inputs" style="display: flex; flex-direction: column;">
                    <div class="crud-opcoes" style="display: flex; flex-direction: row; gap: 1rem; justify-content: center;">
                        <h1 style="margin-bottom: 1rem; font-size: 2.5rem;" name="title-crud">CRUD Produtos</h1>
                        <div class="botoes" style="display: flex; flex-direction: row; gap: 0.2rem;">
                            <button class="btn btn-outline-dark" name="adicionar">Adicionar</button>
                            <button class="btn btn-outline-dark" name="editar">Editar</button>
                            <button class="btn btn-outline-dark remover" name="remover">Remover</button>
                        </div>
                    </div>
                    <div class="inputs-area-todos">
                        <table class="clientes-container todos">
                            <tr>
                                <th>produto_id</th>
                                <th>categorias_id</th>
                                <th>imagem_produto</th>
                                <th>nome</th>
                                <th>descricao</th>
                                <th>preco</th>
                            </tr>
                            <?php for ($i = 0; $i < count($produtos); $i++) { ?>
                                <tr>
                                    <td style="display: flex; justify-content:center; align-items: center;">
                                        <?php echo htmlspecialchars($produtos[$i]['produto_id']); ?>
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <?php if ($produtos[$i]['categorias_id'] == 1) {
                                            $produtos[$i]['categorias_id'] = "Calçados";
                                        } else if ($produtos[$i]['categorias_id'] == 2) {
                                            $produtos[$i]['categorias_id'] = "Acessórios";
                                        } else if ($produtos[$i]['categorias_id'] == 3) {
                                            $produtos[$i]['categorias_id'] = "Camisetas";
                                        } else if ($produtos[$i]['categorias_id'] == 4) {
                                            $produtos[$i]['categorias_id'] = "Shorts";
                                        } else if ($produtos[$i]['categorias_id'] == 5) {
                                            $produtos[$i]['categorias_id'] = "Meias";
                                        } else if ($produtos[$i]['categorias_id'] == 6) {
                                            $produtos[$i]['categorias_id'] = "Bolas";
                                        }
                                        echo $produtos[$i]['categorias_id']; ?>
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <img src="<?php $imagem = base64_encode($produtos[$i]['imagem_produto']);
                                                    echo "data:image/jpeg;base64," . $imagem; ?>" alt="Imagem Produto" width="180px" height="180px">
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <?php echo htmlspecialchars($produtos[$i]['nome']); ?>
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <?php echo htmlspecialchars($produtos[$i]['descricao']); ?>
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <?php echo htmlspecialchars($produtos[$i]['preco']); ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </main>
        </form>
    </div>
    <br><br><br><br><br>
    <?php include '../Routes/footer.php'; ?>
    <script src="admin.js"></script>
</body>

</html>