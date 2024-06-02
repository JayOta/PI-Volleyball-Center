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
</head>
<body>
	
	<?php 
		include 'navbar.php';
	?>

	<ul class="nav nav-tabs" style="position: relative; margin-top: 20px;">
		<li class="nav-item">
			<a class="nav-link active" style="color: #363636"; aria-current="page" href="#">Fundamentos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" style="color: #363636"; aria-current="page" href="historia.php">História</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" style="color: #363636"; aria-current="page" href="#">Regras</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" style="color: #363636"; aria-current="true">Sistema de Rodízio</a>
		</li>
	</ul>

	<h1 style="font-size: 50px; position: relative; display: flex; left: 50px;  font-weight: 200;">Saques</h1>
	<h2>1. Saque por baixo:</h2>
	

	<!-- <div class="container">
		<br>
		<div class="row row-cols-2 justify-content-center">
			<div class="card m-3" style="max-width: 500px;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center">
						<img src="img/saque-baixo.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma saque por baixo">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Saque por baixo</h5>
							<p class="card-text-center">Para execultar o jogador deve segurar a bola com uma mão e bater-lhe com a outra, aberta ou fechada, fazendo um movimento de baixo para cima.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card m-3" style="max-width: 500px;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center">
						<img src="img/saque-cima.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma saque por cima">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Saque por cima</h5>
							<p class="card-text-center">Para execultar o jogador deve lançar a bola para cima, com uma mão, e bater-lhe com a outra.</p>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="row row-cols-2 justify-content-center">
			<div class="card m-3" style="max-width: 500px;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center">
						<img src="img/ataque.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar um ataque">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Ataque</h5>
							<p class="card-text-center">Para execultar o jogador dá uma série de passos contados "passada", salta e então projeta seu corpo para a frente, transferindo deste modo seu peso para a bola no momento do contato.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card m-3" style="max-width: 500px;">
				<div class="row g-0">
					<div class="col-md-4 d-flex align-items-center">
						<img src="img/bloqueio.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar um bloqueio">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Bloqueio</h5>
							<p class="card-text-center">Para executar o bloqueio o jogador precisa saltar verticalmente com os braços esticados e apontados para cima, as palmas das mãos voltadas para a quadra adversária.</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row row-cols-2 justify-content-center">
			<div class="card m-3" style="max-width: 500px;">
				<div class="row g-1">
					<div class="col-md-4 d-flex align-items-center">
						<img src="img/levantamento.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar um levantamento">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Levantamento</h5>
							<p class="card-text-center">Para execultar o levantamento ao tocar na bola, gire os punhos e as palmas das mãos de dentro para fora, empurre a bola com os dedos com força e ao final do movimento estique os braços para cima.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card m-3" style="max-width: 500px;">
				<div class="row g-1">
					<div class="col-md-4 d-flex align-items-center">
						<img src="img/manchete.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma manchete">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Manchete</h5>
							<p class="card-text-center">Para execultar o jogador deve manter os braços e cotovelos estendidos e unidos pelas mãos, a bola deverá acertar os antebraços, além de os joelhos estarem flexionados.</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row row-cols-2 justify-content-center">
			<div class="card m-3" style="max-width: 500px;">
				<div class="row g-1">
					<div class="col-md-4 d-flex align-items-center">
						<img src="img/recepção.jpg" class="img-fluid rounded-start" alt="imagem mostra como executar uma recpção">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">Recepção</h5>
							<p class="card-text-center">A recepção costuma ser realizada através do levantamento ou da manchete. É uma forma de receber a bola.</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->


	<hr>
	<p>Com o treino frequente desses fundamentos, a sua habilidade irá melhorar aos poucos.</p>
	<strong><h6>Não esqueça!</h6></strong>
	<ul>
		<li>Alongue-se antes</li>
		<li>Hidrate-se na medida certa.</li>
	</ul>
	</div>

	<?php 
    	include 'footer.php';
  	?>
</body>
</html>