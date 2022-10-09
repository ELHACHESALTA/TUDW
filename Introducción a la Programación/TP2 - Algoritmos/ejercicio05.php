<?php
    /* PROGRAMA PorcentajeAumento */
    /* Calcula y muestra el porcentaje a aumentar para obtener el sueldo deseado a partir de un sueldo inicial */
    /* FLOAT $sueldoI, $sueldoD, $porcentajeAumento */
    echo "Ingrese el sueldo inicial: ";
    $sueldoI = trim(fgets(STDIN));
    echo "Ingrese el sueldo deseado: ";
    $sueldoD = trim(fgets(STDIN));
    $porcentajeAumento = ( ( $sueldoD - $sueldoI ) / $sueldoI ) * 100;
    echo "El porcentaje de aumento que debería aplicarse es de: " . $porcentajeAumento . "%";
?>