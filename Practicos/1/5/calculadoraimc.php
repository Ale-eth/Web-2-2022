<?php

    if(isset($_GET['peso']) && $_GET['peso']>0 && isset($_GET['altura']) && $_GET['altura']>0){
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        calcularIMC($peso, $altura);
    }


    function calcularIMC($peso, $altura){
        $IMC = $peso/($altura*$altura);
        estadoIMC($IMC, $peso);
    }
    function estadoIMC($IMC, $peso){
       if($IMC<18.5){
            echo "<h2> Tu peso: " .$peso. " kgs segun IMC: Bajo peso (<18,50)";
       }else if($IMC>18.5 && $IMC<24.99){
            echo "<h2> Tu peso: " .$peso. " kgs segun IMC: Peso normal (18,50 - 24,99)";
       }else if($IMC>=25){
            echo "<h2> Tu peso: " .$peso. " kgs segun IMC: Sobrepeso (>= 25)";
       }else if($IMC>=30){
            echo "<h2> Tu peso: " .$peso. " kgs segun IMC: Obesidad (>= 30)";
       }
    }
?>