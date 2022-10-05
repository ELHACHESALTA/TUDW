<?php
    /* PROGRAMA Principal */
    /* Calcula y muestra los primeros términos de la sucesión de Fibonacci hasta el número ingresado */
    /* int $num, $termino1, $termino2, $acumulador, $i, $sucesion */
    echo "Ingrese un numero entero mayor a cero: ";
    $num = trim(fgets(STDIN));
    $termino1 = 0;
    $termino2 = 1;
    $acumulador = " ";
    for ($i = 0; $i < $num; $i++) {
        $sucesion = $termino1 + $termino2;
        $acumulador = $acumulador . " " . $sucesion;
        $termino2 = $termino1;
        $termino1 = $sucesion;
    }
    echo $acumulador
?>	