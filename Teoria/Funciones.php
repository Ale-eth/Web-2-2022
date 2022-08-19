<?php

//Calcular el promedio de los valores de un arreglo

  function promedioEdad($edades){ 
    $promedio = array_sum($edades) / count($edades);
     return $promedio;
  } 

?>
