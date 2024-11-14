<?php
require "../Model/produto-page.php";
function buscarProduto($id)
{
    $getAllprodutos = buscarId($id);
    return $getAllprodutos;
}

function getAllProdutos()
{
    $getAllprodutos = buscarProdutosModel();
    return $getAllprodutos;
}
// if (isset($_POST['add_cart'])) {
//     $_SESSION['value'] += 1;
//     header("Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/produto-page.php" . "?1");
// }
// if (isset($_POST['sub_cart'])) {

//     $_SESSION['value'] -= 1;
//     header("Location: http://localhost/GitHub/PI-Volleyball-Center/Routes/produto-page.php" . "?1");
// }
