<?php
    /* PROGRAMA RestoDivision */
    /* Muestra el resto a partir de la división de dos números */
    /* INT $a, $b, $resto */
    echo "Ingrese el primer número: ";
    $a = trim(fgets(STDIN));
    echo "Ingrese el segundo número: ";
    $b = trim(fgets(STDIN));
    $resto = $a - ( $b * ( ( int ) ( $a / $b ) ) );
    echo "El resto de dividir " . $a . " en " . $b . " es " . $resto;
?>