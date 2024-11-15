<?php
require '../Controller/produto-page.php';
$produto = buscarProduto($_GET['id']);
$categoria = buscarCategoria();

$_SESSION['value'] = 0;
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
  <link rel="shortcut icon" href="../Routes/img/logo-volei.png" type="image/x-icon">
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
        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($produto['imagem_produto']); ?>" alt="#" class="img-main" style="width: 49rem; height: 48rem; margin-top: 70px;">
      </section>

      <section class="price">
        <h2 class="price-sub__heading">VolleyBall Center</h2>
        <h1 class="price-main__heading">Produtos de Edição Limitada Verão</h1>
        <div class="price-name__heading"><?php echo $produto['nome'] ?></div>
        <!-- <div style="position: relative; bottom: 2rem; font-size: 20px;" class="price-category__heading"><?php  ?></div> -->
        <!--<div class="rating-stars__heading" style="display: flex; align-items: center;">
          <button type="button" class='bx bx-star'></button>
          <button type="button" class='bx bx-star'></button>
          <button type="button" class='bx bx-star'></button>
          <button type="button" class='bx bx-star'></button>
          <button type="button" class='bx bx-star'></button>
          <span><-Arrumar..</span>
        </div> -->
        <div class="price-txt" name="description"><?php echo $produto['descricao'] ?></div>
        <div class="price-box">
          <div class="price-box__main">
            <div class="price-box__old" name="old_price"><?php echo "R$" . number_format($produto['preco'], 2, ',', ''); ?></div>
            <span class="price-box__main-discount" name="percent_discount"> 25%</span>
          </div>
        </div>
        <div class="color-box">
          <p class="color-title">Cor</p>
          <div class="images-box">
            <button type="button" class="image-box">
              <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($produto['imagem_produto']); ?>" alt="Manguito"> <!-- add a imagem do BD-->
            </button>
            <button type="button" class="image-box">
              <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($produto['imagem_produto']); ?>" alt="Manguito"> <!-- add a imagem do BD-->
            </button>
            <button type="button" class="image-box">
              <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($produto['imagem_produto']); ?>" alt="Manguito"> <!-- add a imagem do BD-->
            </button>
          </div>
        </div>

        <div class="size-box">
          <p class="title-size-box">Tamanho</p>
          <div class="buttons-box">
            <?php if ($produto['categorias_id'] == 1) { ?>
              <button type="button" class="button-size">37</button>
              <button type="button" class="button-size">38</button>
              <button type="button" class="button-size">39</button>
              <button type="button" class="button-size">40</button>
              <button type="button" class="button-size">41</button>
              <button type="button" class="button-size">42</button>
              <button type="button" class="button-size">43</button>
            <?php } ?>
            <?php if ($produto['categorias_id'] == 2 || $produto['categorias_id'] == 3 || $produto['categorias_id'] == 4) { ?>
              <button type="button" class="button-size">PP</button>
              <button type="button" class="button-size">P</button>
              <button type="button" class="button-size">M</button>
              <button type="button" class="button-size">G</button>
              <button type="button" class="button-size">GG</button>
            <?php } ?>
          </div>
        </div>

        <div class="buy-part">
          <div class="price-btns">
            <button type="submit" class="price-btn__add price-btn" name="add_cart" type="submit">
              <i class='bx bx-plus'></i>
            </button>
            <input name="quantity_cart" value="<?php // echo $_SESSION['value']; 
                                                ?>0" style="font-size: 42px; background: transparent; outline: none; border: none; width: 17%;">
            <button type="button" class="price-btn__remove price-btn" name="sub_cart" type="submit">
              <i class='bx bx-minus'></i>
            </button>
          </div>

          <button type="submit" class="price-cart__btn btn--blue" style="display: flex; justify-content: center; align-items: center; height: 8rem;">
            <div style="display: flex; flex-direction: row; align-items: center; justify-content: center; text-decoration: none; color:#fff;">
              <i class='bx bxs-cart price-cart__btn-img'></i>
              <p>Adicionar ao carrinho</p>
            </div>
          </button>
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