<?php
    require "../Model/perfil-img.php";
 
    function buscarPerfilImg(){
        $perfil_img= buscarPerfilImgModel();
        return $perfil_img;
       
    }
?>