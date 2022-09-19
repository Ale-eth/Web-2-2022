<?php
require_once 'bbdd.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}
// $action = string(4) "home"

// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo = array(1) { [0]=> string(4) "home" } 


switch ($params[0]) {
    case 'home':
        showHome(); //home                                                        => [home]
        break;
    case 'productos-todos':
        showAllProductos();  //productos-todos                                       => [productos-todos]  
        break;
    case 'categorias':
        if(!empty($params[1])){
            showCategoria($params[1]);
        }else{
            showAllCategorias();   //categorias                                           => [categorias]
        }
        break;
    case 'producto':
        showProducto($params[1]);   //producto/*id_producto*                      => [producto/*id_producto*]
        break;
    default:
        showHome();
        break;
}


