<?php
    require "../Service/conexao.php";
 
    function buscarnoticiasmodel(){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT * FROM `noticias` ");
            $stmt->execute();
 
            $noticias = $stmt->fetchAll();
            return $noticias;
        }catch(PDOException $e){
 
        }
 
     
    }
?>