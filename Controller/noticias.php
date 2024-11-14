<?php
    require "../Model/noticias.php";
 
    function buscarnoticias(){
        $noticias= buscarnoticiasmodel();
        return $noticias;
       
    }
?>