<?php
    /* PROGRAMA IntercambiosDeValores */
    /* Muestra el valor de dos variables, intercambia sus valores y vuelve a mostrar sus valores intercambiados */
    /* INT $variable1, $variable2, $variableIntermedia */
    echo "Ingrese la primer variable: ";
    $variable1 = trim(fgets(STDIN));
    echo "Ingrese la segunda variable: ";
    $variable2 = trim(fgets(STDIN));
    echo "La primer variable es: " . $variable1 . " y la segunda variable es: " . $variable2;
    $variableIntermedia = $variable1 . "\n";
    $variable1 = $variable2;
    $variable2 = $variableIntermedia;
    echo "Luego del intercambio, la primer variable es: " . $variable1 . " y la segunda variable es: " . $variable2;
?>