<?php
    require "../Service/conexao.php";

    function getLogin($email, $senha) {
        global $conn;
        try {
            if(isset($_POST['login'])){
                if(strlen($_POST['email']) == 0 || $_POST['email'] == ''){
                echo "<script>alert('O seu email não pode ser enviado vazio!');</script>";
            } else if(strlen($_POST['senha']) == 0 || $_POST['senha'] == ''){
                echo "<script>alert('A sua senha não pode ser enviado vazio!');</script>";
            } else {
                $email = $conn->quote($_POST['email']);
                $senha = $conn->quote($_POST['senha']);

                $stmt = $conn->prepare("SELECT * FROM `clientes` WHERE `email` = $email");
                $stmt->execute();
                
                if($stmt->fetchAll()){
                    $usuario = $stmt->fetchAll()[0];
                    if(strcasecmp($usuario[2], $email)){
                        echo "Verdadeiro";
                    } else {
                        echo "Falso";
                    }
                }   
                // if(!($usuario[2] == $email && $usuario[3] == intval($senha))){
                //     echo"<script>alert('Usuario e senha incorretos!');</script>";
                // } else {
                //     return $stmt->fetch(PDO::FETCH_OBJ);
                // }        
            }       
                }
            } catch(PDOException $e){
                echo json_encode(['erro ao fazer o login' => $e->getMessage()]);
            }
    }