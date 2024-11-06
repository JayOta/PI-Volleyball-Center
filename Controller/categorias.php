<?php
    require "../Model/categorias.php";

    function buscarCategoria(){
        $categoria = buscarCategoriasModel();
        return $categoria;
    }
?>