<?php

// Include, require y require_once

include 'file_name.php'     // Incluye el archivo especificado. Se pueden usar sus funciones y variables globales. Si hay un error con el archivo solo emitira una advertencia

require 'file_name.php'     // Es igual a include excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. 

require_once 'file_name.php'  // Es idéntica a require salvo que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye de nuevo.



  
  
 // Formularios HTML
 // Son la forma mas comun de interactuar cliente-servidor. Se hace por medio del protocolo HTTP
  
    <form action="login.php" mehtod="POST">       // El atributo action define la ubicación (URL) del archivo php donde se enviaran los datos
      <input type="text" name="username">         // El atributo method define con qué método HTTP se envían los datos (generalmente get o post)
      <input type="text" name="password">         // El atributo name identificará, en el lado servidor, a los datos ingresados por el usuario en el control. Se envia siempre un par clave/valor por cada elemento
    
      <button type="submit"> Log-in </button>     // El formulario debe tener al menos un elemento type=”submit” que enviará el formulario entero a la url correspondiente.
    </form>                                 


  
  
  // Metodos HTTP
  
    // Metodo GET
    <form method="GET"> // El método GET envía la información codificada del usuario en HTTP request, directamente en la URL.
                        // localhost/index.php?variable1=valor1&variable2=valor2&...
  
    // Metodo POST
    <form method="POST"> // Con el método HTTP POST también se codifica la información, pero ésta se envía a través del body del HTTP Request,
                        // por lo que no aparece en la URL.

                        // localhost/index.php?variable1=valor1&variable2=valor2&...
  
    // Acceder a estos metodos
    	$_GET se usa para recuperar datos enviados por GET
      // Formulario
        <form action="ejemploget.php" method="get">         
          <input type="text" name="nombre" />
          <input type="text" name="edad" />
          <input type="submit"> 
        </form>
      // GET php
            if(isset($_GET['nombre'])) { 
                $usuario = $_GET['nombre'];
            $edad = $_GET['edad']; 
                echo "<p>Usuario: " . $usuario . "</p>";
            echo "<p>Edad: " . $edad . "</p>"; 
            } 

	    $_POST se usa para recuperar datos enviados por POST
      // Formulario
        <form action="ejemplopost.php" method="post">         
          <input type="text" name="nombre" />
          <input type="text" name="edad" />
          <input type="submit"> 
        </form>
      // POST php
            if(isset($_POST['nombre'])) { 
                $usuario = $_POST['nombre'];
            $edad = $_POST['edad']; 
                echo "<p>Usuario: " . $usuario . "</p>";
            echo "<p>Edad: " . $edad . "</p>"; 
            } 




?>
