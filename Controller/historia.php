<?php
    require "../Model/historia.php";

    function buscarhistoria(){
        $historia = buscarhistoriaModel();
        return $historia;
    }
?>