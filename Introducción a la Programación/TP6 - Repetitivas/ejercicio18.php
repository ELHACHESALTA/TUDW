<?php
    /* PROGRAMA formaOraciones */
    /* Forma oraciones en orden inverso según las palabras ingresadas por el usuario */
    /* string $palabra, $acumuladorPalabras */
    $acumuladorPalabras = "";
    do {
        echo "Ingrese palabra (. para finalizar): ";
        $palabra = trim(fgets(STDIN));
        $acumuladorPalabras = $palabra . " " . $acumuladorPalabras;
    } while ($palabra <> ".");
    echo $acumuladorPalabras
?>