<?php
require "../Controller/produto_cadastro.php";
$getAllProdutos = getAllProdutos();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/loja.css">

	<link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
	<title>Loja</title>
</head>

<body>

	<?php
	include '../Routes/perfil-on-navbar.php';
	?>
	<br>

	<form class="d-flex position-relative" role="search" style="margin-left: 1115px; transform: translateY(30px);">
		<input class="input-search form-control me-2" type="search" placeholder="Pesquise o produto" aria-label="Search" style="width: 360px;">
		<button class="btn btn-outline-success" type="submit">Pesquisar</button>
	</form>

	<br><br><br><br><br>
	<form method="post" action="../Controller/produto_cadastro.php">
		<main>
			<div class="container">
				<h2 style="text-align: center;">Catálogo de produtos</h2>
				<br><br>
				<div class="row">
					<?php
					for ($i = 0; $i < count($getAllProdutos); $i++) { ?>
						<div class="col-md-3">
							<a href="produto-page.php" style="text-decoration: none; list-style: none; color: #0b0b0b;">
								<div class="card">
								<a href="produto-page.php" style="text-decoration: none; list-style: none; color: #0b0b0b;">
									<img src="<?php $imagem = base64_encode($getAllProdutos[$i]['imagem_produto']); echo "data:image/jpeg;base64," . $imagem;?>" class="card-img-top" alt="Produto 1" style="cursor: pointer;">
								</a>
									<div class="card-body">
										<h5 class="card-title"><?php echo $getAllProdutos[$i][2]; ?><!--Manguito--></h5>
										<h3 class="card-text"><?php echo "R$". number_format($getAllProdutos[$i][4], 2, ',', ''); ?></h3>
										<a href="produto-page.php" class="btn btn-success card-button">Comprar</a>
									</div>
								</div>
						</div>
					<?php } ?>
					<!-- </div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/joelheira.png" class="card-img-top" alt="Produto 2" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Joelheira</h5>
								<h3 class="card-text">R$55,60</h3>
								<a href="joelheira-page.php" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/bola-de-volei.png" class="card-img-top" alt="Produto 3" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Bola Penalty VP5000M</h5>
								<h3 class="card-text">R$86,70</h3>
								<a href="bola-penalty-page.php" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/calca-compressao.png" class="card-img-top" alt="Produto 4" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Calça de compressão</h5>
								<h3 class="card-text">R$115,00</h3>
								<a href="calca-compressao-page.php" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
				 </div>
			</div>

			<div class="container">
				<br><br>
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<img src="img/meias-nike.png" class="card-img-top" alt="Produto 5" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Meias Nike</h5>
								<h3 class="card-text">R$60,00</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/tenis-volei.png" class="card-img-top" alt="Produto 6" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Tênis Nike Air Max Volêi</h5>
								<h3 class="card-text">R$315,00</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/testeira-nike.png" class="card-img-top" alt="Produto 7" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Faixa Branca Nike</h5>
								<h3 class="card-text">R$69,90</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/camiseta-termica.png" class="card-img-top" alt="Produto 8" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Camiseta Térmica Preta</h5>
								<h3 class="card-text">R$79,00</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<br><br>
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<img src="img/viseira-nike.png" class="card-img-top" alt="Produto 9" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Viseira Nike Preta</h5>
								<h3 class="card-text">R$215,00</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/meia-cano-curto.png" class="card-img-top" alt="Produto 10" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Meias Cano Curto </h5>
								<h3 class="card-text">R$59,00</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/joelheira-2.png" class="card-img-top" alt="Produto 11" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Joelheira SCALIBU</h5>
								<h3 class="card-text">R$75,00</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/tenis-volei-2.png" class="card-img-top" alt="Produto 12" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Tênis de Vôlei Unissex</h5>
								<h3 class="card-text">R$339,90</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<br><br>
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<img src="img/colar-volei.png" class="card-img-top" alt="Produto 13" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Colar Vôlei</h5>
								<h3 class="card-text">R$29,90</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/manguito-2.png" class="card-img-top" alt="Produto 14" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Manguito Laranja</h5>
								<h3 class="card-text">R$79,80</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/camiseta-selecao-praia.png" class="card-img-top" alt="Produto 15" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Camiseta Seleção de Praia</h5>
								<h3 class="card-text">R$59,99</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<img src="img/calca-termica.png" class="card-img-top" alt="Produto 16" style="cursor: pointer;">
							<div class="card-body">
								<h5 class="card-title">Calça Térmica</h5>
								<h3 class="card-text">R$89,90</h3>
								<a href="#" class="btn btn-success card-button">Comprar</a>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</main>
	</form>
	<br><br><br><br><br><br><br>

	<?php
	include 'footer.php';
	?>
</body>

</html>