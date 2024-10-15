<!DOCTYPE html>
<?php
require "../Controller/fundamentos.php";

$fundamentos = buscarfundamentos();
?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Treine em casa</title>
	<link rel="stylesheet" href="../View/css/fundamentos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../Routes/css/fundamentos.css">
</head>

<body>

	<?php
	include '../Routes/perfil-on-navbar.php';
	?>

	<ul class="nav nav-tabs d-flex justify-content-center" style="position: relative; margin-top: 20px;">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="fundamentos.php" style="color: #363636;">Fundamentos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="true" href="sistema-rodizio.php" style="color: #363636;">Sistema de Rodízio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="regras.php" style="color: #363636;">Regras</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="historia.php" style="color: #363636;">História</a>
		</li>
	</ul>




	<div class="meioDosFundamentos">
		<?php
		for ($i = 0; $i < count($fundamentos); $i++) {

		?>
			<div class="card">
				<img src="<?php
							$imagem = base64_encode($fundamentos[$i]['imagem_fundamento']);
							echo "data:image/jpeg;base64," . $imagem;
							?>" class="card-img-top"">
		</div>
		<br>
		<div>
			<p class=" align-text"><?php
									echo $fundamentos[$i]['titulo_fundamento'];
									?></p>
				<p class="fundamentosaolado"><?php
												echo $fundamentos[$i]['descricao'];
												?></p>
			</div>
			<br>

		<?php
		}
		?>
		<!-- <div class="espacoentrediv">
			<h2 class="text-align-center">RECEPÇÃO</h2>
			<div class="card">
				<img src="imgfund/levantamento.jpg" class="card-img-top" alt="imagem de como é feito o passo a passo do levantamento no vôlei.">
			</div>
			<br>
			<div class="align-text">
				<p><strong>Levantamento:</strong></p>
				<p class="fundamentosaolado">Na execução do saque por baixo, o jogador posiciona-se de lado para a rede, com os pés afastados na largura dos ombros e o peso do corpo distribuído uniformemente. O braço de saque é mantido estendido ao lado do corpo, com a mão próxima à altura da cintura segurando a bola. Para sacar, o jogador flexiona levemente os joelhos e o tronco, realizando um movimento de abaixamento do braço de saque. Nesse momento, a bola é arremessada por baixo da cintura em direção à rede, com uma trajetória relativamente tensa e controlada.
			Apesar de suas limitações, o saque por baixo ainda é uma técnica válida no voleibol, especialmente em situações nas quais o jogador precisa de mais controle sobre a bola, como em treinos ou jogos com adversários de nível inferior.
			Muitos jogadores iniciantes começam desenvolvendo o saque por baixo antes de progredir para técnicas mais avançadas, como o saque por cima. O importante é que o atleta domine essa habilidade básica antes de evoluir para opções mais complexas e eficazes.</p>
			</div>
			<p class="restotexto">
			</p>
			<br>
		</div>
		<div class="espacoentrediv">
			<div class="card">
				<img src="img/saque-baixo.jpeg" class="card-img-top" alt="imagem de como é feito passo a passo o saque por baixo no vôlei.">
			</div>
			<br>
			<div class="align-text">
				<p><strong>Saque por baixo:</strong></p>
				<p class="fundamentosaolado">Na execução do saque por baixo, o jogador posiciona-se de lado para a rede, com os pés afastados na largura dos ombros e o peso do corpo distribuído uniformemente. O braço de saque é mantido estendido ao lado do corpo, com a mão próxima à altura da cintura segurando a bola. Para sacar, o jogador flexiona levemente os joelhos e o tronco, realizando um movimento de abaixamento do braço de saque. Nesse momento, a bola é arremessada por baixo da cintura em direção à rede, com uma trajetória relativamente tensa e controlada.
			Apesar de suas limitações, o saque por baixo ainda é uma técnica válida no voleibol, especialmente em situações nas quais o jogador precisa de mais controle sobre a bola, como em treinos ou jogos com adversários de nível inferior.
			Muitos jogadores iniciantes começam desenvolvendo o saque por baixo antes de progredir para técnicas mais avançadas, como o saque por cima. O importante é que o atleta domine essa habilidade básica antes de evoluir para opções mais complexas e eficazes.</p>
			</div>
			<p class="restotexto">
			</p>
			<br>
		</div>
		<div class="espacoentrediv">
			<div class="card">
				<img src="img/saque-baixo.jpeg" class="card-img-top" alt="imagem de como é feito passo a passo o saque por baixo no vôlei.">
			</div>
			<br>
			<div class="align-text">
				<p><strong>Saque por baixo:</strong></p>
				<p class="fundamentosaolado">Na execução do saque por baixo, o jogador posiciona-se de lado para a rede, com os pés afastados na largura dos ombros e o peso do corpo distribuído uniformemente. O braço de saque é mantido estendido ao lado do corpo, com a mão próxima à altura da cintura segurando a bola. Para sacar, o jogador flexiona levemente os joelhos e o tronco, realizando um movimento de abaixamento do braço de saque. Nesse momento, a bola é arremessada por baixo da cintura em direção à rede, com uma trajetória relativamente tensa e controlada.
			Apesar de suas limitações, o saque por baixo ainda é uma técnica válida no voleibol, especialmente em situações nas quais o jogador precisa de mais controle sobre a bola, como em treinos ou jogos com adversários de nível inferior.
			Muitos jogadores iniciantes começam desenvolvendo o saque por baixo antes de progredir para técnicas mais avançadas, como o saque por cima. O importante é que o atleta domine essa habilidade básica antes de evoluir para opções mais complexas e eficazes.</p>
			</div>
			<p class="restotexto">
			</p>
			<br>
		</div> -->
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