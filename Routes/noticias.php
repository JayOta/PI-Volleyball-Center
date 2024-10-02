	<?php
		require "../Controller/noticias.php";
		$noticias = buscarnoticias();
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notícias</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/noticias.css">
	<link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
	<link rel="stylesheet" href="css/navbar.css">
</head>
<body>	
	<?php
	include '../Routes/perfil-on-navbar.php';?>
	<br>
	<br>
	<div class="container" style="display: flex; flex-direction: column;">
		<?php for($i = 0; $i < count($noticias); $i++){?>		
			<div class="row-cols-2 d-flex flex-row justify-content-center" style="display: flex; flex-direction: row;">
				<div class="card m-3" style="width: 500px; display: flex; flex-wrap: wrap">
					<div class="row g-0">
						<a href="#" target="_blank">
							<img src="<?php
								$imagem = base64_encode($noticias[$i]['imagem_noticias']);
								echo "data:image/jpeg;base64,". $imagem;?>" class='card-img-top' alt="" style= 'height: fit-content; border-radius: 7px; cursor:pointer; max-height: 281px; width: 500px;'>
						</a>	
							<div class="col-md-8">
								<div class="card-body" style="margin-left: 7px;">
									<h5 class="card-title" style="text-shadow: 0px 0px 6px #2b2b2b;"><?php echo $noticias[$i]['titulo_noticias'];?></h5>
									<p class="card-text" style="width: 400px;"><strong><?php echo $noticias[$i]['descricao_noticias'];?><strong></p>
									<section>
										<button><a id="saiba-mais" href="#">Saiba mais</a></button>	
									</section>
								</div>
							</div>
					</div>
				</div>
			</div>
	</div>
	<?php } ?>
				<!-- <section style="width: fit-content;">
					<h1 id="title-h1" style="text-shadow: 0px 0px 6px #2b2b2b;">
					Fim da segunda etapa do Campeonato Paranaense sub-13 feminino, em Guarapuava-PR!
					</h1>
					<br>
					<h2 id="title-h2" style="text-shadow: 0px 0px 6px #2b2b2b;">
					No último domingo (09), a equipe da casa, Voleibol Guarapuava, conquistou a medalha de ouro na etapa. O segundo lugar ficou com o Authentic Vôlei/Maringá e o terceiro, com o Círculo Militar.
					</h2>
					<br>
					<button><a id="saiba-mais" href="#">Saiba mais</a></button>
				</section>
			</div>
			<aside style="height: fit-content;">
				<div id="carouselExampleSlidesOnly-1" class="carousel slide d-flex" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/main-news.webp" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center">27 de novembro de 2023</h5>-->
								<!-- <p>PM Foz do Iguaçu/ Smel conquista Paranaense Sub-14 Série B feminino 2023</p> -->
							<!-- </div>
						</div>
					</div>
				</div>
			</aside>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br><br><br>

		<div class="content-cards">
			<div class="container">
		
				<div class="row row-cols-1 row-cols-md-3 g-4">
					<div class="col">
						<div class="card h-100">
							<a href="#" target="_blank">
								<img src="img/foto-selecao.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;">
							</a>
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
								<img src="img/noticia-2.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;">
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
								<img src="img/noticia-3.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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
			</div>
			<br><br><br><br>

			<div class="container">
				<div class="row row-cols-1 row-cols-md-3 g-4">
					<div class="col">
						<div class="card h-100">
							<a href="#" target="_blank">
								<img src="img/noticia-4.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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
								<img src="img/noticia-5.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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
								<img src="img/noticia-6.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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

	<div class="blue-back2">
		<aside>
			<h1 class="second-title">Campeonato Paranaense!</h1>
			<div id="carouselExampleSlidesOnly" id="carousel-slide" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="aside-imgs" src="img/news-1.webp" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023"> < Deixar o carrousel mais escuro -->
						<!-- <div class="carousel-caption d-flex d-md-block justify-content-center align-items-center">
							<h5 class="d-flex justify-content-center">10 de junho de 2024</h5>
							<p class="d-flex justify-content-center">Confira como foi o final de semana (07 a 09) no Campeonato Estadual Adulto</p>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-sides d-flex position-absolute">
				<div id="carouselExampleFade" class="carousel slide carousel-fade d-flex" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="aside-imgs position-relative d-flex" src="img/news2_1.webp" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023" style="
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="d-flex justify-content-center position-relative d-flex" style="font-size: 20px;">9 de junho de 2024</h5>
								<p class="d-flex justify-content-center position-relative d-flex" style="font-size: 19px;">Hoje (24), inicia a primeira etapa dos Jogos da Juventude do Paraná 2024!</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="aside-imgs" src="img/news2_2.webp" class="d-block" alt="Imagem de jogadores de volêi" style="
								display: flex; 
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center position-relative d-flex" style="font-size: 20px; text-align: center;">12 de junho de 2024</h5>
								<p class="justify-content-center position-relative d-flex" style="font-size: 19px;">Fim de segunda etapa do Campeonato Paranaense sub-19 série A masculino!</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="aside-imgs" src="img/news2_3.webp" class="d-block" alt="Imagem da equipe de vôlei da smel Araucária de 2023" style="
							display: flex; 
							width: 620px; 
							height: 345px; 
							border-radius: 10px; 
							transition: 0.3s;
							">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center position-relative d-flex" style="font-size: 20px;">15 de junho de 2024</h5>
								<p class="justify-content-center position-relative d-flex" style="font-size: 19px;">Começou o Campeonato Paranaense Adulto 2024!</p>
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
							<img class="aside-imgs" src="img/news3_1.webp" class="d-block" alt="Imagem do campeonato Paranaense Sub-13 de 2023" style="
								position: relative; 
								display: flex; 
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center" style="font-size: 20px; position: relative; display: flex;">18 de junho de 2024</h5>
								<p class="justify-content-center" style="font-size: 19px; position: relative; display: flex;">Seleção Paranense SUB-18 feminina recebe medalha de bronze no CBS 2024</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="aside-imgs" src="img/news3_2.webp" class="d-block" alt="Imagem de jogadores de volêi" style="
								display: flex; 
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center" style="font-size: 20px; position: relative; display: flex;">20 de junho de 2024</h5>
								<p class="justify-content-center" style="font-size: 18px; position: relative; display: flex;">Confira como foi a 9ª rodada das equipes paranaenses na Superliga B</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="aside-imgs" src="img/news3_3.webp" class="d-block" alt="Imagem da equipe de vôlei da smel Araucária de 2023" style="
								display: flex; 
								width: 620px; 
								height: 345px; 
								border-radius: 10px; 
								transition: 0.3s;
								">
							<div class="carousel-caption d-none d-md-block">
								<h5 class="justify-content-center" style="font-size: 20px; position: relative; display: flex;">25 de junho de 2024</h5>
								<p class="justify-content-center" style="font-size: 18px; position: relative; display: flex;">Confira como foi a última semana do Maringá Vôlei (AMVP) na Superliga B masculina!</p>
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
							<img src="img/noticia-7.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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
							<img src="img/noticia-8.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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
							<img src="img/noticia-9.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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
							<img src="img/noticia-10.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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
							<img src="img/noticia-11.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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
							<img src="img/noticia-12.png" class="card-img-top" alt="Seleção" style="height: fit-content; border-radius: 7px;"></a>
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
	<br><br><br><br>  --> 

	<?php 
    	include 'footer.php';
  	?>
</body>

</html>