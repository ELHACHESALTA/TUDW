<?php
    /* PROGRAMA Principal */
    /* Lee una secuencia de palabras y la muestra junto a el número en que está posicionada */
    /* int $cantPalabras, $i */
    /* string $palabra */
    echo "¿Cuantas palabras desea ingresar? ";
    $cantPalabras = trim(fgets(STDIN));
    for ($i = 1; $i <= $cantPalabras; $i++) {
        echo "Ingrese palabra: ";
        $palabra = trim(fgets(STDIN));
        echo "Su palabra número " . $i . ":    " . $palabra . "\n";
    }
?>