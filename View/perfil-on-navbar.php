<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../View/css/navbar.css">
    <link rel="stylesheet" href="../View/css/perfil.css">
    <link rel="stylesheet" href="../View/css/perfil-on-navbar.css">
</head>

<body>
    <form method="post">
        <nav class="navbar navbar-expand-lg p-0 m-0" style="background-color: #F9CC02; width: 100%;">
            <div class="container-fluid" style="background-color: #F9CC02;">
                <a href="inicial.php">
                    <img src="img/logo-volei.png" class="logo-img" style="width: 82px; margin-bottom: 2px; margin-top: 2px; padding-bottom: 2px; padding-top: 2px;">
                </a>

                <header>
                    <nav class="navigation">
                        <a id="inicial" href="inicial.php">Início</a>
                        <a id="link-2" href="fundamentos.php">Fundamentos</a>
                        <a id="link-3" href="noticias.php">Notícias</a>
                        <a id="link-4" href="loja.php">Loja</a>
                        <?php
                        include "../View/perfil.php";
                        ?>
                    </nav>
                </header>
            </div>
        </nav>
    </form>
</body>

</html>