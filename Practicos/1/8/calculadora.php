<?php 
if(isset($_GET['primer']) && isset($_GET['segundo'])){
    $primer = $_GET['primer'];
    $segundo = $_GET['segundo'];
    $operacion = $_GET['operacion'];
}

switch($operacion){
    case '+':
        sumar($primer,$segundo,$operacion);
        break;
    case '-':
        restar($primer,$segundo,$operacion);
        break;
    case '/':
        dividir($primer,$segundo,$operacion);
        break;
    case '*':
        multiplicar($primer,$segundo,$operacion);
        break;
    }   


function sumar($primero,$segundo,$operacion){
    echo $primero." ".$operacion." ".$segundo." = ". $primero+$segundo;
}
function restar($primero,$segundo,$operacion){
    echo $primero." ".$operacion." ".$segundo." = ". $primero-$segundo;
}
function dividir($primero,$segundo,$operacion){
    echo $primero." ".$operacion." ".$segundo." = ". $primero/$segundo;
}
function multiplicar($primero,$segundo,$operacion){
    echo $primero." ".$operacion." ".$segundo." = ". $primero*$segundo;
}
?>