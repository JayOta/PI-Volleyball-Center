<!DOCTYPE html>
<?php
require '../Controller/admin.php';
require '../Controller/loja.php';
$cliente = buscarCliente();
$produtos = buscarProdutos();
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

    <?php include '../Routes/perfil-on-navbar.php'; ?>
    <main class="main-class">
        <div class="separator">
            <button id="openSidebarBtn" onclick="openSidebar()" style="display:none;"><i class='bx bx-menu'></i></button>
            <div id="sidebar" class="sidebar">
                <button id="closeSidebarBtn" onclick="closeSidebar()"><i class='bx bx-x'></i></button>
                <div class="line">
                    <button class="links"><i class='bx bxs-dashboard'></i>Categorias</button>
                </div>
                <div class="line">
                    <a style="text-decoration: none;" href="./admin_clientes.php" target="_blank">
                        <button class="links"><i class='bx bx-user'></i>Clientes</button>
                    </a>
                </div>
                <div class="line">
                <a style="text-decoration: none;" href="./admin_produtos.php" target="_blank">
                    <button class="links"><i class='bx bx-cart'></i>Produtos</button>
                </a>
                </div>
                <div class="line">
                    <a style="text-decoration: none;" href="./admin_crud_adicionar.php" target="_blank">
                        <button class="links"><i class='bx bx-bar-chart-alt-2'></i>CRUD Produtos</button>
                    </a>
                </div>
                <hr>
                <div class="line">
                    <button class="links"><i class='bx bx-bell'></i>Notificações</button>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bx-file-blank'></i>Páginas</button>
                </div>
            </div>
            <div class="main-content" id="main-content" style="margin-top: 20px;">
                <section>
                    <div class="mini-aligns">
                        <div class="mini-container">Vendas</div>
                        <div class="mini-container">Receita</div>
                        <div class="mini-container">Clientes</div>
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
                            <table class="clientes-container tres">
                                <tr>
                                    <th>Vendidos Hoje</th>
                                </tr>
                                <tr>
                                    <td>Finalizar..</td>
                                </tr>
                                <tr>
                                    <td>Finalizar..</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
                <aside>
                    <div class="aside-containers">Atividade Recente | Hoje</div>

                    <div class="aside-containers">Notícias e Atualizações | Hoje </div>
                    <table class="noticias-container">

            </div>
            <div class="aside-containers"></div>
            <div class="aside-containers"></div>
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