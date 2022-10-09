<?php
    /* PROGRAMA Edad */
    /* Calcula y muestra la edad a partir del año de nacimiento */
    /* INT $anioNac, $anioAct, $edad */
    echo "Ingrese el año de nacimiento: ";
    $anioNac = trim(fgets(STDIN));
    echo "Ingrese el año actual: ";
    $anioAct = trim(fgets(STDIN));
    $edad = $anioAct - $anioNac;
    echo "La edad es de: " . $edad . " años";
?>