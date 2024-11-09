<!DOCTYPE html>
<?php
require "../Controller/inicial.php";
$inicial = buscarnoticias2();
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
  <title></title>
  <link rel="shortcut icon" href="../Routes/img/logo-volei.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/inicial.css">
  <link rel="stylesheet" href="css/perfil-on-navbar.css">
</head>

<body>

  <?php
  include '../Routes/perfil-on-navbar.php';
  ?>

  <main>
    <form class="main">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active" id="first-carousel">
            <img src="img/back_top1.jpg" class="d-block w-100" alt="CarrouselImgTop" height="400px">
            <div class="carousel-caption d-none d-md-block">
              <h1>
                <span id="title-site1">Volleyball</span>
                <span id="title-site2">Center</span>
              </h1>
              <p>Seja bem vindo ao melhor site de vôlei do paraná,
                aqui você estará por dentro de tudo!
              </p>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br>

      <!-- <div class="background"> -->
      <div class="carousel-imagesItens" style="display: flex; flex-direction: column;">
        <!-- <center><h1 class="border-title" style="font-size: 32px;">Seleção Brasileira!</h1></center> -->
        <div id="carouselExampleInterval" class="carousel slide d-flex" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img src="img/main-1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="img/main-2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="img/jogo-3.jpg" class="d-block w-100">
            </div>
          </div>
          <div class="carousel-caption d-none d-md-block m-auto w-auto">
            <h5 class="carousel-title">29 de junho de 2024</h5>
            <h2 class="carousel-title">Brasil bate Coreia do Sul e pega EUA na final do vôlei feminino!</h2>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="carouselDownPics">
          <div class="card">
            <img src="img/jogo-2.jpg" class="card-img d-block">
            <div class="card-img-overlay"></div>
          </div>
          <div class="card">
            <img src="img/jogo-3.jpg" class="card-img">
            <div class="card-img-overlay"></div>
          </div>
        </div>
      </div>
      <!-- </div> -->
      <br><br><br><br>

      <div class="anuncio-produtos">
        <div class="descricao-anuncio" style="display: flex; flex-direction: column; gap: 1rem;">
          <h1 style="font-size: 45px; width: 30rem; font-family:'Segoe UI Semibold', sans-serif; text-shadow: 0px 0px 2px #0b0b0b;">VENHA VER NOSSOS PRODUTOS!</h1>
          <h2 style="font-size: 25px; color: #f9cc02; text-shadow: 0px 0px 3px #f9cc02;"><span style="color: #fff; text-shadow: 0px 0px 3px #fff;">Meias Nike</span> por apenas <span style="color: #fff; text-shadow: 0px 0px 3px #fff;">R$60,00<span>!!</h2>
          <button>Saiba Mais</button>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="width: 36rem; height: 36rem; position: relative; top: 3.5rem;">
          <div class="carousel-inner" style="transition: 0.5s ease-in-out; width: 30rem; height: 28rem; box-shadow: 0px 0px 12px #fff; border-radius: 6px;">
            <a href="../Routes/loja.php">
              <div class="carousel-item active" style="width: 36rem; height: 36rem;">
                <img class="anuncio" src="../Routes/img/tenis-volei.png" class="d-block w-100" alt="..." style="width: 30rem; height: 28rem;">
              </div>
            </a>
            <a href="">
              <div class="carousel-item" style="width: 36rem; height: 36rem;">
                <img class="anuncio" src="../Routes/img/viseira-nike.png" class="d-block w-100" alt="..." style="width: 30rem; height: 32rem;">
              </div>
            </a>
            <a href="">
              <div class="carousel-item" style="width: 36rem; height: 36rem; background: #fff;">
                <img class="anuncio" src="../Routes/img/meias-nike.png" class="d-block w-100" alt="..." style="width: 30rem; height: 32rem;">
              </div>
            </a>
          </div>
        </div>
      </div>

      <br><br><br>

      <!-- <div class="background"> -->
      <div class="content-cards d-flex " style=" flex-direction: column; margin-left: 5.2rem;">
        <h1 id="noticias-sem-title">Sobre as Seleções</h1>
        <div class="container" style="margin-top: 3rem;">
          <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php for ($i = 0; $i < count($inicial); $i++) { ?>
              <div class="col" style=" margin-bottom: 3rem;">
                <div class="card h-100" style="width: 33rem; height: 98%;">
                  <a href="#" target="_blank">
                    <img src="<?php $imagem = base64_encode($inicial[$i]['imagem_noticias2']);
                              echo "data:image/jpeg;base64," . $imagem; ?>" class="card-img-top" alt="Seleção" style="border-radius: 7px;">
                  </a>
                  <div class="card-body" style="height: 8rem;">
                    <h5 class="card-title"><?php echo $inicial[$i]['titulo_noticias2'] ?></h5>
                    <p class="card-text"><strong><?php echo $inicial[$i]['descricao_noticias2'] ?></strong></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </form>
  </main>
  <br><br><br><br><br><br><br>
  <?php
  include 'footer.php';
  ?>
</body>

</html>