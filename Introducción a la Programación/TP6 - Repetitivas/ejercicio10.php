<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra la sumatoria de los primeros números naturales hasta el número ingresado. */
    /* int $num, $i, $sumatoria */
    echo "Ingrese un número natural: ";
    $num = trim(fgets(STDIN));
    $num = $num + 1;
    $sumatoria = 0;
    for ($i = 1; $i < $num; $i++) {
        $sumatoria = $sumatoria + $i;
    }
    echo "La sumatoria es: " . $sumatoria;
?>
