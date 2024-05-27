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

                    <h1 style="text-align: center; color: #fff; ">Login</h1>

                </div>

                <div class="card-content">

                    <div class="card-content-area">

                        <label for="e-mail">Email</label>

                        <input type="text" id="email" autocomplete="off">

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha</label>

                        <input type="password" id="senha" autocomplete="off">

                    </div>

                </div>

                <div class="card-footer">

                    <button onclick="login(); return false" type="submit" id="button" class="submit">Login</button>

                    <br>

                    <a href="#" class="links">Esqueceu a senha?</a>

                </div>
                
                <br>
                <br>

                <div class="card-footer">

                    <a href="cadastro.html">Não tem login? <span id="cadastrar-se">Cadastrar-se</span></a>

                    <br>

                    <a href="inicial.php" class="links">Ir à página inicial</a>

                </div>

                
                <h6 style="text-align: center;"><span id="volley">Volleyball</span> <span id="center">Center</span></h6>

            </form>

        </div>
        <script src="login.js"></script>
</body>
</html>