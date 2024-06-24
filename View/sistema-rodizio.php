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
	</style>
</head>
<body>
<?php 
		include 'navbar.php';
	?>

<ul class="nav nav-tabs d-flex justify-content-center" style="position: relative; margin-top: 20px;">
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="fundamentos.php"  style="color: #363636;">Fundamentos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="historia.php"  style="color: #363636;">História</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="regras.php"  style="color: #363636;">Regras</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="true" href="sistema-rodizio.php"  style="color: #363636;">Sistema de Rodízio</a>
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
						<img src="img/rod-6x0.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma saque por baixo" style="border-radius: 5px;">
					</div>
					<div class="col-md-8 d-flex position-relative">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title">Rodízio 6x0</h5>
							<p class="card-text-center">Para execultar o jogador deve segurar a bola com uma mão e bater-lhe com a outra, aberta ou fechada, fazendo um movimento de baixo para cima.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-6x0-infiltracao.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma saque por cima" style="border-radius: 5px; max-height: 281px; width: 500px;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title">Rodízio 6x0 com Infiltração</h5>
							<p class="card-text-center">Para execultar o jogador deve lançar a bola para cima, com uma mão, e bater-lhe com a outra.</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row-cols-2 justify-content-center" style="display: flex; flex-direction: row;">
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-4x2.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar um ataque" style="border-radius: 5px;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title">Rodízio 4x2</h5>
							<p class="card-text-center">Para execultar o jogador dá uma série de passos contados "passada", salta e então projeta seu corpo para a frente, transferindo deste modo seu peso para a bola no momento do contato.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-4x2-infiltracao.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar um bloqueio" style="border-radius: 5px;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title">Rodízio 4x2 com Infiltração</h5>
							<p class="card-text-center">Para executar o bloqueio o jogador precisa saltar verticalmente com os braços esticados e apontados para cima, as palmas das mãos voltadas para a quadra adversária.</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row-cols-2 justify-content-center"  style="display: flex; flex-direction: row;">
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-4x2-libero.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar um levantamento" style="border-radius: 5px;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title">Rodízio 4x2 com Líbero</h5>
							<p class="card-text-center">Para execultar o levantamento ao tocar na bola, gire os punhos e as palmas das mãos de dentro para fora, empurre a bola com os dedos com força e ao final do movimento estique os braços para cima.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card m-3" style="width: 550px; display: flex; flex-wrap: wrap;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center" style="width: 500px; margin-left: 23px; margin-top: 20px;">
						<img src="img/rod-5x1.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma manchete" style="border-radius: 5px;">
					</div>
					<div class="col-md-8">
						<div class="card-body" style="margin-left: 7px;">
							<h5 class="card-title">Rodízio 5x1</h5>
							<p class="card-text-center">Para execultar o jogador deve manter os braços e cotovelos estendidos e unidos pelas mãos, a bola deverá acertar os antebraços, além de os joelhos estarem flexionados.</p>
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