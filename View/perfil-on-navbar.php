<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../View/css/navbar.css">
    <link rel="stylesheet" href="../View/css/perfil-on-navbar.css">
</head>

<body>
    <nav class="navbar">
        <div class="container-navbar">
            <a href="inicial.php">
                <img src="img/logo-volei.png" class="logo-img">
            </a>
            <ul class="links-navigation">
                <a href="../View/inicial.php">
                    <li id="inicial">Início</li>
                </a>
                <a href="../View/fundamentos.php">
                    <li id="link-2">Fundamentos</li>
                </a>
                <a href="../View/noticias.php">
                    <li id="link-3">Notícias</li>
                </a>
                <a href="../View/loja.php">
                    <li id="link-4">Loja</li>
                </a>
                <div class="login-area">
                    <div class="perfil">
                        <img src="img/logo-volei.png" alt="perfil-img" class="perfil-img">
                        <!-- iniciar uma session -->
                        <details closed>
                            <summary>J. Otávio</summary>
                            <ul>
                                <div class="details-content">
                                    <i class='bx bx-user'></i>
                                    <li class="li-perfil">Meu Perfil</li>
                                </div>
                                <div class="details-content">
                                    <i class='bx bx-cog'></i>
                                    <li class="li-perfil">Configurações</li>
                                </div>
                                <div class="details-content">
                                    <i class='bx bx-log-in'></i>
                                    <li class="li-perfil">Sair</li>
                                </div>
                            </ul>
                        </details>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</body>

</html>