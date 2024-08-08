<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
    <link rel="stylesheet" href="navbar2.css">
</head>

<body>
    <form method="post">
        <nav class="navbar">
            <div class="container-fluid">
                <a href="inicial.php">
                    <img src="img/logo-volei.png" class="logo-img">
                </a>
                <ul class="navigation">
                    <li id="inicial" href="inicial.php">Início</li>
                    <li id="link-2" href="fundamentos.php">Fundamentos</li>
                    <li id="link-3" href="noticias.php">Notícias</li>
                    <li id="link-4" href="loja.php">Loja</li>
                    <div class="login-area">
                        <a href="../View/index.php" id="link-5">
                            <button class="LoginBtn">Login</button>
                        </a>
                    </div>
                </ul>
            </div>
        </nav>
    </form>
</body>

</html>