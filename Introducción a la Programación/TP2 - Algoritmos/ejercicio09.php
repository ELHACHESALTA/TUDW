<?php
    /* PROGRAMA AreaRectangulo */
    /* Calcula y muestra el área de un rectángulo de base y altura dada */
    /* FLOAT $base, $altura, $areaR */
    echo "Ingrese la longitud de la base del rectángulo: ";
    $base = trim(fgets(STDIN));
    echo "Ingrese la longitud de la altura del rectángulo: ";
    $altura = trim(fgets(STDIN));
    $areaR = $base * $altura;
    echo "El área del rectángulo es: " . $areaR;
?>