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
    rel="stylesheet" />

  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./images/favicon-32x32.png" />
  <?php
  include '../Routes/perfil-on-navbar.php';
  ?>
  <title>Produto Page</title>
  <link rel="stylesheet" href="css/perfil-on-navbar.css">
  <link rel="stylesheet" href="css/produto-page.css">

</head>

<body>
  <!-- Header -->

  <!-- Main item container -->

  <br><br>
  <form method="post" action="../Controller/produto-page.php">
    <main class="item">
      <section class="img">
        <button class="img-main__btnlft img-main__btn">
          <img
            src="images/icon-next.svg"
            alt="next symbol image"
            class="img-main__btnlft-img img-main__btn-img" />
        </button>
        <button class="img-main__btnrgt img-main__btn">
          <img
            src="images/icon-next.svg"
            alt="next symbol image"
            class="img-main__btnrgt-img img-main__btn-img" />
        </button>
        <img src="img/manguito.png" alt="#" class="img-main" /> <!-- Imagem Principal -->
        <div class="img-btns">
          <button class="img-btn" type="button">
            <img
              src="img/manguito2.png"
              alt="produto imagem 1"
              class="img-btn__img" /> <!-- Imagens Secundárias -->
          </button>
          <button class="img-btn" type="button">
            <img
              src="img/manguito3.png"
              alt="produto imagem 2"
              class="img-btn__img" /> <!-- Imagens Secundárias -->
          </button>
          <button class="img-btn" type="button">
            <img
              src="img/manguito4.png"
              alt="produto imagem 3"
              class="img-btn__img" /> <!-- Imagens Secundárias -->
          </button>
          <button class="img-btn" type="button">
            <img
              src="img/manguito5.png"
              alt="produto imagem 4"
              class="img-btn__img" /> <!-- Imagens Secundárias -->
          </button>
        </div>
      </section>

      <section class="price">
        <h2 class="price-sub__heading">VolleyBall Center</h2>
        <h1 class="price-main__heading">Produtos de Edição Limitada Verão</h1>
        <h1 class="price-name__heading" name="nome">Manguito</h2>
          <p class="price-txt" name="description">
            Este manguito é o companheiro perfeito para uso no vôlei.
            Apresentando um <br /> tecido de Poliamida, que resistirá ao uso prolongado durante os jogos.
          </p>
          <div class="price-box">
            <div class="price-box__main">
              <span class="price-box__main-new" name="price">R$52.00</span>
              <span class="price-box__main-discount" name="percent_discount"> 25%</span>
            </div>
            <span class="price-box__old" name="old_price">R$70.00</span> <!-- Preço dos Produtos -->
          </div>

          <div class="color-box">
            <p class="color-title">Cor</p>
            <div class="images-box">
              <button type="button" class="image-box">
                <img src="../Routes/img/manguito.png" alt="Manguito"> <!-- add a imagem do BD-->
              </button>
              <button type="button" class="image-box">
                <img src="../Routes/img/manguito.png" alt="Manguito"> <!-- add a imagem do BD-->
              </button>
              <button type="button" class="image-box">
                <img src="../Routes/img/manguito.png" alt="Manguito"> <!-- add a imagem do BD-->
              </button>
            </div>
          </div>

          <div class="size-box">
            <p class="title-size-box">Tamanho</p>
            <div class="buttons-box">
              <button type="button" class="button-size">PP</button>
              <button type="button" class="button-size">P</button>
              <button type="button" class="button-size">M</button>
              <button type="button" class="button-size">G</button>
              <button type="button" class="button-size">GG</button>
            </div>
          </div>

          <div class="price-btnbox">
            <div class="price-btns">
              <button type="button" class="price-btn__add price-btn" name="add_to_cart">
                <img
                  src="img/add-line.png"
                  alt="+"
                  class="price-btn__add-img price-btn__img" />
              </button>

              <span class="price-btn__txt" type="text" name="quantity">0</span>
              
              <button type="button" class="price-btn__remove price-btn" name="remove_to_cart">
                <img
                  src="img/subtract-line.png"
                  alt="-"
                  class="price-btn__remove-img price-btn__img" />
              </button>
            </div>
            <button type="submit" class="price-cart__btn btn--blue" style="display: flex; margin-top: 30px;"><a href="carrinho.php" style="text-decoration: none; color:#fff;">
                <img
                  src="img/shopping-cart-2-fill (1).png" height="40px"
                  alt="Imagem do carrinho"
                  class="price-cart__btn-img" />
                Adicionar ao carrinho
              </a></button>
          </div>
      </section>
    </main>
  </form>
  <br><br><br><br><br><br><br><br>

  <?php
  include 'footer.php';
  ?>

</body>

</html>