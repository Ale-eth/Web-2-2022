<?php
require_once 'app\model\product.model.php';
require_once 'app\view\product.view.php';

class ProductController{

    private $model;
    private $view;

    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }

    public function showHome(){
        $this->view->showHome();
        }

    public function showAllProducts(){
        $products = $this->model->getAllProducts();
        $this->view->showAllProducts($products);
    }

    public function showProduct($id_product){
        $product = $this->model->getProduct($id_product);
        $this->view->showProduct($product);
    }

    public function showCategories(){
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }

    public function showCategory($id_category){
        $array_products = $this->model->getCategory($id_category);
        $this->view->showProducts($array_products);
    }


    // ABM
    public function formAddProduct(){
        $this->view->AddProduct();
    }

    public function addProduct(){

        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];

        $id_producto = $this->model->addProduct($nombre, $precio, $categoria, $descripcion);

        header("Location: " . BASE_URL); 

    }

    public function deleteProduct($id_product){
        $this->model->deleteProduct($id_product);
        header("Location: " . BASE_URL);

    }

    public function formModifyProduct($id_product){
        $this->view->modifyProduct($id_product);
        
    }

    public function modifyProduct(){

        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $id = $_POST['id'];

        $this->model->modifyProduct($id, $nombre, $precio, $categoria, $descripcion);

        header("Location: " . BASE_URL);
    }






    public function test(){
        
    }

}