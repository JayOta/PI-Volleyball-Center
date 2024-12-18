<!DOCTYPE html>
<?php
require "../Controller/noticias.php";
$noticias = buscarnoticias();
?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../Routes/img/logo-volei.png" type="image/x-icon">
	<title>Notícias</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/noticias.css">
	<link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
	<link rel="stylesheet" href="css/perfil-on-navbar.css">
</head>

<body>
	<?php
	include 'perfil-on-navbar.php';
	?>

	<br>
	<br>

	<form action="../Controller/noticias.php" method="post">
		<div class="blue-back">
			<div class="section">
				<section style="width: fit-content;">
					<h1 id="title-h1" style="text-shadow: 0px 0px 6px #2b2b2b;" name="main-text"><?php for ($i = 0; $i < 1; $i++) {
																										echo $noticias[$i]['titulo_noticias'];
																									} ?>
					</h1>
					<br>
					<h2 id="title-h2" style="text-shadow: 0px 0px 6px #2b2b2b;">
						<?php for ($i = 0; $i < 1; $i++) {
							echo $noticias[$i]['descricao_noticias'];
						} ?>
					</h2>
					<br>
					<a id="saiba-mais" href="#"><button type="button">Saiba mais</button></a>
				</section>
			</div>
			<aside style="height: fit-content;">
				<div id="carouselExampleSlidesOnly-1" class="carousel slide d-flex" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?php for ($i = 0; $i < 1; $i++) {
											$imagem = base64_encode($noticias[$i]['imagem_noticias']);
											echo "data:image/jpeg;base64," . $imagem;
										} ?>" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023" name="main-img">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center"><!--27 de novembro de 2023--></h5>
								<p><!--PM Foz do Iguaçu/ Smel conquista Paranaense Sub-14 Série B feminino 2023--></p>
							</div>
						</div>
					</div>
				</div>
			</aside>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		<!-- Change this -->
		<div class="content-cards">
			<div class="container">
				<?php for ($i = 0; $i < 2; $i++) { ?>
					<div class="row row-cols-1 row-cols-md-3 g-4">
						<?php for ($i = 1; $i < 7; $i++) { ?>
							<div class="col">
								<a href="./noticias.php" style="z-index: 2;">
									<div class="card h-100">
										<a href="#" target="_blank">
											<img src="<?php $imagem = base64_encode($noticias[$i]['imagem_noticias']);
														echo "data:image/jpeg;base64," . $imagem; ?>" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;">
										</a>
										<div class="card-body">
											<h5 class="card-title"><?php echo $noticias[$i]['titulo_noticias'] ?></h5>
											<p class="card-text"><strong><?php echo $noticias[$i]['descricao_noticias'] ?></strong></p>
										</div>
										<div class="card-footer">
											<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
										</div>
									</div>
								</a>
							</div>
						<?php } ?>
					<?php } ?>
					</div>
			</div>
		</div>

		<div class="blue-back2"> <!-- Inserir o banco aqui -->
			<aside>
				<h1 class="second-title">Campeonato Paranaense!</h1>
				<div id="carouselExampleSlidesOnly" id="carousel-slide" class="carousel slide" data-bs-ride="carousel">
					<?php for ($i = count($noticias) - 7; $i < count($noticias) - 6; $i++) { ?>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="aside-imgs" src="<?php $imagem = base64_encode($noticias[$i]['imagem_noticias']);
																echo "data:image/jpeg;base64," . $imagem; ?>" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023"> <!-- Deixar o carrousel mais escuro -->
								<div class="carousel-caption d-flex d-md-block justify-content-center align-items-center">
									<h5 class="d-flex justify-content-center"><!--10 de junho de 2024 --> <?php echo $noticias[$i][2]; ?></h5>
									<p class="d-flex justify-content-center"><!-- Confira como foi o final de semana (07 a 09) no Campeonato Estadual Adulto --><?php echo $noticias[$i][3]; ?></p>
								</div>
							</div>
						</div> <?php } ?>
				</div>

				<div class="carousel-sides d-flex">
					<div id="carouselExampleFade" class="carousel slide carousel-fade d-flex" data-bs-ride="carousel">
						<div class="carousel-inner">
							<?php for ($i = 16; $i > 13; $i--) { ?>
								<div class="carousel-item active">
									<img class="aside-imgs d-flex" src="<?php $imagem = base64_encode($noticias[$i]['imagem_noticias']);
																		echo "data:image/jpeg;base64," . $imagem; ?>" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023" style="
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
									<div class="carousel-caption d-none d-md-block">
										<h5 class="d-flex justify-content-center d-flex" style="font-size: 20px;"> <!-- 9 de junho de 2024 --><?php echo $noticias[$i][2]; ?></h5> <!-- inserido -->
										<p class="d-flex justify-content-center d-flex" style="font-size: 19px;"><!-- Hoje (24), inicia a primeira etapa dos Jogos da Juventude do Paraná 2024! --><?php echo $noticias[$i][3]; ?></p> <!-- inserido -->
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>

				<div class="carousel-sides d-flex">
					<div id="carouselExampleFade" class="carousel slide carousel-fade d-flex" data-bs-ride="carousel">
						<div class="carousel-inner">
							<?php for ($i = 19; $i > 16; $i--) { ?>
								<div class="carousel-item active">
									<img class="aside-imgs" src="<?php $imagem = base64_encode($noticias[$i]['imagem_noticias']);
																	echo "data:image/jpeg;base64," . $imagem; ?>" class="d-block" alt="Imagem de jogadores de volêi" style="
								display: flex; 
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
									<div class="carousel-caption d-none d-md-block">
										<h5 class="justify-content-center d-flex" style="font-size: 20px; text-align: center;"><!-- 12 de junho de 2024 --><?php echo $noticias[$i][2]; ?></h5>
										<p class="justify-content-center d-flex" style="font-size: 19px;"><!-- Fim de segunda etapa do Campeonato Paranaense sub-19 série A masculino! --><?php echo $noticias[$i][3]; ?></p>
									</div>
								</div> <?php } ?>
						</div>
					</div>
				</div>
			</aside>
		</div>

		<br><br><br><br><br><br><br><br><br><br>

		<div class="content-cards">
			<div class="container">
				<?php for ($i = 0; $i < 2; $i++) { ?>
					<div class="row row-cols-1 row-cols-md-3 g-4">
						<?php for ($i = 7; $i < count($noticias) - 7; $i++) { ?>
							<div class="col">
								<div class="card h-100">
									<a href="#" target="_blank">
										<img src="<?php $imagem = base64_encode($noticias[$i]['imagem_noticias']);
													echo "data:image/jpeg;base64," . $imagem; ?>" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;">
									</a>
									<div class="card-body">
										<h5 class="card-title"><?php echo $noticias[$i]['titulo_noticias'] ?></h5>
										<p class="card-text"><strong><?php echo $noticias[$i]['descricao_noticias'] ?></strong></p>
									</div>
									<div class="card-footer">
										<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
									</div>
								</div>
							</div>
						<?php } ?>
					<?php } ?>
					</div>
			</div>
		</div>
	</form>

	<?php
	include 'footer.php';
	?>
</body>

</html>