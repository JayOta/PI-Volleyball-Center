<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Treine em casa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/fundamentos.css">
	<link rel="stylesheet" href="css/navbar.css">
	<style>
		@keyframes appear {
  from {
    opacity: 0;
    clip-path: inset(100% 100% 0 0);
  }
  to {
    opacity: 1;
    clip-path: inset(0 0 0 0);
  }
}
.meioDosFundamentos {
  animation: appear linear;
  animation-timeline: view();
  animation-range: entry 0% cover 40%;
}
	</style>
</head>
<body>
	
	<?php 
		include 'navbar.php';
	?>

	<ul class="nav nav-tabs d-flex justify-content-center" style="position: relative; margin-top: 20px;">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#"  style="color: #363636;">Fundamentos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="true" href="sistema-rodizio.php"  style="color: #363636;">Sistema de Rodízio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="regras.php"  style="color: #363636;">Regras</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="historia.php"  style="color: #363636;">História</a>
		</li>
	</ul>

	<br><br>

	<div class="meioDosFundamentos" style="transform: translateX(30rem); max-width: 60rem;">
		<h2 class="text-align-center" style="font-size: 50px; position: relative; display: flex; justify-content: center;">Saques</h2>
		<br><br>
		<div class="align-text" style="display: flex; flex-direction: row; position: relative;">
			<div class="card" style="max-width: 35rem; height: 20rem; display: flex; flex-direction: column;">
				<img src="img/saque-baixo.jpeg" class="card-img-top" alt="imagem de como é feito passo a passo o saque por baixo no vôlei." style="width: 550px;">
				<br>
				<p class="card-text" style="font-size: 20px; margin-left: 20px;"><strong>Saque por baixo:</strong></p>
			</div>
			<p style="display: flex; width: 300px; margin: 20px;">Na execução do saque por baixo, o jogador posiciona-se de lado para a rede, com os pés afastados na largura dos ombros e o peso do corpo distribuído uniformemente. O braço de saque é mantido estendido ao lado do corpo, com a mão próxima à altura da cintura segurando a bola.</p>
		</div>
		<p style="max-width: 60rem; margin-top: 15px;">Para sacar, o jogador flexiona levemente os joelhos e o tronco, realizando um movimento de abaixamento do braço de saque. Nesse momento, a bola é arremessada por baixo da cintura em direção à rede, com uma trajetória relativamente tensa e controlada.
		Apesar de suas limitações, o saque por baixo ainda é uma técnica válida no voleibol, especialmente em situações nas quais o jogador precisa de mais controle sobre a bola, como em treinos ou jogos com adversários de nível inferior.

Muitos jogadores iniciantes começam desenvolvendo o saque por baixo antes de progredir para técnicas mais avançadas, como o saque por cima. O importante é que o atleta domine essa habilidade básica antes de evoluir para opções mais complexas e eficazes.
		</p>
		<br>
		<hr style="width: 100%; text-align: left;">
	</div>

	<br>

	<!-- Avaliar se esta forma comentada abaixo deveria ser incrementada o nao -->

	<!-- <div class="meioDosFundamentos card" style="transform: translateX(30rem); max-width: 60rem; display: flex; justify-content: center; align-items: center;">
		<h2 class="text-align-center" style="font-size: 40px; position: relative; display: flex; justify-content: center;">Saque por baixo</h2>
		<br><br>
		<div class="align-text" style="display: flex; flex-direction: row; position: relative;">
			<div class="card" style="max-width: 35rem; height: 20rem; display: flex; flex-direction: column;">
				<img src="img/saque-baixo.jpeg" class="card-img-top" alt="imagem de como é feito passo a passo o saque por baixo no vôlei." style="width: 550px;">
				<br>
			</div>
			<p style="display: flex; width: 300px; margin: 20px;">Na execução do saque por baixo, o jogador posiciona-se de lado para a rede, com os pés afastados na largura dos ombros e o peso do corpo distribuído uniformemente. O braço de saque é mantido estendido ao lado do corpo, com a mão próxima à altura da cintura segurando a bola.</p>
		</div>
		<p style="max-width: 55rem; margin-top: 15px;">Para sacar, o jogador flexiona levemente os joelhos e o tronco, realizando um movimento de abaixamento do braço de saque. Nesse momento, a bola é arremessada por baixo da cintura em direção à rede, com uma trajetória relativamente tensa e controlada.
		Apesar de suas limitações, o saque por baixo ainda é uma técnica válida no voleibol, especialmente em situações nas quais o jogador precisa de mais controle sobre a bola, como em treinos ou jogos com adversários de nível inferior.

