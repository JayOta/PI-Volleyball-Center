<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
    <?php 
    include 'navbar.php';
    ?>
    <title>Produto Page</title>
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/produto-page.css">

  </head>
  <body>
    <!-- Header -->

    <!-- Main item container -->

    <br><br>
    <main class="item">
      <section class="img">
        <button class="img-main__btnlft img-main__btn">
          <img
            src="images/icon-next.svg"
            alt="next symbol image"
            class="img-main__btnlft-img img-main__btn-img"
          />
        </button>
        <button class="img-main__btnrgt img-main__btn">
          <img
            src="images/icon-next.svg"
            alt="next symbol image"
            class="img-main__btnrgt-img img-main__btn-img"
          />
        </button>
        <img src="img/manguito.png" alt="#" class="img-main" />
        <div class="img-btns">
          <button class="img-btn">
            <img
              src="img/manguito2.png"
              alt="produto imagem 1"
              class="img-btn__img"
            />
          </button>
          <button class="img-btn">
            <img
              src="img/manguito3.png"
              alt="produto imagem 2"
              class="img-btn__img"
            />
          </button>
          <button class="img-btn">
            <img
              src="img/manguito4.png"
              alt="produto imagem 3"
              class="img-btn__img"
            />
          </button>
          <button class="img-btn">
            <img
              src="img/manguito5.png"
              alt="produto imagem 4"
              class="img-btn__img"
            />
          </button>
        </div>
      </section>

      <section class="price">
        <h2 class="price-sub__heading">VolleyBall Center</h2>
        <h1 class="price-main__heading">Produtos de Edição Limitada Verão</h1>
        <p class="price-txt">
        Este manguito é o companheiro perfeito para uso no vôlei. 
        Apresentando um <br/> tecido de Poliamida, que resistirá ao uso prolongado durante os jogos.
        </p>
        <div class="price-box">
          <div class="price-box__main">
            <span class="price-box__main-new">R$52.00</span>
            <span class="price-box__main-discount"> 25%</span>
          </div>
          <span class="price-box__old">R$70.00</span>  <!-- Preço dos Produtos -->
        </div>

        <div class="price-btnbox">
          <div class="price-btns">
            <button class="price-btn__add price-btn">
              <img
                src="img/add-line.png"
                alt="+"
                class="price-btn__add-img price-btn__img"
              />

            </button>
            <span class="price-btn__txt">0</span>
            <button class="price-btn__remove price-btn">
              <img
                src="img/subtract-line.png"
                alt="-"
                class="price-btn__remove-img price-btn__img"
              />

            </button>
          </div>
          <button type="submit" class="price-cart__btn btn--blue" style="display: flex; margin-top: 30px;"><a href="carrinho.php" style="text-decoration: none; color:#fff;">
            <img
              src="img/shopping-cart-2-fill (1).png" height="40px"
              alt="Imagem do carrinho"
              class="price-cart__btn-img"
            />
                Adicionar ao carrinho
          </a></button>
        </div>
      </section>
    </main>

    <br><br><br><br><br><br><br><br>

  <footer class="text-center bg-" style=" padding-left: 20em; background-color: #F9CC02; position: relative; top: 100%; width: 100%;">
<div class="container-fluid py-3">
  <div class="row">
    <div class="col-4">
      <ul class="nav flex-column">
        <li class="nav-link"><a href="#" style="text-decoration: none; color: #fff;">Retornar ao início</a></li>
        <li class="nav-link"><a href="#" style="text-decoration: none; color: #fff;">Sobre</a></li>
        <li class="nav-link"><a href="#" style="text-decoration: none; color: #fff;">Suporte</a></li>
      </ul>
    </div>
    <div class="col-6">
      <p class="nav-link" style="left: 10em;">
        Aqui estão as nossas redes sociais:
      </p>
      <ul class="list-inline mb-2 mb-md-0">
        <li class="list-inline-item">
          <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer"
            class="text-decoration-none"><img src="img/facebook.png" alt="ícone Facebook"
              title="Facebook Melhor do Vôlei" width="45"></a>
        </li>
        <li class="list-inline-item">
          <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"
            class="text-decoration-none"><img src="img/instagram.png" alt="ícone Instagram"
              title="Instagram Melhor do Vôlei" width="45"></a>
        </li>
        <li class="list-inline-item">
          <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
            class="text-decoration-none"><img src="img/twitter.png" alt="ícone Twitter"
              title="Twitter Melhor do Vôlei" width="45"></a>
        </li>
      </ul>
    </div>
  </div>
</div>
</footer>
  </body>
</html>