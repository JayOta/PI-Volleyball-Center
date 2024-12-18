<!DOCTYPE html>
<?php
require '../Controller/admin.php';

$clientes = buscarCliente();
$cliente = clienteID($_GET['id']);
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
    <link rel="stylesheet" href="../Routes/css/admin.css">
    <link rel="stylesheet" href="./Routes/css/admin-crud-produtos.css">
    <link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
    <link rel="stylesheet" href="./css/admin_produtos_adicionar.php.css">
    <title>CRUD CLIENTES</title>
    <style>
        .crud-opcoes {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        button.btn {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 2rem;
        }
    </style>
</head>

<body>
    <!-- Teste para ver se estou pegando o id do usuario(na verdade estou tentando descobrir como eu pego o campo 'cliente_id' do usuario para fazer o update do cliente na tabelas 'usuarios' e 'clientes' -> <?php //echo $clientes[$_GET['id']]; 
                                                                                                                                                                                                                ?> -->
    <?php include '../Routes/perfil-on-navbar-admin.php'; ?>

    <div style="display: flex; flex-direction: row; gap: 1rem;">
        <div class="sidebar-part">
            <button id="openSidebarBtn" onclick="openSidebar()" style="display:none;"><i class='bx bx-menu'></i></button>
            <div id="sidebar" class="sidebar">
                <button id="closeSidebarBtn" onclick="closeSidebar()"><i class='bx bx-x'></i></button>
                <div class="line">
                    <a href="./admin_clientes.php" style="text-decoration: none; width: 100%;">
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
        <form action="../Controller/admin.php" method="post" enctype="multipart/form-data">
            <main style="padding: 2rem 0 0 0.6rem;">
                <div class="inputs" style="display: flex; flex-direction: column;">
                    <div class="crud-opcoes" style="display: flex; flex-direction: row; gap: 1rem;">
                        <h1 style="margin-bottom: 1rem; font-size: 2.5rem;" name="title-crud">Editar Cliente</h1>
                        <div class="botoes" style="display: flex; flex-direction: row; gap: 0.2rem;">
                            <button class="btn btn-outline-dark" name="adicionar_cliente">Adicionar</button>
                            <button class="btn btn-outline-dark active" name="editar_cliente">Editar</button>
                            <button class="btn btn-outline-dark" name="remover_cliente">Remover</button>
                        </div>
                    </div>
                    <div class="inputs-area">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" name="nome_cliente" aria-describedby="basic-addon1" style="width: 30rem;" value="<?php echo $cliente['nome']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                            <input type="text" class="form-control" name="email_cliente" aria-describedby="basic-addon1" value="<?php echo $cliente['email']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Senha</span>
                            <input type="text" class="form-control" name="senha_cliente" aria-describedby="basic-addon1" value="<?php echo $cliente['senha']; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Cliente ID</span>
                            <select class="form-control" name="cliente_id" aria-describedby="basic-addon1">
                                <?php for ($i = 0; $i < count($clientes); $i++) { ?>
                                    <option><?php echo $clientes[$i]['cliente_id']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Imagem do Perfil</span>
                            <input type="file" class="form-control" name="imagem_cliente" aria-describedby="basic-addon1" placeholder="Selecione">
                            <input class="send-crud btn btn-outline-success" name="editar_cliente" type="submit" value="Inserir">
                        </div>
                    </div>
                </div>
            </main>
        </form>
    </div>
    <?php include '../Routes/footer.php'; ?>
    <script src="admin.js"></script>
</body>

</html>