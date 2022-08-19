<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <ul>
        <?php
            $colores = array("Rojo", "Azul", "Verde", "Amarillo");
            $contadorColores = count($colores);
            
            for($i=0; $i < $contadorColores; $i++){
                echo "<li>" .$colores[$i]. "</li>";
            }
        ?>
        <ul>
</body>
</html>
