<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../View/css/perfil-on-navbar.css">
</head>

<body>
    <form method="post" action="../Controller/login.php">
        <nav class="navbar">
            <div class="container-navbar">
                <a href="inicial.php">
                    <img src="img/logo-volei.png" class="logo-img">
                </a>
                <ul class="links-navigation">
                <a href=" ../View/inicial.php">
                    <li id="inicial">Início</li>
                    </a>
                    <a href="../View/fundamentos.php">
                        <li id="inicial">Fundamentos</li>
                    </a>
                    <a href="../View/noticias.php">
                        <li id="inicial">Notícias</li>
                    </a>
                    <a href="../View/loja.php">
                        <li id="inicial">Loja</li>
                    </a>
                    <div class="login-area">
                        <div class="perfil">
                            <img src="img/perfil.png" alt="perfil-img" class="perfil-img">
                            <details closed>
                                <summary> <?php
                                            session_start();
                                            echo $_SESSION['usuario_atual']['nome'] ?? "Undefined";
                                            ?></summary>
                                <ul>
                                    <div class="details-content">
                                        <i class='bx bx-user'></i>
                                        <a href="../View/index.php"><li class="li-perfil">Meu Perfil</li></a>
                                    </div>
                                    <div class="details-content">
                                        <i class='bx bx-cog'></i>
                                        <li class="li-perfil">Configurações</li>
                                    </div>
                                        <button type="submit" name="logout" style="width: 99.5%; border: none; background: transparent; border-radius: 2px;">
                                            <div class="details-content">
                                                <i class='bx bx-log-in'></i>
                                                <li class="li-perfil">Sair</li>
                                            </div>
                                        </button>
                                </ul>
                            </details>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </form>
</body>

</html>