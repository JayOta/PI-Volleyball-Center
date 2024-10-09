<!DOCTYPE html>
<?php
require "../Controller/regras.php";
$regras = buscarregras();

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
    <title>Treine em casa</title>
    <link rel="stylesheet" href="../View/css/regras.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/fundamentos.css">
    <link rel="stylesheet" href="../View/css/perfil-on-navbar.css">
</head>
<body>
    <?php include '../Routes/perfil-on-navbar.php'; ?>

    <ul class="nav nav-tabs d-flex justify-content-center" style="position: relative; margin-top: 20px;">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="fundamentos.php" style="color: #363636;">Fundamentos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="true" href="sistema-rodizio.php" style="color: #363636;">Sistema de Rodízio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="regras.php" style="color: #363636;">Regras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="historia.php" style="color: #363636;">História</a>
        </li>
    </ul>

    <div class="container"><br><br>
        <?php for ($i = 0; $i < count($regras); $i++) { ?>
        <div class="justify-content-center" style="position: relative; left: 3.2rem;">
            <div class="card m-3" style="display: flex; flex-direction: column; height: 42rem;">
                <div class="col-md-4 d-flex align-items-center justify-content" style="width: 500px; margin-left: 23px; margin-top: 20px; height: auto;">
                    <img src="<?php
                                $imagem = base64_encode($regras[$i]['imagem_regras']);
                                echo "data:image/jpeg;base64," . $imagem;
                                ?>" class="img-fluid rounded-start" alt="" style="border-radius: 5px; cursor:pointer; height: 20rem;">
                </div>
                <div class="desciption">
                    <div class="card-body" style="margin-left: 7px;">
                        <h5 class="card-title" style="color: #1e90ff;"><?php echo $regras[$i]['titulo_regras']; ?></h5>
                        <p class="card-text-center"><?php echo $regras[$i]['descricao'];// quebraLinha($regras[$i]['descricao'], $limiteCaracteres); ?></p>
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
