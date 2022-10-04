<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra la sumatoria de los primeros números naturales impares hasta el número ingresado */
    /* int $num, $sumatoria, $i */
    echo "Ingrese un número natural: ";
    $num = trim(fgets(STDIN));
    $num = $num + 1;
    $sumatoria = 0;
    for ($i = 1; $i < $num; $i=$i + 2) {
        $sumatoria = $sumatoria + $i;
    }
    echo "La sumatoria es: " . $sumatoria;
?>
