<?php
    /* PROGRAMA Principal */
    /* Muestra en pantalla los números enteros positivos menores al número ingresado */
    /* int $numero, $i */
    echo "Ingrese un número: ";
    $numero = trim(fgets(STDIN));
    for ($i = 0; $i < $numero; $i++) {
        echo $i . "\n";
    }
    echo "FIN";
?>