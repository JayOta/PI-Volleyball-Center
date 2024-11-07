<?php
    require "../Service/conexao.php";

    function buscarProdutosModel(){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT * FROM `produtos` ");
            $stmt->execute();

            $regras = $stmt->fetchAll();
            return $regras;
        }catch (PDOException $e) {
            return "Erro ao mostrar informações -> ". $e;
        }
    }
    function buscarId($id){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT * FROM `produtos` where `produto_id` = '$id'");
            $stmt->execute();

            $regras = $stmt->fetchAll()[0] ;
            return $regras;
        }catch (PDOException $e) {
            return "Erro ao mostrar informações -> ". $e;
        }
    }
?>