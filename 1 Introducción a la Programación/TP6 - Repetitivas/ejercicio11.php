<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra la sumatoria de los primeros números naturales impares hasta el número ingresado */
    /* int $num, $sumatoria,  $impar, $i */
    echo "Ingrese un número natural: ";
    $num = trim(fgets(STDIN));
    $sumatoria = 1;
    $impar = 1;
    for ($i = 1; $i < $num; $i++) {
        $impar = $impar + 2;
        $sumatoria = $sumatoria + $impar;
    }
    echo "La sumatoria es: " . $sumatoria;
?>