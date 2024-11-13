<?php

    require "../Model/rodizios.php";

    function buscarRodizios(){
        $rodizios = buscarRodiziosmodel();
        return $rodizios;
    }
?>