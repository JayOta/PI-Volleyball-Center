<?php 
require '../Service/conexao.php';
function buscarClientes(){
    global $conn;
    try{
        $stmt = $conn->prepare("SELECT * FROM `usuarios` ");
        $stmt->execute();

        $clientes = $stmt->fetchAll();
        return $clientes;
    }catch(PDOException $e){
        echo json_encode(['erro ao mostrar clientes' => $e->getMessage()]);
    }
}

?>