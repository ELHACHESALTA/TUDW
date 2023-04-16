<?php
    include 'ejercicio10a - calculadora.php';
    $resultado = 0;

    $casio = new Calculadora();
    $casio -> setNum1 (2);
    $casio -> setNum2 (3);
    $casio -> setOperacion("*");

    $resultado = $casio -> operacionCalculadora();

    echo $resultado . "\n";
    echo $casio . "\n";

?>