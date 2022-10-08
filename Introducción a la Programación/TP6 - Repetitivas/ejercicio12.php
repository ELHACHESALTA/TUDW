<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra una sumatoria a partir de un número ingresado y conforme a una secuencia interna */
    /* int $numero, $numerador, $denominador, $i */
    /* float $sumatoria */
    echo "Ingrese un numero entero: ";
    $numero = trim(fgets(STDIN));
    $numerador = 2;
    $denominador = 1;
    $sumatoria = 0;
    for ($i = 0; $i < $numero; $i++) {
        $sumatoria = $sumatoria + ($numerador / $denominador);
        $numerador = $numerador + $denominador;
        $denominador = $numerador - $denominador;
    }
    echo "La sumatoria es: " . $sumatoria;
?>