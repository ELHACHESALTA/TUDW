<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra la suma de los tres números  */
    /* INT $a, $b, $c, $resultado */

    echo "Ingrese un número: ";
    $a = trim(fgets(STDIN));
    echo "Ingrese un número: ";
    $b = trim(fgets(STDIN));
    echo "Ingrese un número: ";
    $c = trim(fgets(STDIN));
    $resultado = $a + $b + $c;
    echo "El resultado es: " . $resultado;
?>