<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sistema de Rodízio</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/fundamentos.css">
	<link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="sistema-rodizio.css">

	<style>
		* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
	img {
		transition: 0.4s ease-in-out;
		width: 100%;
		height: 100%;
	}
	img:hover {
		box-shadow: 4px 4px 0px #363636;
		transform: scale(1.01);
		width: 100%;
		object-fit: cover;
	}
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
	.row-cols-2 {
		animation: appear linear;
		animation-timeline: view();
		animation-range: entry 0% cover 40%;
	}
	</style>
</head>
<body>
<?php 
		include '../Routes/perfil-on-navbar.php';
	?>

<ul class="nav nav-tabs d-flex justify-content-center" style="position: relative; margin-top: 20px;">
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="fundamentos.php"  style="color: #363636;">Fundamentos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="true" href="sistema-rodizio.php"  style="color: #363636;">Sistema de Rodízio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="regras.php"  style="color: #363636;">Regras</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="historia.php"  style="color: #363636;">História</a>
		</li>
	</ul>

	<div class="container">
		<br><br>
		<h1 style="transform: translateX(400px);">Rodízios e Suas alterações</h1>
		<br>
		<div class=" row-cols-2 justify-content-center" style="display: flex; flex-direction: row;">
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center justify-content" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-6x0.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma saque por baixo" style="
						border-radius: 5px; 
						cursor:pointer;">
					</div>
					<div class="col-md-8 d-flex position-relative">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title" style="color:  #1e90ff;">Rodízio 6x0</h5>
							<p class="card-text-center" style="width: 400px;">No sistema 6x0, também chamado de sistema 6x6, todos farão a função tanto de levantadores como de atacantes ou defensores. É o sistema mais simples de todos, é normalmente usado em equipes que estão iniciando o treinamento no esporte.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-6x0-infiltracao.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma saque por cima" style="border-radius: 5px; 
						cursor:pointer; max-height: 281px; width: 500px;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title" style="color:  #1e90ff;">Rodízio 6x0 com Infiltração</h5>
							<p class="card-text-center" style="width: 400px;">A grande inovação do sistema 6×0 com infiltração é exatamente a movimentação de infiltração do jogador da posição 1, que torna-se o Levantador da equipe quando está estiver recebendo o Saque. O jogador que ocupar a posição 1, nesse sistema, nunca deve participar da recepção do Saque.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<br><br><br><br><br><br>

		<div class="row-cols-2 justify-content-center" style="display: flex; flex-direction: row;">
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-4x2.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar um ataque" style="border-radius: 5px; 
						cursor:pointer;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title" style="color:  #1e90ff;">Rodízio 4x2</h5>
							<p class="card-text-center" style="width: 400px;">O sistema 4x2 pode ser dividido entre o 4x2 simples ou com infiltração.
							No 4x2 simples há dois levantadores, que se colocam nas posições diagonais da quadra, mais quatro atacantes. Com esse sistema, há sempre um levantador na rede juntamente com dois atacantes.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-4x2-infiltracao.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar um bloqueio" style="border-radius: 5px; 
						cursor:pointer;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title" style="color:  #1e90ff;">Rodízio 4x2 com Infiltração</h5>
							<p class="card-text-center" style="width: 400px;">No 4x2 invertido, também chamado de 4x2 com infiltração, (uma vez que há 4 atacantes e 2 levantadoras em quadra), também há dois levantadores e eles também se posicionam em diagonal. No entanto, o levantador que está na zona de ataque se tornará disponível para o ataque e o que estiver na zona de defesa infiltrará, ou seja, passará da zona em que ele está para a zona de ataque para efetuar o levantamento. Assim, sempre haverá 3 atacantes na rede.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<br><br><br><br><br><br>

		<div class="row-cols-2 justify-content-center"  style="display: flex; flex-direction: row;">
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-4x2-libero.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar um levantamento" style="border-radius: 5px; 
						cursor:pointer;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title" style="color:  #1e90ff;">Rodízio 4x2 com Líbero</h5>
							<p class="card-text-center" style="width: 400px;">Neste rodízio, as 4 jogadoras rotativas são as atacantes e as centrais, enquanto as 2 jogadoras fixas são as levantadoras. A cada troca de saque, 2 atacantes e 2 centrais se movimentam no sentido horário, alternando suas posições na quadra. Já as 2 levantadoras ficam sempre nas mesmas posições, 2 e 5, não rodando. O líbero entra na posição mais recuada, substituindo uma das levantadoras.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-5x1.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma manchete" style="border-radius: 5px; 
						cursor:pointer;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title" style="color:  #1e90ff;">Rodízio 5x1</h5>
							<p class="card-text-center" style="width: 400px;">No rodízio 5x1 segue uma ordem fixa de rotações. O levantador começa na posição 1, que é a posição mais próxima ao fundo da quadra, e o líbero entra em quadra na posição 5, que é a posição de defesa. À medida que o jogo progride e o time ganha pontos, o rodízio continua a seguir essa ordem. O objetivo do rodízio 5x1 é otimizar o desempenho do time, garantindo uma defesa sólida e um ataque eficiente.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<br>
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