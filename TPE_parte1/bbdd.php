<?php

function getDB(){
    $db = new PDO('mysql:host=localhost;'.'dbname=web2_tiendaropa;charset=utf8', 'root', '');

    return $db;
}


// SHOW

function showHome(){

    echo'
        <h2>Montagne tienda de ropa</h2>
        <h3> Que queres ver?</h3>
            <a href="categorias"><h3>Categorias</h3></a>       
            <a href="productos-todos"><h3>Todos los productos</h3></a>

            <a href="home"><p>Inicio</p>
        ';
}


function showAllCategorias(){

    $db = getDB(); 
    $query = $db->prepare("SELECT * FROM categoria");
    $query->execute();
    $categorias = $query->fetchAll(PDO::FETCH_OBJ);

    echo '<h3> Categorias: </h3>';

    foreach($categorias as $categoria){
        echo '<a href="categorias/'.$categoria->id_categoria.'">';
        echo "<h3>$categoria->nombre</h3></a>";
    }

    echo '<a href="home"><p>Inicio</p>';
    
}

function showCategoria($id_categoria){
    $db = getDB(); 
    $query = $db->prepare("SELECT * FROM producto WHERE id_categoriaFK = $id_categoria");
    $query->execute();
    $productos = $query->fetchAll(PDO::FETCH_OBJ); // Traigo todos los productos de la categoria solicitada

    $db = getDB(); 
    $query = $db->prepare("SELECT * FROM categoria WHERE id_categoria = $id_categoria");
    $query->execute();
    $categoria = $query->fetchAll(PDO::FETCH_OBJ); // Traigo la categoria para tener el nombre


    echo '<h2> Categoria: '.$categoria[0]->nombre;
    foreach($productos as $producto){
        echo '<a href="../producto/'.$producto->id_producto.'">';
        echo "<h4>$producto->nombre</h4></a>";
    }

    echo '<a href="../home"><p>Inicio</p>';
}

function showAllProductos(){

    // Paso 1
    $db = getDB(); // Primero me traigo la DB

    // Paso 2
    $query = $db->prepare("SELECT * FROM producto");    // Ejecuto la sentencia en 2 sub-pasos
    $query->execute();

    // Paso 3
    $productos = $query->fetchAll(PDO::FETCH_OBJ); // Retorna un arreglo de objetos

    
    echo '<h3> Todos los productos: </h3>';
        
        foreach($productos as $producto){
            echo '<a href="producto/'.$producto->id_producto.'">';
            echo "<h4>$producto->nombre</h4></a>";
        }
    
    echo '<a href="home"><p>Inicio</p>';
    }

function showProducto($id_producto){

        $db = getDB(); 
        $query = $db->prepare("SELECT * FROM producto WHERE id_producto = $id_producto");
        $query->execute();
        $producto = $query->fetchAll(PDO::FETCH_OBJ);

        echo '<h3>Nombre: </h3><h4> '.$producto[0]->nombre.'</h4>';
        echo '<h3>Precio: </h3><h4> '.$producto[0]->precio.' $</h4>';
        echo '<h3>Descripcion: </h3><h4> '.$producto[0]->descripcion.'</h4>';
        

        echo '<a href="../home"><p>Inicio</p>';

}



