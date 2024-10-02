<?php 
    require "../Service/conexao.php";

    function buscarPerfilImgModel(){
        global $conn;
        try{
            $stmt = $conn->prepare("SELECT * FROM `usuarios`");
            $stmt->execute();
 
            $perfil_img = $stmt->fetchAll();
            return $perfil_img;
        }catch(PDOException $e){
 
        }
 
     
    }
?>