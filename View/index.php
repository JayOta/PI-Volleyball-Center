<?php 
    session_start();
?>

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
            <form action="../Controller/login.php" method="post" class="card">
                <div class="card-header">
                    <h1 style="text-align: center; color: #fff; ">Login</h1>
                </div>

                <div class="card-content">
                    <div class="card-content-area">
                        <label for="e-mail" class="labels" style="font-size: 15px; font-style: italic;">Email</label>
                        <input type="text" id="email" autocomplete="off" name="email">
                    </div>
                    <div class="card-content-area">
                        <label for="password" class="labels" style="font-size: 15px; font-style: italic;">Senha</label>
                        <input type="password" id="senha" autocomplete="off" name="senha">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" id="button" class="submit" name="login">Login</button>

                    <br>

                    <a href="#" class="links">Esqueceu a senha?</a>
                </div>
                
                <br><br>

                <div class="card-footer">
                    <a href="../View/cadastro.php" style="text-shadow: 0px 0px 3px #302f2f;">Não tem login? <span id="cadastrar-se">Cadastrar-se</span></a>
                    <br>
                    <a href="inicial.php" class="links" id="para-inicial" style="display: none;">Ir à página inicial</a>
                </div>
                <h6 style="text-align: center;"><span id="volley">Volleyball</span> <span id="center">Center</span></h6>
            </form>
        </div>

        <!-- <script src="login.js"></script> -->
</body>
</html>