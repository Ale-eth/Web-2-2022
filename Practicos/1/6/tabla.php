<?php

    if(isset($_GET['primero']) && $_GET['primero']>0  &&  isset($_GET['segundo']) && $_GET['segundo']>0){
        $primero = $_GET['primero'];
        $segundo = $_GET['segundo'];
    }

    crearTabla($primero,$segundo);

    function crearTabla($primero,$segundo){
        echo "<table>";
        for($fila = 1; $fila<=$primero; $fila++){
            echo "<tr>";
            for($col = 1; $col<=$segundo; $col++){
                echo "<td>" .$fila*$col. "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>