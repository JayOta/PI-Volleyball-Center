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
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/inicial.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/admin.css">
</head>

<body>

<nav class="navbar navbar-expand-lg p-0 m-0" style="background-color: #F9CC02;">
		<div class="container-fluid" style="background-color: #F9CC02;">
		<a href="inicial.php">
        	<img src="img/logo-volei.png" class="logo-img" style="width: 82px; margin-bottom: 2px; margin-top: 2px; padding-bottom: 2px; padding-top: 2px;">
      	</a>

			<header>
				<nav class="navigation" style="display: flex; flex-direction: row;">
					<input class="input-search form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="display: flex; justify-content: flex-end; align-items: flex-end; width: 360px;" />
                    <div class="perfil" style="display: flex; flex-direction: row;">
                        <i class='bx bx-bell'></i>
                        <i class='bx bx-message-detail'></i>
                        <div class="perfil-area" style="display: flex; flex-direction: row;">
                            <img src="img/logo-volei.png" alt="perfil-img" class="perfil-img" style="width: 40px; height: 40px;">
                            <summary>J. Otávio</summary>
                            <details closed>
                                    <li>Profile</li>
                                    <li>Settings</li>
                                    <li>Sign out</li>
                                </ul>
                            </details>
                        </div>
                    </div>
				</nav>
			</header>
		</div>
		</div>
	</nav>
  <main class="main-class"> 
    <div class="separator">
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
        <div class="main-content" id="main-content">
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