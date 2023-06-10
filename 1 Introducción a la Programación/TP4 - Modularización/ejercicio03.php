<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra el resultado del cálculo de dos números enteros M y N */
    /*  Int $numeroM, $numeroN Float calculo*/
    echo "Ingrese el número M: ";
    $numeroM = trim(fgets(STDIN));
    echo "Ingrese el número M: ";
    $numeroN = trim(fgets(STDIN));
    $calculo = pow($numeroM, $numeroN) + sqrt(abs($numeroM));
    echo "M elevado a la N más la raíz cuadrada del valor absoluto de M es igual a " . $calculo;
?>