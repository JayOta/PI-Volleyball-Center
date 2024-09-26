<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Treine em casa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
	<style>
		.card-body{
			margin: 25px;
		}
		.text{
			font-size: 22px;
		}
		li p.text {

		}
	</style>

</head>
<body>
	
	<?php 
		include '../Routes/perfil-on-navbar.php';
	?>
	<ul class="nav nav-tabs d-flex justify-content-center" style="position: relative; margin-top: 20px;" style="text-align: center;" >
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="fundamentos.php"  style="color: #363636;">Fundamentos</a>
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
	<h2 style="text-align: center; font-size: 40px; margin-top: 40px;">Regras do voleibol</h2>
	<div class="card-body">
		<h3 style="color:  #1e90ff;">Área de jogo</h3>

			<p class="text">A área de jogo do vôlei é formada pela quadra de jogo e a zona livre.</p>
			<p class="text">A quadra de vôlei contém 18 metros de comprimento por 9 metros de largura, sendo retangular e simétrica.</p>
			<p class="text">A superfície da quadra deve ser plana, horizontal e sem quaisquer irregularidades que possam prejudicar a realização da prática.</p>
			<p class="text">A rede é instalada verticalmente sobre a linha central. Sua altura difere de acordo com o gênero, para homens é de 2,43 metros e para mulheres, 2,24 metros.</p>
		
		<br>

		<h3 style="color:  #1e90ff;">Equipamentos</h3>
			<p class="text">Os equipamentos necessários no vôlei são:<br></p>
			<ul class="faltas">
					<li class="text">Camiseta;<br></li>
					<li class="text">Calção/shorts;<br></li>
					<li class="text">Meias (líbero deve usar meia diferente);<br></li>
					<li class="text">Calçado esportivo (leve e flexível).</li>
			</ul>

		<br>

		<h3 style="color:  #1e90ff;">Quantidade de jogadores no vôlei</h3>

			<p class="text">Uma equipe de vôlei tem 12 jogadores, sendo que entram em quadra 6 jogadores. Além dos competidores, o time é formado por outros profissionais:</p>
			<p class="text">comissão técnica: um técnico/treinador e até dois assistentes técnicos<br></p>
			<p class="text">corpo médico: um médico e um fisioterapeuta.<br></p>
			<p class="text">Um dos atletas é definido como capitão da equipe.<br></p>

			<p class="text">Ao longo de um set, podem ser realizadas até seis substituições. O set é uma fase de uma partida de vôlei.</p>

		<br>

		<h3 style="color:  #1e90ff;">Pontuação no vôlei</h3>

			<p class="text">O jogo de vôlei é formado por sets. A vitória de um set será definida quando uma das equipes atingir 25 pontos.</p>
			<p class="text">Vence a partida a equipe que ganhar 3 sets. Caso ocorra um empate de 24 a 24 pontos, vence o time que conseguir uma vantagem de 2 pontos primeiro.</p>
			<p class="text">Quando ocorre um empate de 2 sets a 2 sets, haverá um quinto set com 15 pontos. E o critério do empate é definido em caso de 14 a 14, com a equipe vencedora atingindo primeiro a diferença mínima de 2 pontos.</p>
			<p class="text">O rally é formado por todas ações de jogo, desde o saque da bola até a marcação de um ponto, seja por um ataque direto, seja porque a bola sai da quadra e gera ponto para o time adversário.</p>
		
		<br>

		<h3 style="color:  #1e90ff;">Toques no vôlei</h3>

			<p class="text">Os toques são quaisquer ações de contato realizadas por um jogador com a bola em quadra.</p>

			<p class="text">Cada equipe tem o direito de realizar no máximo três toques, além do bloqueio, para arremessar a bola no campo adversário.</p>

			<p class="text">A bola pode tocar em qualquer parte do corpo desde que esse contato seja de forma contínua, ou seja, ela não pode bater em alguma parte e retornar ao corpo do jogador</p>

		<br>

		<h3 style="color:  #1e90ff;">Faltas no vôlei</h3>
			<ul class="faltas">
				<li><p class="text" style="color: #000; ">Dois toques: quando o jogador toca duas vezes na bola ou ela toca em partes de seu corpo (duas vezes, sem continuar o contato).</p></li>

				<li><p class="text">De posição: quando o jogador não ocupa corretamente sua posição na quadra.</p></li>

				<li><p class="text">De rotação: quando o saque não é feito de acordo com a ordem correta definida pela rotação.</p></li>

				<li><p class="text">Quatro toques: quando a equipe realiza quatro toques antes de encaminhar a bola para o outro campo.</p></li>

				<li><p class="text">Toque apoiado: quando o jogador se apoia em outro membro de sua equipe, ou quando ele se apoia em alguma estrutura do jogo ou objeto.</p></li>

				<li><p class="text">Condução: quando a bola é retida ou lançada, isto é, ela não é rebatida pelo toque do jogador.</p></li>

				<li><p class="text">Rede: quando o jogador toca a rede.</p></li>
			</ul>

		<br>

		<h3 style="color:  #1e90ff;">Evolução das regras de vôlei</h3>

			<p class="text">A atualização das regras é fundamental para que a prática esportiva se mantenha atrativa, tanto para jogadores quanto para os espectadores e, consequentemente, para o setor comercial e os diretores das equipes profissionais.</p>

			<p class="text">Uma das mudanças que impactaram o esporte foi a criação da posição do líbero, em 1998. A novidade foi incluída no vôlei, pois o esporte se caracterizava por ataques eficientes, entretanto, carecia de ferramentas de defesa. Nesse sentido, o jogador líbero passou a atuar exclusivamente na assistência e defesa durante as partidas.</p>
	</div>

		<br><br><br>
		
	<?php 
    	include 'footer.php';
  	?>
</body>
</html>