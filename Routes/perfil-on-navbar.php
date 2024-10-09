<!DOCTYPE html>
<?php 
    session_start();
   $imagem = base64_encode($_SESSION['usuario_atual']['imagem_perfil']); 
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
</head>

<body>
    <form method="post" action="../Controller/login.php">
        <nav class="navbar">
            <div class="container-navbar">
                <a href="inicial.php">
                    <img src="img/logo-volei.png" class="logo-img">
                </a>
                <ul class="links-navigation">
                <a href=" ../Routes/inicial.php">
                    <li id="inicial">Início</li>
                    </a>
                    <a href="../Routes/fundamentos.php">
                        <li id="inicial">Fundamentos</li>
                    </a>
                    <a href="../Routes/noticias.php">
                        <li id="inicial">Notícias</li>
                    </a>
                    <a href="../Routes/loja.php">
                        <li id="inicial">Loja</li>
                    </a>
                    <div class="login-area">
                        <div class="perfil">
                            <img src="<?php echo "data:image/jpeg;base64," . $imagem;?>" alt="perfil-img" class="perfil-img" name="perfil-img">
                            <details closed>
                                <summary style="color: #fff; display: flex; flex-direction: row;"> <?php
                                            echo $_SESSION['usuario_atual']['nome'] ?? "Undefined";
                                            ?></summary>
                                <ul>
                                    <div class="details-content">
                                        <i class='bx bx-user'></i>
                                        <a href="../Routes/index.php"><li class="li-perfil">Meu Perfil</li></a>
                                    </div>
                                    <div class="details-content">
                                        <i class='bx bx-cog'></i>
                                        <li class="li-perfil">Configurações</li>
                                    </div>
                                        <button type="submit" name="logout" style="width: 100%; border: none; background: transparent; border-radius: 2px;">
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