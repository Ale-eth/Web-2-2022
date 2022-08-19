<?php

 // Arreglos indexados
  $cars = array("Volvo", "BMW", "Toyota");
  // Asignación manual
  $cars[0] = "Volvo";
  $cars[1] = "BMW";
  $cars[2] = "Toyota";

  $count = count($cars);  // 3 (int)


  // Arreglos asociativos
  $edades = array( 
    "juan" => 35, 
    "nico" => 17, 
    "julia" => 23 
  ); 

    Echo ‘<ul>’;
      echo ‘<li>’.$edades["juan"].’</li>’; //imprime 35
      echo ‘<li>’.$edades["julia"].’</li>’; //imprime 23
    Echo ‘</ul>’;

?>
