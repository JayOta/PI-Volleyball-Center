<!DOCTYPE html>
<html>

<head>
 
    <link rel="stylesheet" type="text/css" href="css/admin.css">
 
</head>

<body>
  <form>
    <main>
            <button id="openSidebarBtn" onclick="openSidebar()" style="display:none;"><img src="./img/menu-line.png"></button>
            <div id="sidebar" class="sidebar">
                <button id="closeSidebarBtn" onclick="closeSidebar()"><img src="./img/close-fill.png"></button>
                <div class="line">
                    <button class="links"><img class="p-img"  src="./img/dashboard-fill.png" alt="">Painel</button>
                </div>
                <div class="line">
                    <button class="links"><img class="p-img" src="./img/group-line.png">Clientes</button>
                </div>
                <div class="line">
                    <button class="links"><img class="p-img" src="./img/shopping-cart-fill.png" alt="">Produtos</button>
                </div>
                <div class="line">
                    <button class="links"><img class="p-img"  src="./img/bar-chart-fill.png" alt="">Estatísticas</button>
                </div>
                <hr>
                <div class="line">
                    <button class="links"><img class="p-img"  src="./img/notification-2-fill.png" alt="">Notificações</button>
                </div>
                <div class="line">
                    <button class="links"><img class="p-img"  src="./img/file-3-fill.png" alt="">Documentos</button>
                </div> 
            </div>
    <script src="admin.js"></script>
</body>
</html>