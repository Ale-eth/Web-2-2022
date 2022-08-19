<?php

    if(isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['edad'])){

        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];

        echo "<h3> Hola ".$nombre.$apellido. "!";
        echo "Tu edad es ".$edad." años :)";
    }else{
        echo "<h2> Error, alguno de los datos ingresados es invalido </h2>";
    }

?>