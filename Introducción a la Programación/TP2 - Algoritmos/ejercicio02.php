<?php
    /* PROGRAMA Promedio */
    /* Calcula y muestra el promedio de tres notas */
    /* INT $notaA, $notaB, $notaC FLOAT $promedio */
    echo "Ingrese la primera nota: ";
    $notaA = trim(fgets(STDIN));
    echo "Ingrese la segunda nota: ";
    $notaB = trim(fgets(STDIN));
    echo "Ingrese la tercer nota: ";
    $notaC = trim(fgets(STDIN));
    $promedio = ( $notaA + $notaB + $notaC ) / 3;
    echo "El promedio es: " . $promedio;
?>