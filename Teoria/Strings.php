<?php
  // Concatenar strings
  .   → concatena strings
  .=  → concatena strings al final 
    
    
    $bar = "Mundo";  
    $foo = "Hola " . $bar;  
    $foo .= "!";  
    echo $foo; //outputs Hola Mundo!

    // Funciones de strings
      // Cuenta caracteres de un string
      echo strlen("Hello world!"); // outputs 12 

      // Cuenta palabras dentro de un string
      echo str_word_count("Hello world!"); // outputs 2 

      // Devuelve el string invertido
      echo strrev("Hello world!"); // outputs !dlrow olleH 

      // Devuelve en que posicion empieza la palabra buscada
      echo strpos("Hello world!", "world"); // outputs 6 

      // Reemplaza una palabra dentro de un string
      echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly! 

?>
