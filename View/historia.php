<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
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
	<main>
		<ul class="nav nav-tabs" style="position: relative; margin-top: 20px;">
			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="fundamentos.php"  style="color: #363636;">Fundamentos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="historia.php"  style="color: #363636;">História</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="regras.php"  style="color: #363636;">Regras</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" aria-current="true" href="sistema-rodizio.php"  style="color: #363636;">Sistema de Rodízio</a>
			</li>
		</ul>
		<h1>Origem do Voleibol</h1>
		<p>William George Morgan, professor e diretor de Educação Física na Associação Cristã de Moços (ACM), idealizou um jogo em que as probabilidades dos participantes se machucarem, em detrimento de contato físico, fossem baixas. Outro fator importante - e pensado nos jogadores mais velhos - era que o esporte não fosse fisicamente tão exigente.</p>
		<p>Na época, o basquetebol estava na moda. Havia sido criado 4 anos antes, em 1891, também por um professor de educação física da Associação Cristã dos Moços.</p>
		<p>E assim surgiu o vôlei - chamado de "mintonette" - que, graças ao fato de cada uma das equipes ficarem separadas por uma rede, trazia menos chances de lesões.</p>
	</main>
	<footer>
		<?php 
    		include 'footer.php';
  		?>
	</footer>
</body>
</html>