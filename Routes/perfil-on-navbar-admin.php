<!DOCTYPE html>
<?php
session_start();
require '../Controller/login.php';
if (isset($_SESSION['usuario_atual']['imagem_perfil'])) {
    $imagem = base64_encode($_SESSION['usuario_atual']['imagem_perfil']) ?? 'image error';
}
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
        <input type="hidden" value="logout" name="logout">
        <nav class="navbar">
            <div class="container-navbar">
                <a href="admin.php">
                    <img src="img/logo-volei.png" class="logo-img">
                </a>
                <ul class="links-navigation">
                    <a href=" ../Routes/admin_clientes.php">
                        <li id="inicial">Clientes</li>
                    </a>
                    <a href="../Routes/admin_produtos.php">
                        <li id="inicial">Produtos</li>
                    </a>
                    <a href="../Routes/admin_noticias.php">
                        <li id="inicial">Notícias</li>
                    </a>
                    <a href="../Routes/inicial.php">
                        <li id="inicial">Páginas</li>
                    </a>
                    <div class="login-area" style="position: relative; right: 0.7rem;">
                        <div class="perfil">
                            <?php if (isset($imagem)) { ?>
                                <img src="<?php echo "data:image/jpeg;base64," . $imagem; ?>" alt="perfil-img" class="perfil-img" name="perfil-img">
                            <?php } else { ?>
                                <img src="../Routes/img/logo-volei.png" alt="perfil-img" class="perfil-img" name="perfil-img">
                            <?php } ?>
                            <details closed>
                                <summary style="color: #fff; display: flex; flex-direction: row;"> <?php
                                                                                                    echo $_SESSION['usuario_atual']['nome'] ?? "<a style='text-decoration: none; color: #fff;' href='./index.php'>Fazer Login</a>";
                                                                                                    ?></summary>
                                <ul>
                                    <div class="details-content">
                                        <i class='bx bx-user'></i>
                                        <a href="../Routes/index.php">
                                            <li class="li-perfil">Meu Perfil</li>
                                        </a>
                                    </div>
                                    <div class="details-content">
                                        <i class='bx bx-cog'></i>
                                        <li class="li-perfil">Configurações</li> <!-- https://www.bootdey.com/snippets/view/profile-edit-settings -->
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