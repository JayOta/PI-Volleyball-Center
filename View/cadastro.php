<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<title></title>
</head>
<body>
	<div id="login">
		<form class="card">
			<div class="card-header">
				<h1 style="text-align: center; color: #fff;">Cadastro</h1>
			</div>

			<div class="card-content">
				<div class="card-content-area">
					<label for="usuario" style="font-size: 15px; font-style: italic;">Usuário</label>
					<input type="text" id="usuario" autocomplete="off" name="usuario">
				</div>
				<div class="card-content-area">
					<label for="email" style="font-size: 15px; font-style: italic;">E-mail</label>
					<input type="text" id="email" autocomplete="off" name="email">
				</div>
				<div class="card-content-area">
					<label for="password" style="font-size: 15px; font-style: italic;">Senha</label>
					<input type="password" id="senha" autocomplete="off" name="senha">
				</div>
				<div class="card-content-area">
					<label for="password" style="font-size: 15px; font-style: italic;">Endereço</label>
					<input type="text" id="senha" autocomplete="off" name="endereco">
				</div>
				<div class="card-content-area">
					<label for="password" style="font-size: 15px; font-style: italic;">CPF</label>
					<input type="password" autocomplete="off" name="cpf">
				</div>
		
				<br>

				<div class="card-footer">
					<button onclick="cadastro(); return false" type="submit"  id="button_cadastro" class="submit">Cadastrar-se</button>

					<br>

					<a href="index.php" class="links" id="fazer-login" style="font-size: 15px;">Fazer login</a>
				</div>
				<h6 style="text-align: center;"><span id="volley">Volleyball</span> <span id="center">Center</span></h6>
			</div>
		</form>
	</div>

	<script src= "cadastro.js"></script>
</body>
</html>