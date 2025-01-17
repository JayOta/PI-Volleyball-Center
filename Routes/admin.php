<!DOCTYPE html>
<?php
require '../Controller/admin.php';
require '../Controller/loja.php';
require "../Controller/noticias.php";
$noticias = buscarnoticias();
$cliente = buscarCliente();
$produtos = buscarProdutos();
$produtos_vendidos = produtoAdicionadoHoje();
$qtd_clientes = count($cliente);
$qtd_produtos = count($produtos);
$qtd_noticias = count($noticias);
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../Routes/img/logo-volei.png" type="image/x-icon">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../Routes/css/admin.css">
    <link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
</head>

<body>

    <?php include '../Routes/perfil-on-navbar-admin.php'; ?>
    <main class="main-class">
        <div class="separator">
            <button id="openSidebarBtn" onclick="openSidebar()" style="display:none;"><i class='bx bx-menu'></i></button>
            <div id="sidebar" class="sidebar">
                <button id="closeSidebarBtn" onclick="closeSidebar()"><i class='bx bx-x'></i></button>
                <div class="line">
                    <a style="text-decoration: none; width: 100%;" href="./admin_clientes.php" target="_blank">
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
            <div class="main-content" id="main-content" style="margin-top: 20px;">
                <section>
                    <div class="mini-aligns">
                        <div class="mini-container">
                            <h5>Quantidade de Clientes:</h5>
                            <h2 class="qtd-clientes"><?php echo $qtd_clientes; ?></h2>
                        </div>
                        <div class="mini-container">
                            <h5>Quantidade de Produtos:</h5>
                            <h2 class="qtd-produtos"><?php echo $qtd_produtos; ?></h2>
                        </div>
                        <div class="mini-container">
                            <h5>Quantidade de Notícias:</h5>
                            <h2 class="qtd-produtos"><?php echo $qtd_noticias; ?></h2>
                        </div>
                    </div>

                    <div class="big-aligns">
                        <div class="big-container">
                            <table class="clientes-container um">
                                <tr>
                                    <th>Clientes</th>
                                </tr>
                                <?php for ($i = 0; $i < count($cliente); $i++) { ?>
                                    <tr>
                                        <td><?php echo $cliente[$i]['nome']; ?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <div class="big-container">
                            <table class="clientes-container dois">
                                <tr>
                                    <th>Produtos</th>
                                </tr>
                                <?php for ($i = 0; $i < count($produtos); $i++) { ?>
                                    <tr>
                                        <td><?php echo $produtos[$i]['nome']; ?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <div class="big-container">
                            <table class="clientes-container dois">
                                <tr>
                                    <th>Notícias</th>
                                </tr>
                                <?php for ($i = 0; $i < count($noticias); $i++) { ?>
                                    <tr>
                                        <td><?php if ($noticias[$i]['titulo_noticias'] == NULL) {
                                                echo "Nome -> NULL";
                                            } else {
                                                echo $noticias[$i]['titulo_noticias'];
                                            } ?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </section>
                <aside>
                    <div class="aside-containers card-noticia">
                        <a href="./noticias.php" target="_blank" style="text-decoration: none; color: #fff;">
                            <img src="<?php $imagem = base64_encode($noticias[0]['imagem_noticias']);
                                        echo "data:image/jpeg;base64," . $imagem; ?>" class="card-img-top" alt="Seleção" style="width: 28rem; height: 22rem; border-radius: 5px; position: relative; top: 2.5rem;">
                            <h5 class="none" style="position: relative; bottom: 5rem;"><?php echo $noticias[0]['titulo_noticias'] ?></h5>
                        </a>
                    </div>

                    <div class="aside-containers card-noticia">
                        <a href="./noticias.php" target="_blank" style="text-decoration: none; color: #fff;">
                            <img src="<?php $imagem = base64_encode($noticias[1]['imagem_noticias']);
                                        echo "data:image/jpeg;base64," . $imagem; ?>" class="card-img-top" alt="Seleção" style="width: 28rem; height: 22rem; border-radius: 5px; position: relative; top: 1.75rem;">
                            <h5 class="none" style="position: relative; bottom: 5rem;"><?php echo $noticias[1]['titulo_noticias'] ?></h5>
                        </a>
                    </div>
                    <div class="aside-containers">
                        <div id="carouselExampleInterval" class="carousel slide d-flex" data-bs-ride="carousel">
                            <div class="carousel-inner" style="transition: 0.5s ease-in-out; width: 28rem; height: 22rem; box-shadow: 0px 0px 12px #fff;  display: flex; ">
                                <!-- Criar um for loop entre os produtos [0 - 2] -->
                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                    <?php for ($i = 0; $i < 3; $i++) { ?>
                                        <a href="../Routes/loja.php" target="_blank">
                                            <div class="carousel-item active" style="width: 28rem; height: 22rem">
                                                <img class="anuncio" src="<?php $imagem = base64_encode($produtos[$i]['imagem_produto']);
                                                                            echo "data:image/jpeg;base64," . $imagem; ?>" class="d-block w-100" alt="..." style="width: 28rem; height: 22rem;">
                                            </div>
                                        </a>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="aside-containers">
                        <div id="carouselExampleInterval" class="carousel slide d-flex" data-bs-ride="carousel">
                            <div class="carousel-inner" style="transition: 0.5s ease-in-out; width: 28rem; height: 22rem; box-shadow: 0px 0px 12px #fff;  display: flex; ">
                                <!-- Criar um for loop entre os produtos [0 - 2] -->
                                <?php for ($i = 0; $i < 3; $i++) { ?>
                                    <?php for ($i = 5; $i < 8; $i++) { ?>
                                        <a href="../Routes/loja.php" target="_blank">
                                            <div class="carousel-item active" style="width: 28rem; height: 22rem">
                                                <img class="anuncio" src="<?php $imagem = base64_encode($produtos[$i]['imagem_produto']);
                                                                            echo "data:image/jpeg;base64," . $imagem; ?>" class="d-block w-100" alt="..." style="width: 28rem; height: 22rem;">
                                            </div>
                                        </a>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br>
    <?php
    include 'footer.php';
    ?>
    <script src="admin.js"></script>
</body>

</html>