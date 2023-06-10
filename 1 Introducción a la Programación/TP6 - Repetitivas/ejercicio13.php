<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra los primeros términos de la sucesión de Fibonacci hasta el número ingresado */
    /* int $num, $termino1, $termino2, $i, $sucesion */
    /* string $acumulador */
    echo "Ingrese un numero entero mayor a cero: ";
    $num = trim(fgets(STDIN));
    $termino1 = 0;
    $termino2 = 1;
    $acumulador = 1;
    for ($i = 1; $i < $num; $i++) {
        $sucesion = $termino1 + $termino2;
        $acumulador = $acumulador . " " . $sucesion;
        $termino1 = $termino2;
        $termino2 = $sucesion;
    }
    echo $acumulador
?>