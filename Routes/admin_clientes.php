<!DOCTYPE html>
<?php
require '../Controller/admin.php';
$clientes = buscarCliente();

?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
    <link rel="stylesheet" href="../Routes/css/admin.css">
    <link rel="stylesheet" href="../Routes/css/admin_crud_produtos.css">
    <title>CRUD CLIENTES</title>
</head>

<body>
    <?php include '../Routes/perfil-on-navbar.php'; ?>
    <div style="display: flex; flex-direction: row; gap: 1rem;">
        <div class="sidebar-part">
            <button id="openSidebarBtn" onclick="openSidebar()" style="display:none;"><i class='bx bx-menu'></i></button>
            <div id="sidebar" class="sidebar">
                <button id="closeSidebarBtn" onclick="closeSidebar()"><i class='bx bx-x'></i></button>
                <div class="line">
                    <a href="./admin.php" style="text-decoration: none; width: 100%;">
                        <button class="links"><i class='bx bx-left-arrow'></i>Voltar</button>
                    </a>
                </div>
                <div class="line">
                    <a href="./admin.php" style="text-decoration: none; width: 100%;">
                        <button class="links"><i class='bx bx-home'></i>Início</button>
                    </a>
                </div>
                <div class="line">
                    <a href="./admin_clientes.php" style="text-decoration: none; width: 100%;">
                        <button class="links"><i class='bx bx-user'></i>Clientes</button>
                    </a>
                </div>
                <div class="line">
                    <a style="text-decoration: none; width: 100%;" href="./admin_produtos.php" target="_blank">
                        <button class="links"><i class='bx bx-cart'></i>Produtos</button>
                    </a>
                </div>
                <hr>
                <div class="line">
                    <button class="links"><i class='bx bx-bell'></i>Notificações</button>
                </div>
                <div class="line">
                    <a href="./inicial.php" style="text-decoration: none; width: 100%;" target="_blank">
                        <button class="links"><i class='bx bx-file-blank'></i>Páginas</button>
                    </a>
                </div>
            </div>
        </div>
        <form class="todos" action="../Controller/admin.php" method="post">
            <main class="todos" style="padding: 2rem 0 0 0.6rem; height: 130%;">
                <div class="inputs" style="display: flex; flex-direction: column;">
                    <div class="crud-opcoes" style="display: flex; flex-direction: row; gap: 1rem; justify-content: center; position: relative; left: 19.5rem;">
                        <h1 style="margin-bottom: 1rem; font-size: 2.5rem;" name="title-crud">CRUD Clientes</h1>
                        <div class="botoes" style="display: flex; flex-direction: row; gap: 0.2rem;">
                            <button class="btn btn-outline-dark" name="adicionar_cliente">Adicionar</button>
                            <button class="btn btn-outline-dark" name="editar_cliente">Editar</button>
                            <button class="btn btn-outline-dark remover" name="remover_cliente">Remover</button>
                        </div>
                    </div>
                    <div class="inputs-area-todos">
                        <table class="clientes-container todos" style="display: flex; flex-direction: row; width: 232.6%;">
                            <tr class="clientes" style="width: 84.2%;">
                                <th>usuario_id</th>
                                <th>nome</th>
                                <th>email</th>
                                <th>senha</th>
                                <th>imagem_perfil</th>
                                <th>cliente_id</th>
                            </tr>
                            <?php for ($i = 0; $i < count($clientes); $i++) { ?>
                                <tr class="clientes" style="width: 84.2%;">
                                    <td style="display: flex; justify-content:center; align-items: center;">
                                        <?php echo htmlspecialchars($clientes[$i]['usuario_id']); ?>
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <?php echo htmlspecialchars($clientes[$i]['nome']); ?>
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <?php echo htmlspecialchars($clientes[$i]['email']); ?>
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <?php echo htmlspecialchars($clientes[$i]['senha']); ?>
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <img src="<?php $imagem = base64_encode($clientes[$i]['imagem_perfil']);
                                                    echo "data:image/jpeg;base64," . $imagem; ?>" alt="Imagem Produto" width="160px" height="160px">
                                    </td>
                                    <td style="display: flex; justify-content: center; align-items: center;">
                                        <?php echo htmlspecialchars($clientes[$i]['cliente_id']); ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </main>
        </form>
    </div>
    <br><br><br><br><br>
    <?php include '../Routes/footer.php'; ?>
    <script src="admin.js"></script>
</body>

</html>