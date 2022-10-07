<?php
require_once 'libs\Smarty.class.php';

class ProductView{
    private $smarty;
    

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showHome(){
        $this->smarty->display('templates\home.tpl');
    }

    public function showAllProducts($products){
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates\all-products.tpl');
    }

    public function showProduct($array_product){
        echo '<base href="'.BASE_URL.'">';

        foreach($array_product[0] as $producto){
            echo "<h3>Nombre del producto: </h3>".$producto->nombre;
            echo "<h3>Precio: </h3>".$producto->precio."$";
            echo "<h3>Descripcion del producto: </h3>".$producto->descripcion;
            echo '<a href="form-modify-product/'.$producto->id_producto.'"><p>Modificar</p></a>';
        }

        foreach($array_product[1] as $categoria){
            echo "<h3>Categoria a la que pertenece: </h3>".$categoria->nombre;
        }

        

        echo '<a href="home"><p>Inicio</p>';
    }

    public function showCategories($categories){
        echo '<base href="'.BASE_URL.'">';
        echo "<h2> Categorias: </h2>";
        foreach($categories as $category){
            echo '<div style="display:flex;">';
            echo '<a href="categorias/'.$category->id_categoria.'">';
            echo "<h4>$category->nombre</h4></a>";
            echo '</div>';
        }
    
        echo '<a href="home"><p>Inicio</p>';
    }

    public function showProducts($array_products){
        echo '<base href="'.BASE_URL.'">';
        foreach($array_products[1] as $propiedad){
            echo '<h3> Productos de la categoria: '.$propiedad->nombre.' </h3>';
        }        
        foreach($array_products[0] as $producto){
            echo '<a href="producto/'.$producto->id_producto.'">';
            echo "<h4>$producto->nombre</h4></a>";
        }
    
        echo '<a href="home"><p>Inicio</p>';
    }

    public function addProduct(){
        echo '<base href="'.BASE_URL.'">';

        echo'
        <h2>Añadir producto</h2>
        <form action="add-product" method="POST">
            <p>Nombre del producto: <input name="nombre" type="text"></p>
            <p>Precio: <input name="precio" type="text"></p>
            <p>Descripcion: <input name="descripcion" type="text"></p>
            
            
            <p>Categoria:
            <select name="categoria">
            <option value="1">Gorras</option>
            <option value="2">Remeras</option>
            <option value="3">Pantalones</option>
            <option value="4">Zapatillas</option>
            </select>
            </p>
            
            
            <button type="submit">Añadir</button>
        </form>
            
        ';
    }

    public function modifyProduct($id_product){
        echo '<base href="'.BASE_URL.'">';

        echo'
        <h2>Modificar producto</h2>
        <form action="modify-product" method="POST">
            <p>ID: <input name="id" onlyread type="text" value="'.$id_product.'"></p>
            <p>Nombre del producto: <input name="nombre" type="text"></p>
            <p>Precio: <input name="precio" type="text"></p>
            <p>Descripcion: <input name="descripcion" type="text"></p>
            
           
            <p>Categoria:
            <select name="categoria">
            <option value="1">Gorras</option>
            <option value="2">Remeras</option>
            <option value="3">Pantalones</option>
            <option value="4">Zapatillas</option>
            </select>
            </p>
            
            <button type="submit">Modificar</button>
        ';
    }


    // IMPLEMENTANDO SMARTY
    public function showAllTEST(){

    }



}