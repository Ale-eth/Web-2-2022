<?php
require_once 'smarty\libs\Smarty.class.php';

class ProductView{
    private $smarty;
    

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showHome(){
        echo'
        <h2>Montagne tienda de ropa</h2>
        <h3> Que queres ver?</h3>
            <a href="categorias"><h3>Categorias</h3></a>       
            <a href="productos-todos"><h3>Todos los productos</h3></a>

            <a href="home"><p>Inicio</p>
            <a href="form-add-product"><p>Form añadir TEST</p>
        ';
    }

    public function showAllProducts($products){
        echo '<h3> Todos los productos: </h3>';
        
        foreach($products as $producto){
            echo '<a href="producto/'.$producto->id_producto.'">';
            echo '<h4>'.$producto->nombre.'</h4></a>';
            echo '<a href="delete-product/'.$producto->id_producto.'"><p>Eliminar</p>';
        }
    
        echo '<a href="home"><p>Inicio</p>';
    }

    public function showProduct($array_product){

        foreach($array_product[0] as $producto){
            echo "<h3>Nombre del producto: </h3>".$producto->nombre;
            echo "<h3>Precio: </h3>".$producto->precio."$";
            echo "<h3>Descripcion del producto: </h3>".$producto->descripcion;
        }

        foreach($array_product[1] as $categoria){
            echo "<h3>Categoria a la que pertenece: </h3>".$categoria->nombre;
        }

        echo '<a href="../home"><p>Inicio</p>';
    }

    public function showCategories($categories){
        echo "<h2> Categorias: </h2>";
        foreach($categories as $category){
            echo '<a href="categorias/'.$category->id_categoria.'">';
            echo "<h4>$category->nombre</h4></a>";
        }
    
        echo '<a href="home"><p>Inicio</p>';
    }

    public function showProducts($array_products){
        foreach($array_products[1] as $propiedad){
            echo '<h3> Productos de la categoria: '.$propiedad->nombre.' </h3>';
        }        
        foreach($array_products[0] as $producto){
            echo '<a href="../producto/'.$producto->id_producto.'">';
            echo "<h4>$producto->nombre</h4></a>";
        }
    
        echo '<a href="../home"><p>Inicio</p>';
    }

    public function addProduct(){

        echo'
        <h2>Añadir producto</h2>
        <form action="add-product" method="POST">
            <p>Nombre del producto: <input name="nombre" type="text"></p>
            <p>Precio: <input name="precio" type="text"></p>
            
            <p>
            <select name="categoria">
            <option value="1">Gorras</option>
            <option value="2">Remeras</option>
            <option value="3">Pantalones</option>
            <option value="4">Zapatillas</option>
            </p>

            <p>Descripcion: <input name="descripcion" type="text"></p>
    
            <button type="submit">Añadir</button>
        ';
    }

}