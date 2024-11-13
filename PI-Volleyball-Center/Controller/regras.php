<?php
    require "../Model/regras.php";

    function buscarRegras(){
        $regra = buscarRegrasModel();
        return $regra;
    }
?>