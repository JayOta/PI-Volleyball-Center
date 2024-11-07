<?php
    require "../Model/historia.php";

    function buscarHistoria(){
        $historia = buscarHistoriaModel();
        return $historia;
    }
?>