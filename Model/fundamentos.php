<?php
    require "../Service/conexao.php";
 
    function buscarfundamentosmodel(){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT * FROM `fundamentos` ");
            $stmt->execute();
 
            $fundamentos = $stmt->fetchAll();
            return $fundamentos;
        }catch(PDOException $e){
            echo json_encode(['erro ao mostrar fundamento' => $e->getMessage()]);
        }
 
     
    }
?>