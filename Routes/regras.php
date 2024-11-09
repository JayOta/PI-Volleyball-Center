<!DOCTYPE html>
<?php
require "../Controller/regras.php";
$regra = buscarRegras();

// // Função para quebrar a linha
// function quebraLinha($descricao, $limite) {
//     if (strlen($descricao) > $limite) {
//         $palavras = explode(' ', $descricao);
//         $novaDescricao = '';
//         $linhaAtual = '';

//         foreach ($palavras as $palavra) {
//             if (strlen($linhaAtual . ' ' . $palavra) > $limite) {
//                 $novaDescricao .= trim($linhaAtual) . "<br>";
//                 $linhaAtual = $palavra;
//             } else {
//                 $linhaAtual .= ' ' . $palavra;
//             }
//         }

//         $novaDescricao .= trim($linhaAtual);
//         return $novaDescricao;
//     }

//     return $descricao;
// }

// $limiteCaracteres = 140; // Limite de caracteres por linha
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Routes/img/logo-volei.png" type="image/x-icon">
    <title>Treine em casa</title>
    <link rel="stylesheet" href="../View/css/regras.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/regras.css">
    <link rel="stylesheet" href="../View/css/perfil-on-navbar.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        img {
            transition: 0.4s ease-in-out;
            width: 100%;
            height: 100%;
        }

        img:hover {
            box-shadow: 4px 4px 0px #363636;
            transform: scale(1.01);
            width: 100%;
            object-fit: cover;
        }

        .row-cols-2 {
            animation: appear linear;
            animation-timeline: view();
            animation-range: entry 0% cover 40%;
        }
    </style>
</head>

<body>
    <?php include '../Routes/perfil-on-navbar.php'; ?>

    <ul class="nav nav-tabs d-flex justify-content-center" style="position: relative; margin-top: 20px;">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="fundamentos.php" style="color: #363636;">Fundamentos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="true" href="sistema-rodizio.php" style="color: #363636;">Sistema de Rodízio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="regras.php" style="color: #363636;">Regras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="historia.php" style="color: #363636;">História</a>
        </li>
    </ul>

    <div class="container"><br><br>
        <h1 style="transform: translateX(560px);">Regras</h1><br>
        <?php for ($i = 0; $i < count($regra); $i++) { ?>
            <div class="justify-content-center" style="position: relative; left: 3.2rem;">
                <div class="card m-3" style="display: flex; flex-direction: column; height: 42rem;">
                    <div class="col-md-4 d-flex align-items-center justify-content" style="width: 500px; margin-left: 23px; margin-top: 20px; height: auto;">
                        <img src="<?php
                                    $imagem = base64_encode($regra[$i]['imagem_regras']);
                                    echo "data:image/jpeg;base64," . $imagem;
                                    ?>" class="img-fluid rounded-start" alt="" style="border-radius: 5px; cursor:pointer; height: 20rem;">
                    </div>
                    <div class="desciption">
                        <div class="card-body" style="margin-left: 7px;">
                            <h5 class="card-title" style="color: #1e90ff;"><?php echo $regra[$i]['titulo_regras']; ?></h5>
                            <p class="card-text-center" style="text-align: justify;"><?php echo $regra[$i]['descricao']; // quebraLinha($regras[$i]['descricao'], $limiteCaracteres); 
                                                                                        ?></p>
                        </div>
                    </div>
                </div>
            </div><?php } ?>
    </div>
    <br><br><br><br>
    <hr style="width: 80%; margin-left: 200px;">
    <div class="aviso" style="display: flex; flex-direction:column; justify-content: center; align-items: center;"></div>
    <br><br>
    <?php include 'footer.php'; ?>
</body>

</html>