<?php
    include 'ejercicio10a_Calculadora.php';

    $casio = new Calculadora(2, 3, "*");

    $resultado = $casio -> operacionCalculadora();

    echo $resultado . "\n";
    echo $casio . "\n";

?>