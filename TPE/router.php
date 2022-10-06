<?php
require_once 'app\controller\product.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}
// $action = string(4) "home"

// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo = array(1) { [0]=> string(4) "home" } 

$productController = new ProductController();


switch ($params[0]) {
    case 'home':
        $productController->showHome();
        break;
    case 'productos-todos':
        $productController->showAllProducts();  //productos-todos                                       => [productos-todos]  
        break;
    case 'categorias':
        if(!empty($params[1])){
            $productController->showCategory($params[1]);
        }else{
            $productController->showCategories();   //categorias                                           => [categorias]
        }
        break;
    case 'producto':
        $productController->showProduct($params[1]);   //producto/*id_producto*                      => [producto/*id_producto*]
        break;
    
    case 'delete-product':
        $productController->deleteProduct($params[1]);  //delete-product/*id_producto*
        break;
    case 'add-product':
        $productController->addProduct();  //add-product/id-cat-fk/nombre/precio/descripcion
        break;
    case 'form-add-product':
        $productController->formAddProduct();  //add-product/id-cat-fk/nombre/precio/descripcion
        break;    
    case 'form-modify-product':
        $productController->formModifyProduct();  //add-product/id-cat-fk/nombre/precio/descripcion
        break;        
    default:
        showHome();
        break;
}


