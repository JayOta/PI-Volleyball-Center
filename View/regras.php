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
	<ul class="nav nav-tabs d-flex justify-content-center" style="position: relative; margin-top: 20px;" style="text-align: center;" >
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="#"  style="color: #363636;">Fundamentos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="true" href="sistema-rodizio.php"  style="color: #363636;">Sistema de Rodízio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="regras.php"  style="color: #363636;">Regras</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="historia.php"  style="color: #363636;">História</a>
		</li>
	</ul>
	<h2>Regras do voleibol</h2>

	<h3>Área de jogo</h3>

	<p>A área de jogo do vôlei é formada pela quadra de jogo e a zona livre.</p>
	<p>A quadra de vôlei contém 18 metros de comprimento por 9 metros de largura, sendo retangular e simétrica.</p>
	<p>A superfície da quadra deve ser plana, horizontal e sem quaisquer irregularidades que possam prejudicar a realização da prática.</p>
	<p>A rede é instalada verticalmente sobre a linha central. Sua altura difere de acordo com o gênero, para homens é de 2,43 metros e para mulheres, 2,24 metros.</p>
	<p>Os equipamentos necessários no vôlei são:<br>
	camiseta;<br>
	calção/shorts;<br>
	meias (líbero deve usar meia diferente);<br>
	calçado esportivo (leve e flexível).</p>

	<h3>Quantidade de jogadores no vôlei</h3>

	<p>Uma equipe de vôlei tem 12 jogadores, sendo que entram em quadra 6 jogadores. Além dos competidores, o time é formado por outros profissionais:</p>
	comissão técnica: um técnico/treinador e até dois assistentes técnicos<br>

	corpo médico: um médico e um fisioterapeuta.<br><br>
	<p>Um dos atletas é definido como capitão da equipe.<br>

	Ao longo de um set, podem ser realizadas até seis substituições. O set é uma fase de uma partida de vôlei.</p>
	<h3>Pontuação no vôlei</h3>
	<p>O jogo de vôlei é formado por sets. A vitória de um set será definida quando uma das equipes atingir 25 pontos.</p>
	<p>Vence a partida a equipe que ganhar 3 sets. Caso ocorra um empate de 24 a 24 pontos, vence o time que conseguir uma vantagem de 2 pontos primeiro.<br>
	Quando ocorre um empate de 2 sets a 2 sets, haverá um quinto set com 15 pontos. E o critério do empate é definido em caso de 14 a 14, com a equipe vencedora atingindo primeiro a diferença mínima de 2 pontos.<br>
	O rally é formado por todas ações de jogo, desde o saque da bola até a marcação de um ponto, seja por um ataque direto, seja porque a bola sai da quadra e gera ponto para o time adversário.</p>
	
	<hr style="width: 80%; margin-left: 200px;">
	<div class="aviso" style="display: flex; flex-direction:column; justify-content: center; align-items: center;">
		<p>Com o treino frequente desses fundamentos, a sua habilidade irá melhorar aos poucos.</p>
		<h6 style="display: flex; margin-right: 100px;"><strong>Não esqueça!</strong></h6>
		<ul>
			<li>Alongue-se antes</li>
			<li>Hidrate-se na medida certa.</li>
		</ul>
	</div>
	<br><br><br><br><br>
	<?php 
    	include 'footer.php';
  	?>
</body>
</html>