<?php

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad'])){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];

        echo "<h3> Hola ".$nombre.$apellido. "!";
        echo "Tu edad es ".$edad." años :)";
    }else{
        echo "<h2> Error, alguno de los datos ingresados es invalido </h2>";
    }

?>