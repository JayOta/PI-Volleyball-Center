<!DOCTYPE html>
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
    <title>Admin Page</title>
    <link rel="stylesheet" href="../View/css/navbar.css">
    <link rel="stylesheet" href="../View/css/admin.css">
    <link rel="stylesheet" href="../View/css/perfil-on-navbar.css">
</head>

<body>

    <?php include '../View/perfil-on-navbar.php'; ?>
    <main class="main-class">
        <div class="separator">
            <button id="openSidebarBtn" onclick="openSidebar()" style="display:none;"><i class='bx bx-menu'></i></button>
            <div id="sidebar" class="sidebar">
                <button id="closeSidebarBtn" onclick="closeSidebar()"><i class='bx bx-x'></i></button>
                <div class="line">
                    <button class="links"><i class='bx bxs-dashboard'></i>Painel</button>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bx-user' ></i>Clientes</button>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bx-cart'></i>Produtos</button>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bx-bar-chart-alt-2'></i>Estatísticas</button>
                </div>
                <hr>
                <div class="line">
                    <button class="links"><i class='bx bx-bell'></i>Notificações</button>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bx-file-blank'></i>Documentos</button>
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
                        <div class="big-container">Relatórios</div>
                        <div class="big-container">Vendas recentes | Hoje</div>
                        <div class="big-container">Mais vendidos | Hoje</div>
                    </div>
                </section>
                <aside>
                    <div class="aside-containers">Atividade Recente | Hoje</div>
                    <div class="aside-containers">Notícias e Atualizações | Hoje</div>
                    <div class="aside-containers"></div>
                    <div class="aside-containers"></div>
                </aside>
            </div>
        </div>
    </main>
    <br><br><br><br>
    <?php
    include 'footer.php';
    ?>

    <script src="admin.js"></script>
</body>

</html>