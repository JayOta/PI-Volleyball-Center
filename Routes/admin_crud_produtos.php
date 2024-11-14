<!DOCTYPE html>
<?php  session_start(); ?>
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
    <link rel="stylesheet" href="./css/admin_crud_produtos.css">
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

        <div style="display: inline-block">
        <main style="padding: 2rem 0 0 0.6rem;">
            <div class="inputs" style="display: flex; flex-direction: column;">
                <div class="crud-opcoes" style="display: flex; flex-direction: row; gap: 1rem;">
                    <h1 style="margin-bottom: 1rem; font-size: 2.5rem;">Adicionar Produtos</h1>
                   
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9; ">Nome</span>
                    <input type="text" class="form-control" name="" aria-describedby="basic-addon1" style="width: 30rem; border: 1px solid #0ea5e9; ">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9; ;">Descrição</span>
                    <input type="text" class="form-control" name="" aria-describedby="basic-addon1" style="width: 30rem; border: 1px solid #0ea5e9; ">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9; ">Preço</span>
                    <input type="number" class="form-control" name="" aria-describedby="basic-addon1" style="width: 30rem; border: 1px solid #0ea5e9; ">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9; ">Imagem</span>
                    <input type="image" class="form-control" name="" aria-describedby="basic-addon1" style="width: 30rem; border: 1px solid #0ea5e9; ">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9;" >Categoria</span>
                    <input type="text" class="form-control" name="" aria-describedby="basic-addon1" style="width: 30rem; border: 1px solid #0ea5e9; ">
                    <!-- <input class="send-crud btn btn-outline-success" type="submit" value="Aplicar"> -->
                </div>
            </div> 
            <div class="botoes" style="display: flex; flex-direction: row; gap: 0.2rem;">
                        <button class="btn btn-outline-dark active">Adicionar</button>
                        <!-- <button class="btn btn-outline-dark">Editar</button>
                        <button class="btn btn-outline-dark">Remover</button> -->
            </div>
        </main>
    </div>

    <main style="padding: 2rem 0 0 0.6rem;">
            <div class="inputs" style="display: flex; flex-direction: column;">
                <div class="crud-opcoes" style="display: flex; flex-direction: row; gap: 1rem;">
                    <h1 style="margin-bottom: 1rem; font-size: 2.5rem;">Editar Produtos</h1>
                   
                </div>
                <div class="input-group mb-3" >
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9;">Nome</span>
                    <input type="text" class="form-control" name="" aria-describedby="basic-addon1" style="width: 30rem; border: 1px solid #0ea5e9;">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9;">Descrição</span>
                    <input type="text" class="form-control" name="" aria-describedby="basic-addon1"  style="width: 30rem; border: 1px solid #0ea5e9;">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9;">Preço</span>
                    <input type="number" class="form-control" name="" aria-describedby="basic-addon1"  style="width: 30rem; border: 1px solid #0ea5e9;">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9;;">Imagem</span>
                    <input type="image" class="form-control" name="" aria-describedby="basic-addon1"  style="width: 30rem; border: 1px solid #0ea5e9;">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" style="border: 1px solid #0ea5e9;">Categoria</span>
                    <input type="text" class="form-control" name="" aria-describedby="basic-addon1"  style="width: 30rem; border: 1px solid #0ea5e9;">
                    <!-- <input class="send-crud btn btn-outline-success" type="submit" value="Aplicar"> -->
                </div>
            </div> 
            <div class="botoes" style="display: flex; flex-direction: row; gap: 0.2rem;">
                        <!-- <button class="btn btn-outline-dark active">Adicionar</button> -->
                        <button class="btn btn-outline-dark active">Editar</button>
                        <!--<button class="btn btn-outline-dark">Remover</button> -->
            </div>
        </main>
         </div>
   
    <div class="footer-admin" style="position: relative; top: 15.2  rem;">
        <?php include '../Routes/footer.php'; ?>
    </div>
    <script src="admin.js"></script>
</body>

</html>