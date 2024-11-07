<?php
 require '../Model/loja.php';
    function buscarProdutos(){
       return getAllProdutos();
    }

    function buscarCategoria(){
      $categoria = buscarCategoriasModel();
      return $categoria;
  }
