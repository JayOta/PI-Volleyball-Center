<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notícias</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/noticias.css">
	<link rel="stylesheet" href="css/navbar.css">
</head>

<body>
	<?php
		include 'navbar.php';
	?>

	<br>
	<br>


	<div class="container"> <!-- isto concerta a largura de alguns containers -->
		<!-- Arrumar a largura das imagens dos dois carroséis -->

		<div class="blue-back d-flex">
			<div class="section">
				<section>
					<h1 id="title-h1" style="text-shadow: 0px 0px 6px #2b2b2b;">
						Foz do Iguaçu ganha Campeonato Paranaense Feminino!
					</h1>
					<br>
					<h2 id="title-h2" style="text-shadow: 0px 0px 6px #2b2b2b;">
						Time feminino de Foz do Iguaçu Sub-14, ganha Campeonato Paranaense na série B, e sobe para a série A
					</h2>
					<br>
					<button><a id="saiba-mais" href="#">Saiba mais</a></button>
				</section>
			</div>
			<aside>
				<div id="carouselExampleSlidesOnly-1" class="carousel slide d-flex" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/comunidadeC01.jpg" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023">
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

			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card h-100">
						<a href="#" target="_blank">
							<img src="img/foto-selecao.png" class="card-img-top d-block" alt="Seleção"></a>
						<div class="card-body">
							<h5 class="card-title">Brasil vê favoritismo ameaçado contra a Argentina
								em Sul-Americano</h5>
							<p class="card-text"><strong>Por Volleyball Center</strong></p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card h-100">
						<a href="#" target="_blank">
							<img src="img/noticia-2.png" class="card-img-top" alt="Seleção">
						</a>
						<div class="card-body">
							<h5 class="card-title">Suzano bate o Santo André pelo triangular da série prata do Campeonato Paulista sub-21</h5>
							<p class="card-text"><strong>Por Volleyball Center</strong></p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card h-100">
						<a href="#" target="_blank">
							<img src="img/noticia-3.png" class="card-img-top" alt="Seleção"></a>
						<div class="card-body">
							<h5 class="card-title">Paola Egonu está fora do Pré-Olímpico</h5>
							<p class="card-text"><strong>Por Volleyball Center</strong></p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
						</div>
					</div>
				</div>
			</div>

			<br><br><br><br>

			<div class="container">
				<div class="row row-cols-1 row-cols-md-3 g-4">
					<div class="col">
						<div class="card h-100">
							<a href="#" target="_blank">
								<img src="img/noticia-4.png" class="card-img-top" alt="Seleção"></a>
							<div class="card-body">
								<h5 class="card-title">Minas promove jogadora da base para a temporada 2023/24</h5>
								<p class="card-text"><strong>Por Volleyball Center</strong></p>
							</div>
							<div class="card-footer">
								<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card h-100">
							<a href="#" target="_blank">
								<img src="img/noticia-5.png" class="card-img-top" alt="Seleção"></a>
							<div class="card-body">
								<h5 class="card-title">Revelação da SuperLiga, Oppenkoski conta como driblou a ansiedade para dirblar na final</h5>
								<p class="card-text"><strong>Por Volleyball Center</strong></p>
							</div>
							<div class="card-footer">
								<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card h-100">
							<a href="#" target="_blank">
								<img src="img/noticia-6.png" class="card-img-top" alt="Seleção"></a>
							<div class="card-body">
								<h5 class="card-title">Serginho reúne constelação de craques em jogo das estrelas</h5>
								<p class="card-text"><strong>Por Volleyball Center</strong></p>
							</div>
							<div class="card-footer">
								<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="blue-back2">
		<aside>
			<h1 class="second-title">Campeonato Paranaense!</h1>
			<div id="carouselExampleSlidesOnly" id="carousel-slide" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="aside-imgs" src="img/comunidadeC01.jpg" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023"> <!-- Deixar o carrousel mais escuro -->
						<div class="carousel-caption d-flex d-md-block justify-content-center align-items-center">
							<h5 class="d-flex justify-content-center">27 de novembro de 2023</h5>
							<p class="d-flex justify-content-center">PM Foz do Iguaçu/ Smel conquista Paranaense Sub-14 Série B feminino 2023</p>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-sides d-flex position-absolute">
				<div id="carouselExampleFade" class="carousel slide carousel-fade d-flex" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="aside-imgs position-relative d-flex" src="img/comunidadeC01.jpg" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023" style="
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="d-flex justify-content-center position-relative d-flex" style="font-size: 20px;">27 de Novembro de 2023</h5>
								<p class="d-flex justify-content-center position-relative d-flex" style="font-size: 19px;">PM Foz do Iguaçu/ Smel conquista Paranaense Sub-14 Série B feminino 2023</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="aside-imgs" src="img/comunidadeC02.jpg" class="d-block" alt="Imagem de jogadores de volêi" style="
								display: flex; 
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center position-relative d-flex" style="font-size: 20px; text-align: center;">29 de novembro de 2023</h5>
								<p class="justify-content-center position-relative d-flex" style="font-size: 19px;">Fase final do Paranaense Sub-19 feminino, Série A, começa nesta quinta-feira (30), em Maringá</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="aside-imgs" src="img/comunidadeC03.jpg" class="d-block" alt="Imagem da equipe de vôlei da smel Araucária de 2023" style="
							display: flex; 
							width: 620px; 
							height: 345px; 
							border-radius: 10px; 
							transition: 0.3s;
							">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center position-relative d-flex" style="font-size: 20px;">22 de novembro de 2023</h5>
								<p class="justify-content-center position-relative d-flex" style="font-size: 19px;">Com mais de 500 atletas reunidos, final de semana teve 93 partidas e cinco campeões estaduais da Série A</p>
							</div>
						</div>
					</div>
				</div>

				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="
					display: flex; 
					border-radius: 10px; 
					width: 620px; 
					height: 345px; 
					margin-top: 70px; 
					transition: 0.3s; 
					box-shadow: 0px 3px 8px #000;
					">
					<div class="carousel-inner" style="background-color: black; border-radius: 10px;">
						<div class="carousel-item active">
							<img class="aside-imgs" src="img/comunidadeC01.jpg" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023" style="
								position: relative; 
								display: flex; 
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center" style="font-size: 20px; position: relative; display: flex;">27 de novembro de 2023</h5>
								<p class="justify-content-center" style="font-size: 19px; position: relative; display: flex;">PM Foz do Iguaçu/ Smel conquista Paranaense Sub-14 Série B feminino 2023</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="aside-imgs" src="img/comunidadeC02.jpg" class="d-block" alt="Imagem de jogadores de volêi" style="
								display: flex; 
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center" style="font-size: 20px; position: relative; display: flex;">29 de novembro de 2023</h5>
								<p class="justify-content-center" style="font-size: 18px; position: relative; display: flex;">Fase final do Paranaense Sub-19 feminino, Série A, começa nesta quinta-feira (30), em Maringá</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="aside-imgs" src="img/comunidadeC03.jpg" class="d-block" alt="Imagem da equipe de vôlei da smel Araucária de 2023" style="
								display: flex; 
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center" style="font-size: 20px; position: relative; display: flex;">22 de novembro de 2023</h5>
								<p class="justify-content-center" style="font-size: 18px; position: relative; display: flex;">Com mais de 500 atletas reunidos, final de semana teve 93 partidas e cinco campeões estaduais da Série A</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</aside>
	</div>

	<br><br>

	<div class="puxar-pra-cima">
		<div class="container">
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card h-100">
						<a href="#" target="_blank">
							<img src="img/noticia-7.png" class="card-img-top" alt="Seleção"></a>
						<div class="card-body">
							<h5 class="card-title">Praia Clube vence Fluminense pela Superliga feminina de vôlei</h5>
							<p class="card-text"><strong>Por Volleyball Center</strong></p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card h-100">
						<a href="#" target="_blank">
							<img src="img/noticia-8.png" class="card-img-top" alt="Seleção"></a>
						<div class="card-body">
							<h5 class="card-title">Suzano visita o Minas pela Superliga masculina de vôlei em reedição da última semifinal</h5>
							<p class="card-text"><strong>Por Volleyball Center</strong></p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card h-100">
						<a href="#" target="_blank">
							<img src="img/noticia-9.png" class="card-img-top" alt="Seleção"></a>
						<div class="card-body">
							<h5 class="card-title">Com 26 pontos de Darlan, Sesi-Bauru bate Araguari e vence a primeira na Superliga Masculina</h5>
							<p class="card-text"><strong>Por Volleyball Center</strong></p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
						</div>
					</div>
				</div>
			</div>
		</div>

		<br>
		<br>
		<br>
		<br>

		<div class="container">
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card h-100">
						<a href="#" target="_blank">
							<img src="img/noticia-10.png" class="card-img-top" alt="Seleção"></a>
						<div class="card-body">
							<h5 class="card-title">Joinville e Cruzeiro se enfrentam pela segunda rodada da Superliga Masculina</h5>
							<p class="card-text"><strong>Por Volleyball Center</strong></p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card h-100">
						<a href="#" target="_blank">
							<img src="img/noticia-11.png" class="card-img-top" alt="Seleção"></a>
						<div class="card-body">
							<h5 class="card-title">Sesi-Bauru e Araguari duelam em busca da primeira vitória na Superliga Masculina</h5>
							<p class="card-text"><strong>Por Volleyball Center</strong></p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
						</div>
					</div>
				</div>

				<div class="col">
					<div class="card h-100">
						<a href="#" target="_blank">
							<img src="img/noticia-12.png" class="card-img-top" alt="Seleção"></a>
						<div class="card-body">
							<h5 class="card-title">São José vence Guarulhos de virada e conquista a segunda vitória na Superliga</h5>
							<p class="card-text"><strong>Por Volleyball Center</strong></p>
						</div>
						<div class="card-footer">
							<small class="text-body-secondary">Ultima atualização 3 mins atrás</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>

	<?php 
    	include 'footer.php';
  	?>
</body>

</html>