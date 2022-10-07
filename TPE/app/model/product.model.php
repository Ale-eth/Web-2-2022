<?php

class ProductModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2_tiendaropa;charset=utf8', 'root', '');
    }

    public function getAllProducts(){

        $query = $this->db->prepare("SELECT * FROM producto");
        $query->execute();
    
        $products = $query->fetchAll(PDO::FETCH_OBJ);


        return $products;
    }

    public function getProduct($id_product){

        $query = $this->db->prepare("SELECT * FROM producto WHERE id_producto = $id_product");
        $query->execute();

        $product = $query->fetchAll(PDO::FETCH_OBJ);


        $idcatprod = $product[0]->id_categoriaFK; // Guardo en una variable la id fk para invocarla en otra llamada, pq sino hay error de tipeo

        $query = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria = $idcatprod");
        $query->execute();
        $category = $query->fetchAll(PDO::FETCH_OBJ);

        $array_product = new ArrayObject(array($product, $category));
        
        return $array_product;
    }

    public function getCategories(){

        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();

        $categories = $query->fetchAll(PDO::FETCH_OBJ);


        return $categories;
    }

    public function getCategory($id_category){

        $query = $this->db->prepare("SELECT * FROM producto WHERE id_categoriaFK = $id_category");
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        $idcatprod = $products[0]->id_categoriaFK;

        $query = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria = $id_category");
        $query->execute();

        $category = $query->fetchAll(PDO::FETCH_OBJ);

        
        $array_products = new ArrayObject(array($products, $category));
        
        return $array_products;
    }

    public function addProduct($nombre, $precio, $id_categoriafk, $descripcion){

        $query = $this->db->prepare("INSERT INTO producto (nombre, precio, id_categoriaFK, descripcion) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre, $precio, $id_categoriafk , $descripcion]);

        return $this->db->lastInsertId();

    }

    public function deleteProduct($id_product){

        $query = $this->db->prepare('DELETE FROM producto WHERE id_producto = ?');
        $query->execute([$id_product]);
    }

    public function modifyProduct($id_producto, $nombre, $precio, $categoria, $descripcion){
        $query = $this->db->prepare("UPDATE `producto` SET `id_categoriaFK` = ?, `nombre` = ?, `precio` = ?, `descripcion` = ? WHERE `producto`.`id_producto` = ?");
        $query->execute([$categoria, $nombre, $precio, $descripcion, $id_producto]);
    }

}