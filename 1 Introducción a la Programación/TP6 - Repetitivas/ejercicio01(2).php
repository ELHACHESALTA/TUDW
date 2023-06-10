<?php
    /* PROGRAMA Principal */
    /* Muestra en pantalla los números pares menores o iguales al número ingresado */
    /* int $numero, $par */
    echo "Ingrese un número: ";
    $numero = trim(fgets(STDIN));
    $par = 2;
    while ($par <= $numero) {
        echo $par . "\n";
        $par = $par + 2;
    }
    echo "FIN";
?>