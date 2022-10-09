<?php
    /* PROGRAMA ProcentajeDe */
    /* Calcula y muestra el porcentaje que representa un número de otro*/
    /* INT $numero1, $numero2, $porcentajeDe */
    echo "Ingrese el primer número: ";
    $numero1 = trim(fgets(STDIN));
    echo "Ingrese el segundo número: ";
    $numero2 = trim(fgets(STDIN));
    $porcentajeDe = $numero1 / ( $numero2 / 100 );
    echo "El porcentaje que representa " . $numero1 . " de " . $numero2 . " es " . $porcentajeDe . "%"; 
?>