Muitos jogadores iniciantes começam desenvolvendo o saque por baixo antes de progredir para técnicas mais avançadas, como o saque por cima. O importante é que o atleta domine essa habilidade básica antes de evoluir para opções mais complexas e eficazes.
		</p>
		<br>
	</div>

	<br> -->

	<div class="meioDosFundamentos" style="transform: translateX(30rem); max-width: 60rem;">
		<br>
		<div class="align-text" style="display: flex; flex-direction: row; position: relative;">
			<div class="card" style="max-width: 35rem; height: 350px; display: flex; flex-direction: column;">
				<img src="img/saque-cima.jpg" class="card-img-top" alt="imagem de como é feito passo a passo o saque por baixo no vôlei." style="width: 550px; height: 200px; margin-top: 60px;">
				<br>
				<p class="cardText" style=" font-size: 20px; margin-left: 20px;"><strong>Saque por cima:</strong></p>
			</div>
			<p style="display: flex; width: 270px; margin: 20px;">A execução técnica do saque por cima começa com o jogador adotando uma posição inicial adequada, com os pés afastados na largura dos ombros, joelhos levemente flexionados e o tronco inclinado levemente à frente. Nesse momento, o braço de saque é levantado acima da cabeça, com a mão posicionada atrás da bola, pronta para o movimento de contato.</p>
		</div>
		<p style="max-width: 60rem; margin-top: 15px;">Esse tipo de saque é extremamente valorizado no voleibol moderno, pois permite que o time sacador obtenha diversas vantagens táticas. A velocidade e os efeitos impressos na bola dificultam muito a recepção do time adversário, podendo inclusive forçar erros diretos. Além disso, um bom saque por cima cria um importante momentum psicológico para a equipe sacadora, elevando a confiança dos jogadores.
		Por todas essas razões, o treinamento do saque por cima recebe enorme atenção nas equipes de alto nível. Um jogador com um saque eficaz nessa técnica pode literalmente definir o rumo de uma partida de voleibol.
		</p>
		<br>
		<hr style="width: 100%; text-align: left;">
	</div>

	<br>
	
	<div class="meioDosFundamentos" style="transform: translateX(30rem); max-width: 60rem; ">
		<br>
		<div class="align-text" style="display: flex; flex-direction: row; position: relative;">
			<div class="card" style="max-width: 35rem; display: flex; flex-direction: column;">
				<img src="img/saque-flutuante.png" class="card-img-top" alt="imagem de como é feito passo a passo o saque por baixo no vôlei." style="width: 550px; margin-top: 20px;">
				<p class="card-text" style="font-size: 20px; margin-top: 20px; margin-left: 20px;"><strong>Saque flutuante:</strong></p>
			</div>
			<p style="display: flex; width: 300px; margin: 20px;">O saque flutuante é uma variação do saque por cima que visa imprimir um efeito impreciso e imprevisível na trajetória da bola, dificultando a recepção do time adversário.

Na execução desse saque, o jogador adota a mesma posição inicial do saque por cima, com os pés afastados na largura dos ombros, joelhos flexionados e tronco inclinado à frente. O braço de saque é então erguido acima da cabeça, com a mão posicionada atrás da bola, pronta para o contato.
			</p>
		</div>
		<p style="max-width: 60rem; margin-top: 15px;">
		Ao sacar, o jogador realiza um movimento vertical de cima para baixo com o braço de saque, sem imprimir muita força. Nesse momento, o contato com a bola é feito de forma suave e leve, com a palma da mão ou os dedos, de maneira a não "bater" na bola.

Essa execução mais sutil e delicada faz com que a bola ganhe um efeito flutuante e irregular em sua trajetória, impedindo que o adversário antecipe sua chegada e se posicione adequadamente para a recepção.
		</p>
			<br>
				
			<hr style="width: 100%; text-align: left; ">
		</div>
	</div>

	<br>
	
	<div class="meioDosFundamentos" style="transform: translateX(30rem); max-width: 60rem; ">
		<br>
		<div class="align-text" style="display: flex; flex-direction: row; position: relative;">
			<div class="card" style="width: 34rem; display: flex; flex-direction: column;">
				<img src="img/saque-viagem.jpg" class="card-img-top" alt="imagem de como é feito passo a passo o saque por baixo no vôlei." style="
				height: 310px; width: 400px; position: relative; left: 100px;">
				<p class="card-text" style="font-size: 20px; margin-left: 20px;"><strong>Saque viagem:</strong></p> <br>
			</div>
			<p style="display: flex; width: 300px; margin: 20px;">O saque viagem é uma variação do saque por cima que busca imprimir um efeito lateral na trajetória da bola, fazendo com que ela "viaje" de forma inesperada para o adversário.

Na execução desse saque, o jogador assume a mesma posição inicial do saque por cima, com os pés afastados na largura dos ombros, joelhos levemente flexionados e tronco inclinado à frente. O braço de saque é então erguido acima da cabeça, com a mão posicionada atrás da bola.
			</p>
		</div>
		<p style="max-width: 60rem; margin-top: 15px;">
		No momento do contato, o jogador realiza um movimento lateral do braço de saque, imprimindo um efeito de corte ou efeito lateral na bola. Isso faz com que a trajetória da bola sofra uma curva inesperada, desviando-se lateral e imprevisívelmente em direção ao adversário.Essa variação do saque por cima é frequentemente utilizada em situações estratégicas, como em finais de set ou quando o time adversário está com dificuldades na recepção. Seu efeito surpresa e imprevisibilidade podem gerar pontos diretos ou desequilibrar a organização tática do oponente.
		</p>
			<br>
			<!-- <hr style="width: 50%; text-align: left; "> -->
		</div>
	</div>

	<hr style="width: 80%; margin-left: 200px;">
	<div class="aviso" style="display: flex; flex-direction:column; justify-content: center; align-items: center;">
		<p>Com o treino frequente desses fundamentos, a sua habilidade irá melhorar aos poucos.</p>
		<h6 style="display: flex; margin-right: 100px;"><strong>Não esqueça!</strong></h6>
		<ul>
			<li>Alongue-se antes</li>
			<li>Hidrate-se na medida certa.</li>
		</ul>
	</div>

	<br><br>
	<?php 
    	include 'footer.php';
  	?>
</body>
</html>