<?php 
require '../Controller/produto-page.php'; 
      $produto = buscarProduto($_GET['id']);
?>
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
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($produto['imagem_produto']); ?>" alt="#" class="img-main" /> <!-- Imagem Principal -->
      </section>

      <section class="price">
        <h2 class="price-sub__heading">VolleyBall Center</h2>
        <h1 class="price-main__heading">Produtos de Edição Limitada Verão</h1>
        <div class="price-name__heading"><?php echo $produto['nome']?></div>
        <div class="price-txt" name="description"><?php echo $produto['descricao']?></div>
          <div class="price-box">
            <div class="price-box__main">
              <div class="price-box__old" name="old_price"><?php echo number_format($produto['preco'], 2, ',', '');?></div>
                <span class="price-box__main-discount" name="percent_discount"> 25%</span>
            </div> 
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

          <a href="carrinho.php" class="price-btnbox" style="text-decoration: none;">
            <div class="price-btns">
              <button class="price-btn__add price-btn" name="add_to_cart" type="submit">
                <img
                  src="img/add-line.png"
                  alt="+"
                  class="price-btn__add-img price-btn__img" />
              </button>

              <input type="text" name="quantity_cart" value="<?php // echo $_SESSION['quantity_cart']; ?>0" style="font-size: 42px; background: transparent; outline: none; border: none; width: 17%;">

              <button class="price-btn__remove price-btn" name="remove_to_cart" type="submit">
                <img
                  src="img/subtract-line.png"
                  alt="-"
                  class="price-btn__remove-img price-btn__img" />
              </button>
            </div>

            <button type="submit" class="price-cart__btn btn--blue" style="display: flex; justify-content: center; align-items: center; height: 8rem; z-index: 1;">
              <div  style="display: flex; flex-direction: row; align-items: center; justify-content: center; text-decoration: none; color:#fff; z-index: 2;">
                <i class='bx bxs-cart price-cart__btn-img'></i>
                <p>Adicionar ao carrinho</p>
              </div>
            </button>
          </a>
      </section>
    </main>
  </form>
  <br><br><br><br><br><br><br><br>

  <?php
  include 'footer.php';
  ?>

</body>

</html>