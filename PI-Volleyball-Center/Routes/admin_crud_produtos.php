<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Routes/css/admin.css">
    <link rel="stylesheet" href="./css/admin_crud_produtos.css">
    <link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
    <title>CRUD PRODUTOS</title>
</head>

<body>

    <?php include '../Routes/perfil-on-navbar.php'; ?>
    <button id="openSidebarBtn" onclick="openSidebar()" style="display:none;"><i class='bx bx-menu'></i></button>
    <div id="sidebar" class="sidebar">
        <button id="closeSidebarBtn" onclick="closeSidebar()"><i class='bx bx-x'></i></button>
        <div class="line">
            <a href="./admin.php" style="text-decoration: none;"><button class="links"><i class='bx bx-left-arrow'></i>Voltar</button></a>
        </div>
        <div class="line">
            <button class="links"><i class='bx bxs-dashboard'></i>Categorias</button>
        </div>
        <div class="line">
            <button class="links"><i class='bx bx-user'></i>Clientes</button>
        </div>
        <div class="line">
            <button class="links"><i class='bx bx-cart'></i>Produtos</button>
        </div>
        <div class="line">
            <button class="links"><i class='bx bx-bar-chart-alt-2'></i>CRUD Produtos</button>
        </div>
        <hr>
        <div class="line">
            <button class="links"><i class='bx bx-bell'></i>Notificações</button>
        </div>
        <div class="line">
            <button class="links"><i class='bx bx-file-blank'></i>Páginas</button>
        </div>
    </div>

    <script src="admin.js"></script>
</body>

</html>