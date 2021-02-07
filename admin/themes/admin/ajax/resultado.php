<?php

require_once '../../ConfigAdmin.php';
sleep(2);

use App\Controller\ProductController;

//recuperando o id pelo POST
$nameProduct = $_POST['nome'];

//INTANCIANDO A CLASSE
$productController = new ProductController();

//CRIANDO OBJETO
$returnProduct = $productController->findProduct("product_name", $nameProduct);
$linhas = count($returnProduct);
if ($linhas >= 1) {
    echo "Opsss, já existe produto com esse nome";
} else {
    echo "*";
}

