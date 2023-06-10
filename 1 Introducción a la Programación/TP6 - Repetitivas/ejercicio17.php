<?php
    /* PROGRAMA Principal */
    /* Comprueba y muestra la cantidad de vocales a partir de una secuencia de letras */
    /* string $letra */
    /* int $vocales */
    $vocales = 0;
    do {
        echo "Ingrese letra (- para finalizar): ";
        $letra = trim(fgets(STDIN));
        if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
            $vocales = $vocales + 1;
        }
    } while ($letra <> "-");
    echo "Cant. de vocales: " . $vocales;
?>