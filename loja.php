<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/loja.css">
	<link rel="stylesheet" href="css/navbar.css">
	<title>Loja</title>
</head>

<body>

<?php 
    include 'navbar.php';
    ?>
	<br>
	
	<form class="d-flex" role="search" style="position: relative; margin-left: 1210px;">
        <input class="form-control me-2" type="search" placeholder="Pesquise o produto" aria-label="Search" style="width: 360px;">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
		<h2 style="text-align: center;">Catálogo de produtos</h2>
		<br><br>
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<img src="img/manguito.png" class="card-img-top" alt="Produto 1">
					<div class="card-body">
						<h5 class="card-title">Manguito</h5>
						<h3 class="card-text">R$70,00</h3>
						<a href="manguito-page.php" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/joelheira.png" class="card-img-top" alt="Produto 1">
					<div class="card-body">
						<h5 class="card-title">Joelheira</h5>
						<h3 class="card-text">R$55,60</h3>
						<a href="joelheira-page.php" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/bola-de-volei.png" class="card-img-top" alt="Produto 2">
					<div class="card-body">
						<h5 class="card-title">Bola Penalty VP5000M</h5>
						<h3 class="card-text">R$86,70</h3>
						<a href="bola-penalty-page.php" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/calca-compressao.png" class="card-img-top" alt="Produto 3">
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
					<img src="img/meias-nike.png" class="card-img-top" alt="Produto 1">
					<div class="card-body">
						<h5 class="card-title">Meias Nike</h5>
						<h3 class="card-text">R$60,00</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/tenis-volei.png" class="card-img-top" alt="Produto 1">
					<div class="card-body">
						<h5 class="card-title">Tênis Nike Air Max Volêi</h5>
						<h3 class="card-text">R$315,00</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/testeira-nike.png" class="card-img-top" alt="Produto 2">
					<div class="card-body">
						<h5 class="card-title">Faixa Branca Nike</h5>
						<h3 class="card-text">R$69,90</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/camiseta-termica.png" class="card-img-top" alt="Produto 3">
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
					<img src="img/viseira-nike.png" class="card-img-top" alt="Produto 1">
					<div class="card-body">
						<h5 class="card-title">Viseira Nike Preta</h5>
						<h3 class="card-text">R$215,00</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/meia-cano-curto.png" class="card-img-top" alt="Produto 1">
					<div class="card-body">
						<h5 class="card-title">Meias Cano Curto </h5>
						<h3 class="card-text">R$59,00</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/joelheira-2.png" class="card-img-top" alt="Produto 2">
					<div class="card-body">
						<h5 class="card-title">Joelheira SCALIBU</h5>
						<h3 class="card-text">R$75,00</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/tenis-volei-2.png" class="card-img-top" alt="Produto 3">
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
					<img src="img/colar-volei.png" class="card-img-top" alt="Produto 1">
					<div class="card-body">
						<h5 class="card-title">Colar Vôlei</h5>
						<h3 class="card-text">R$29,90</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/manguito-2.png" class="card-img-top" alt="Produto 1">
					<div class="card-body">
						<h5 class="card-title">Manguito Laranja</h5>
						<h3 class="card-text">R$79,80</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/camiseta-selecao-praia.png" class="card-img-top" alt="Produto 2">
					<div class="card-body">
						<h5 class="card-title">Camiseta Seleção de Praia</h5>
						<h3 class="card-text">R$59,99</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<img src="img/calca-termica.png" class="card-img-top" alt="Produto 3">
					<div class="card-body">
						<h5 class="card-title">Calça Térmica</h5>
						<h3 class="card-text">R$89,90</h3>
						<a href="#" class="btn btn-success card-button">Comprar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>


	<footer class="text-center bg-" style=" padding-left: 20em; background-color: #F9CC02;">
		<div class="container-fluid py-3">
			<div class="row">
				<div class="col-4">
					<ul class="nav flex-column">
						<li class="nav-link"><a href="#" style="text-decoration: none; color: #fff;">Retornar ao
								início</a></li>
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
							<a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer"
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
		<br>
	</footer>
</body>

</html>