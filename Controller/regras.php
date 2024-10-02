<?php 
    require "../Model/regras.php";

    function buscarregras(){
        $regras = buscarregrasmodel();
        return $regras;
    }
?>