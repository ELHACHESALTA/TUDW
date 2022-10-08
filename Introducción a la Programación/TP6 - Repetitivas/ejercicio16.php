<?php
    /* PROGRAMA formaOraciones */
    /* Forma oraciones según las palabras ingresadas por el usuario */
    /* string $palabra, $acumuladorPalabras */
    $acumuladorPalabras = "";
    do {
        echo "Ingrese palabra (. para finalizar): ";
        $palabra = trim(fgets(STDIN));
        $acumuladorPalabras = $acumuladorPalabras . " " . $palabra;
    } while ($palabra <> ".");
    echo $acumuladorPalabras;
?>