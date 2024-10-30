<?php
    require "../Service/conexao.php";
 
    function buscarnoticias2model(){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT * FROM `noticias2` ");
            $stmt->execute();
 
            $noticias2 = $stmt->fetchAll();
            return $noticias2;
        }catch(PDOException $e){
 
        }
 
     
    }
?>