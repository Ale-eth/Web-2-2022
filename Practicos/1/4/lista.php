<?php

    $cantidad = $_GET['cantidad'];

    echo "<p>".$cantidad."</p>";

    $colores = array("Rojo", "Azul", "Verde", "Amarillo", "Morado", "Aguamarina", "Blanco", "Negro", "Naranja", "Violeta");
    $contadorColores = count($colores);

    switch($cantidad){
        case 1:
            mostrar1($colores);
            break;
        case 3:
            mostrar3($colores);
            break;
        case 5:
            mostrar5($colores);
            break;
        case 'todos':
            mostrarTodos($colores, $contadorColores);
            break;
    }


    function mostrar1($colores){
        echo "<h2> Mostrando 1 solo elemento </h2>";
        for($i=0; $i < 1; $i++){
            echo "<li>" .$colores[$i]. "</li>";
        }
    }
    function mostrar3($colores){
        echo "<h2> Mostrando 3 solo elemento </h2>";
        for($i=0; $i < 3; $i++){
            echo "<li>" .$colores[$i]. "</li>";
        }
    }
    function mostrar5($colores){
        echo "<h2> Mostrando 5 solo elemento </h2>";
        for($i=0; $i < 5; $i++){
            echo "<li>" .$colores[$i]. "</li>";
        }
    }
    function mostrarTodos($colores, $contadorColores){
        echo "<h2> Mostrando todos los elementos </h2>";
        for($i=0; $i < $contadorColores; $i++){
            echo "<li>" .$colores[$i]. "</li>";
        }
    }

?>