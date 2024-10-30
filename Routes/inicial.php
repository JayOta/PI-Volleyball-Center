<!DOCTYPE html>
<html>
<?php
		require "../Controller/noticias2.php";
		$noticias2 = buscarnoticias2();
?>
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
  <link rel="stylesheet" type="text/css" href="css/inicial.css">
  <link rel="stylesheet" href="css/perfil-on-navbar.css">
</head>

<body>

  <?php
  include '../Routes/perfil-on-navbar.php';
  ?>

  <main>
    <form>
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

      <div class="carousel-imagesItens">
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
          <div class="card" style="
            min-width: 200px; 
            width: 600px; 
            min-height: 150px; 
            min-width: 300px; 
            height: 359px; 
            border: none; 
            background: transparent;
            box-shadow: 0px 0px 6px #696969;
            ">
            <img src="img/jogo-2.jpg" class="card-img d-block">
            <div class="card-img-overlay"></div>
          </div>
          <div class="card" style="
            min-width: 200px; 
            width: 600px; 
            height: 359px; 
            border: none; 
            background: transparent;
            box-shadow: 0px 0px 6px #696969;
          ">
            <img src="img/jogo-3.jpg" class="card-img">
            <div class="card-img-overlay"></div>
          </div>
        </div>
      </div>

      <br><br><br><br><br>

      <hr>
      <br><br>

      <h1 id="noticias-sem-title">Notícias semanais</h1>
      <br><br> 
      <?php for($i = 0; $i < count($noticias2); $i++) { ?>
        <div id="carouselExampleSlidesOnly" id="carousel-slide" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="aside-imgs" src="<?php $imagem = base64_encode($noticias2[$i]['imagem_noticias2']); echo "data:image/jpeg;base64," . $imagem;?>" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023"> <!-- Deixar o carrousel mais escuro -->
							<div class="carousel-caption d-flex d-md-block justify-content-center align-items-center">
								<h5 class="d-flex justify-content-center"><!--10 de junho de 2024 --> <?php echo $noticias2[$i][2]; ?></h5>
								<p class="d-flex justify-content-center"><!-- Confira como foi o final de semana (07 a 09) no Campeonato Estadual Adulto --><?php echo $noticias2[$i][3]; ?></p>
							</div>
						</div>
					</div>
          <?php } ?>

          <!-- <div class="noticias-align">
            <br>
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <a href="#" style="text-decoration: none;">
              <div class="col">
              <div class="card" style="max-height: 435px;">
                <img class="d-block" src="img\jogo-7.jpg" class="card-img-top" style="width: object-fit; border-radius: 6px;">
                <div class="card-body" style="display: flex; position: relative; bottom: 15px;">
                  <h5 class="card-title">Brasil perde para a Polônia e encerra Liga das Nações em quarto lugar</h5>
                  <p class="card-text">Porque a seleção da Espanha não existe no volêi?</p> 
                </div>
              </div>
            </div>
          </a>
          <a href="#" style="text-decoration: none;">
            <div class="col">
              <div class="card">
                <img src="img/jogo-8.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Argentina perde clássico este fim de semana</h5>
                  <p class="card-text">Liga das Nações de Vôlei: Argentina perdeu o clássico com o Brasil</p> 
                </div>
              </div>
            </div>
          </a>

          <a href="#" style="text-decoration: none;">
            <div class="col">
              <div class="card">
                <img src="img/jogo-4.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Brasil ganha seu terceiro amistoso consecutivo</h5>
                  <p class="card-text">Brasil ganha seu terceiro amistoso consecutivo</p> 
                </div>
              </div>
            </div>
          </a>
          <a href="#" style="text-decoration: none;">
            <div class="col">
              <div class="card">
                <img src="img/jogo-1-official.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">López, do Cruzeiro, inicia a temporada em alto nível</h5>
                  <p class="card-text">Brasil bate Coreia do Sul e pega EUA na final do vôlei feminino</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </form>
  </main>
  <br><br><br><br><br><br> -->
  <?php
  include 'footer.php';
  ?>
</body>

</html>