<?php 
    require "../Service/conexao.php";

    function buscarregrasmodel(){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT * FROM `regras` ");
            $stmt->execute();

            $regras = $stmt->fetchAll();
            return $regras;
        }catch (PDOException $e) {
            return "Erro ao mostrar informações -> ". $e;
        }
    }
?>