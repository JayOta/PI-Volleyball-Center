<?php
    require "../Model/fundamentos.php";
 
    function buscarfundamentos(){
        $fundamentos= buscarfundamentosmodel();
        return $fundamentos;
       
    }
?>