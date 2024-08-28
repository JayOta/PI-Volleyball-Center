<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../View/css/navbar.css">
    <link rel="stylesheet" href="../View/css/perfil-on-navbar.css">
    <title>Document</title>
</head>

<body>
    <div class="login-area">
        <div class="perfil">
            <img src="img/logo-volei.png" alt="perfil-img" class="perfil-img">
            <details closed>
                <summary> <?php
                            session_start();
                            echo $_SESSION['usuario_atual']['nome'] ?? "Not exits";
                            ?></summary>
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
</body>

</html>