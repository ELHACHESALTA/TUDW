<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra el cuadrado de un número */
    /* INT $unNro, $cuadrado */
    echo "Ingrese un número: ";
    $unNro = trim(fgets(STDIN));
    $cuadrado = $unNro * $unNro;
    echo "El cuadrado de " . $unNro . " es: " . $cuadrado;
?>