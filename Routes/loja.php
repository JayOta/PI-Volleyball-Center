<?php
require "../Controller/loja.php";
require '../Routes/busca.php';
$getAllCategorias = buscarCategoria();
session_start();
if(isset($_SESSION['produtos'])){
	$busca = $_SESSION['produtos'];
	if(count($busca) > 1){
		$getAllProdutos = $busca;
	}
}
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
	<link rel="shortcut icon" href="../Routes/img/logo-volei.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/loja.css">
	<link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
	<title>Loja</title>
</head>

<body>

	<?php
	include '../Routes/perfil-on-navbar.php';
	?>
	<br>

	<div class="top-part" style="display: flex; flex-direction: row; gap: 4rem; justify-content: center; align-items: center;">
		<div class="categoria">
			<?php for ($i = 0; $i < count($getAllCategorias); $i++) { ?>
				<a name="categorias" href="<?php echo @$link; ?>"><?php echo $getAllCategorias[$i]['nome']; ?></a>
			<?php } ?>
		</div>
	
			<form action="busca.php" method="post" class="d-flex position-relative" role="search">
				<input class="input-search form-control me-2" type="search" name="nome" placeholder="Digite o nome do produto" aria-label="Search" style="width: 360px;">
				<button class="btn btn-outline-success" type="submit">Pesquisar</button>
			</form>

	</div>

	<br><br><br><br><br>
	<form method="post" action="../Controller/loja.php">
		<main>
			<div class="container">
				<h2 style="text-align: center;">Catálogo de produtos</h2>
				<br><br>
				<div class="row">
					<?php
					for ($i = 0; $i < count($getAllProdutos); $i++) { ?>
						<div class="col-md-3">
							<div class="card">
								<a href="produto-page.php?id=<?php echo $getAllProdutos[$i]['produto_id']; ?>" style="text-decoration: none; list-style: none; color: #0b0b0b;">
									<img src="<?php $imagem = base64_encode($getAllProdutos[$i]['imagem_produto']);
												echo "data:image/jpeg;base64," . $imagem; ?>" class="card-img-top" alt="Produto 1" style="cursor: pointer;">
								</a>
								<div class="card-body">
									<h5 class="card-title"><?php echo $getAllProdutos[$i]['nome']; ?><!--Manguito--></h5>
									<h3 class="card-text"><?php echo "R$" . number_format($getAllProdutos[$i]['preco'], 2, ',', ''); ?></h3>
									<a href="produto-page.php?id=<?php echo $getAllProdutos[$i]['produto_id']; ?>" class="btn btn-success card-button">Comprar</a>
								</div>
							</div>
						</div>
					<?php } ?>
		</main>
	</form>
	<br><br><br><br><br><br><br>

	<?php
	include 'footer.php';
	?>
</body>

</html>

<?php 
//		if(isset($_POST['categoria'][0])) {
//			$getAllCategorias[$i] = $getAllProdutos[$i][1];
//}
?>