<!DOCTYPE html>
<?php
require '../Controller/loja.php';
require '../Controller/admin.php';

$produtos = produtoID($_GET['id']);
$categorias = buscarCategoria();
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
    <link rel="stylesheet" href="./css/admin_crud_adicionar.php.css">
    <title>CRUD PRODUTOS</title>
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

    <?php include '../Routes/perfil-on-navbar.php'; ?>

    <div style="display: flex; flex-direction: row; gap: 1rem;">
        <div class="sidebar-part">
            <button id="openSidebarBtn" onclick="openSidebar()" style="display:none;"><i class='bx bx-menu'></i></button>
            <div id="sidebar" class="sidebar">
                <button id="closeSidebarBtn" onclick="closeSidebar()"><i class='bx bx-x'></i></button>
                <div class="line">
                    <a href="./admin.php" style="text-decoration: none;" target="_blank"><button class="links"><i class='bx bx-left-arrow'></i>Voltar</button></a>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bxs-dashboard'></i>Categorias</button>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bx-user'></i>Clientes</button>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bx-cart'></i>Produtos</button>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bx-bar-chart-alt-2'></i>CRUD Produtos</button>
                </div>
                <hr>
                <div class="line">
                    <button class="links"><i class='bx bx-bell'></i>Notificações</button>
                </div>
                <div class="line">
                    <button class="links"><i class='bx bx-file-blank'></i>Páginas</button>
                </div>
            </div>
        </div>
        <form action="../Controller/admin.php" method="post" enctype="multipart/form-data">
            <main style="padding: 2rem 0 0 0.6rem;">
                <div class="inputs" style="display: flex; flex-direction: column;">
                    <div class="crud-opcoes" style="display: flex; flex-direction: row; gap: 1rem;">
                        <h1 style="margin-bottom: 1rem; font-size: 2.5rem;" name="title-crud">Editar Produto</h1>
                        <div class="botoes" style="display: flex; flex-direction: row; gap: 0.2rem;">
                            <button class="btn btn-outline-dark" name="adicionar">Adicionar</button>
                            <button class="btn btn-outline-dark active" name="editar">Editar</button>
                            <button class="btn btn-outline-dark" name="remover">Remover</button>
                        </div>
                    </div>
                    <div class="inputs-area">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome</span>
                            <input type="text" class="form-control" name="nome" aria-describedby="basic-addon1" style="width: 30rem;" value="<?php echo $produtos['nome'];?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Descrição</span>
                            <input type="text" class="form-control" name="descricao" aria-describedby="basic-addon1" value="<?php echo $produtos['descricao'];?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Preço</span>
                            <input type="number" class="form-control" name="preco" aria-describedby="basic-addon1" step="0.01" value="<?php echo number_format($produtos['preco'], 2, '.', '');?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Imagem</span>
                            <input type="file" class="form-control" name="imagem" aria-describedby="basic-addon1" placeholder="Selecione">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Quantidade de Estoque</span>
                            <input type="number" class="form-control" name="qtd_estoque" aria-describedby="basic-addon1" value="<?php echo $produtos['qtd_estoque'];?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Categoria</span>
                            <select class="form-control" name="categoria" aria-describedby="basic-addon1">
                                <?php for ($i = 0; $i < count($categorias); $i++) { ?>
                                    <option><?php echo $categorias[$i]['nome']; ?></option>
                                <?php } ?>
                            </select>
                            <input class="send-crud btn btn-outline-success" name="update" type="submit" value="editar">
                        </div>
                    </div>
                </div>
            </main>
    </div>
    <?php include '../Routes/footer.php'; ?>
    <script src="admin.js"></script>
</body>

</html>