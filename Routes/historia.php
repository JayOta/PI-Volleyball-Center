<!DOCTYPE html>
<?php
// require "../Controller/historia.php";
// $historia = buscarhistoria();
?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="../Routes/img/logo-volei.png" type="image/x-icon">
	<title>Origem</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/historia.css">
	<link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">
	<link rel="stylesheet" href="../Routes/css/perfil-on-navbar.css">

	<style>
		.card-body {
			margin: 25px;
		}

		p {
			font-size: 18px;
		}

		p.text {
			color: #0b0b0b;
		}

		.text {
			font-size: 22px;
		}

		img.img {
			width: 350px;
			height: 260px;
		}

		img {
			transition: 0.5s ease-in-out;
			width: 100%;
			height: 100%;
		}

		img:hover {
			transform: scale(1.02);
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

		.jogador {
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
			<a class="nav-link" aria-current="page" href="fundamentos.php" style="color: #363636;">Fundamentos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="true" href="sistema-rodizio.php" style="color: #363636;">Sistema de Rodízio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" aria-current="page" href="regras.php" style="color: #363636;">Regras</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="historia.php" style="color: #363636;">História</a>
		</li>
	</ul>

	<div class="card-body">
		<?php
		// for($i = 0; $i< count($historia); $i++){
		// }	
		?>
		<h1 style="color:  #1e90ff;">Origem do Voleibol</h1>

		<p class="text">William George Morgan, professor e diretor de Educação Física na Associação Cristã de Moços (ACM), idealizou um jogo em que as probabilidades dos participantes se machucarem, em detrimento de contato físico, fossem baixas. Outro fator importante - e pensado nos jogadores mais velhos - era que o esporte não fosse fisicamente tão exigente.</p>
		<p class="text">Na época, o basquetebol estava na moda. Havia sido criado 4 anos antes, em 1891, também por um professor de educação física da Associação Cristã dos Moços.</p>
		<p class="text">E assim surgiu o vôlei - chamado de "mintonette" - que, graças ao fato de cada uma das equipes ficarem separadas por uma rede, trazia menos chances de lesões. Além disso, era menos exigente em termos físicos do que o basquetebol - uma vez que os jogadores não precisavam correr ao longo do jogo por toda a quadra. O vôlei, no entanto, era muito completo, pois compreendia uma série de exercícios benéficos para a saúde.</p>
		<p class="text">Em seguida, foi a vez de tratar das regras do jogo. Para tanto, Morgan contou com o auxílio de dois amigos, Dr. Frank Wood e John Lynch.</p>
		<p class="text">No ano seguinte da sua criação, Morgan foi convidado a fazer uma demonstração do esporte em um encontro promovido pela Associação Cristã dos Moços. Tratava-se, na verdade, do Congresso de Professores de Educação Física, que reuniu os conselheiros de educação física da ACM.</p>
		<p class="text">Nessa ocasião, a alteração do nome “mintonette” para “volley ball” foi sugerida pelo professor Alfred T. Halstead, porque os movimentos do novo jogo sugeriam isso, um voleio, ou seja, uma jogada feita no ar. Por fim, os conselheiros receberem uma cópia das regras do jogo, e uma equipe ficou responsável por estudá-las e sugerir melhorias.</p>

		<br><br>

		<h1 style="color:  #1e90ff;">A chegada do vôlei em vários países do mundo</h1>

		<p class="text">Dos Estados Unidos da América, o vôlei seguiu para o Canadá, chegando à América do Sul em 1910. O primeiro país sul-americano a conhecê-lo foi o Peru, e em 1915 foi a vez do Brasil. Em 1951, foi no Brasil que o primeiro campeonato sul-americano de vôlei foi disputado.</p>
		<p class="text">Em 20 de abril de 1947 foi fundada a Federação Internacional de Voleibol (FIVB), que teve como primeiro presidente Paul Libaud. Quando fundada, tinha 14 membros: Brasil, Bélgica, Egito, Estados Unidos, França, Holanda, Hungria, Itália, Iugoslávia, Polônia, Portugal, Romênia, Checoslováquia e Uruguai.
			Atualmente, a FIVB conta com 163 países filiados.</p>
		<p class="text">A FIVB é o órgão responsável por todas as questões que envolvem o voleibol, tais como a organização de torneios e congressos, além de oferecer cursos para árbitros e treinadores.</p>
		<p class="text">Dois anos depois da fundação da Federação, em 1949, realizou-se o primeiro campeonato de vôlei masculino na Checoslováquia, o qual foi conquistado pelos russos. Em 1952 foi a vez das mulheres disputaram pela primeira vez um campeonato de voleibol, sendo o título conquistado pelas russas.</p>
		<p class="text">Quase 70 anos após a sua criação, a partir de 1964, o vôlei passou a integrar os jogos olímpicos. A Rússia foi o primeiro campeão olímpico do vôlei masculino, quando a Checoslováquia ficou com a prata e o Japão, com o bronze.</p>

		<br><br>

		<h1 style="color:  #1e90ff;">Os 10 melhores jogadores brasileiros de vôlei de todos os tempos</h1> <br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/giba-1.jpg" alt="Jogador 1" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">1. Giba<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Quatro vezes medalhista olímpico (duas vezes ouro), tricampeão mundial, oito vezes campeão da Liga Mundial.</li><br>
							<li>Equipes Notáveis: Minas Tênis Clube, Italiano Sisley Treviso, Dentil Praia Clube.</li><br>
							<li>Curiosidades: Giba é amplamente reconhecido como um dos melhores jogadores de vôlei de todos os tempos, conhecido por sua habilidade atlética e carisma.</li>
						</ul>
			</div>
		</div>

		<br><br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/bernardinho.webp" alt="Jogador 2" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">2. Bernardinho<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Medalhista de ouro olímpico como jogador (1984) e como técnico (2004, 2016), além de diversos títulos na Liga Mundial e no Campeonato Mundial.</li><br>
							<li>Equipes Notáveis: Fluminense, Seleção Brasileira Masculina de Vôlei.</li><br>
							<li>Curiosidades: Além de ser um jogador excepcional, Bernardinho se destacou ainda mais como técnico, guiando a Seleção Brasileira a várias conquistas históricas.</li>
						</ul>
			</div>
		</div>

		<br><br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/serginho.webp" alt="Jogador 3" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">3. Serginho<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Quatro medalhas olímpicas (duas de ouro), além de múltiplos títulos mundiais e da Liga Mundial.</li><br>
							<li>Equipes Notáveis: SESI-SP, Trentino Volley.</li><br>
							<li>Curiosidades: Conhecido por sua incrível habilidade defensiva e liderança em quadra, Serginho é uma lenda do vôlei brasileiro.</li>
						</ul>
			</div>
		</div>

		<br><br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/bruninho.jpg" alt="Jogador 4" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">4. Bruno Rezende (Bruninho)<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Medalhista de ouro olímpico (2016), campeão da Liga Mundial e do Campeonato Mundial.</li><br>
							<li>Equipes Notáveis: Modena Volley, SESI-SP.</li><br>
							<li>Curiosidades: Como filho do ex-jogador Bernardinho, Bruninho seguiu os passos do pai e se tornou um dos melhores levantadores do mundo.</li>
						</ul>
			</div>
		</div>

		<br><br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/nalbert.jpg" alt="Jogador 5" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px; min-width: 350px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">5. Nalbert Bitencourt<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Medalhista de ouro olímpico (2004), campeão da Liga Mundial e do Campeonato Mundial.</li><br>
							<li>Equipes Notáveis: Minas Tênis Clube, Modena Volley.</li><br>
							<li>Curiosidades: Nalbert foi uma peça fundamental na conquista do ouro olímpico em Atenas 2004, deixando uma marca indelével na história do vôlei brasileiro.</li>
						</ul>
			</div>
		</div>

		<br><br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/giovane.png" alt="Jogador 6" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">6. Giovane Gávio<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Duas vezes medalhista de ouro olímpico (1992, 2004), campeão mundial e da Liga Mundial.</li><br>
							<li>Equipes Notáveis: Cruzeiro, Treviso Volley.</li><br>
							<li>Curiosidades: Além de suas conquistas no vôlei de quadra, Giovane também teve sucesso no vôlei de praia, demonstrando sua versatilidade como atleta.</li>
						</ul>
			</div>
		</div>

		<br><br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/ricardinho.jpg" alt="Jogador 7" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">7. Ricardinho<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Medalhista de ouro olímpico (2004), campeão mundial e da Liga Mundial.</li><br>
							<li>Equipes Notáveis: Sada Cruzeiro, Pallavolo Modena.</li><br>
							<li>Curiosidades: Conhecido por sua habilidade como levantador e sua visão de jogo excepcional, Ricardinho foi uma peça-chave na conquista do ouro olímpico em Atenas 2004.</li>
						</ul>
			</div>
		</div>

		<br><br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/murilo.jpg" alt="Jogador 8" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">8. Murilo Endres<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Medalhista de ouro olímpico (2004), campeão mundial e da Liga Mundial.</li><br>
							<li>Equipes Notáveis: SESI-SP, Sada Cruzeiro.</li><br>
							<li>Curiosidades: Murilo foi um dos jogadores mais versáteis do vôlei brasileiro, destacando-se tanto na defesa quanto no ataque.</li>
						</ul>
			</div>
		</div>

		<br><br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/mauricio.jpg" alt="Jogador 9" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">9. Maurício Lima<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Medalhista de ouro olímpico (1992), campeão mundial e da Liga Mundial.</li><br>
							<li>Equipes Notáveis: Pirelli Volley, Sisley Treviso.</li><br>
							<li>Curiosidades: Maurício foi uma das peças-chave da lendária geração de ouro do vôlei brasileiro nos anos 90.</li>
						</ul>
			</div>
		</div>

		<br><br>

		<div class="jogador" style="display: flex; flex-direction: row; box-shadow: 0px 0px 4px #696969; border-radius: 6px;">
			<img class="img" src="img/andre.jpg" alt="Jogador 10" style="border: none; border-radius: 4px; box-shadow: 0px 0px 4px #696969; margin: 20px;"> <!-- Colocar a imagem do jogador ao lado direito dos textos -->
			<div class="card-text" style="display: flex; flex-direction: column; margin: 10px;">
				<h3 style="display: flex; flex-direction: row; margin: 5px; font-size: 32px; margin-left: 30rem; margin-bottom: 15px; padding: 10px 30px;">10. André Nascimento<h3>
						<ul style="margin-left: 15px; font-size: 20px;">
							<li>Títulos: Medalhista de ouro olímpico (2004), campeão mundial e da Liga Mundial.</li><br>
							<li>Equipes Notáveis: Sada Cruzeiro, Dinamo Moscow.</li><br>
							<li>Curiosidades: André era conhecido por sua potência no ataque e foi fundamental na conquista do ouro olímpico em Atenas 2004.</li>
						</ul>
			</div>
		</div>
	</div>

	<br><br><br><br><br>

	<?php
	include 'footer.php';
	?>
</body>

</html>