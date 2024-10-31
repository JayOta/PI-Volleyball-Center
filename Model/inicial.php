<?php
    require "../Service/conexao.php";
 
    function buscarnoticias2model(){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT * FROM `pag_inicial` ");
            $stmt->execute();
 
            $inicial = $stmt->fetchAll();
            return $inicial;
        }catch(PDOException $e){
 
        }
 
     
    }
?>