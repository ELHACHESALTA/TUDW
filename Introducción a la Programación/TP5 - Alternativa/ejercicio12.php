<?php
    /* PROGRAMA Principial */
    /* Muestra el número en la cara opuesta del dado al número ingresado */
    /* int $num */
    echo "Introduzca número del dado: ";
    $num = trim(fgets(STDIN));
    if ($num == 1) {
        echo "En la cara opuesta está el 6";
    } elseif ($num == 2) {
        echo "En la cara opuesta está el 5";
    } elseif ($num == 3) {
        echo "En la cara opuesta está el 4";
    } elseif ($num == 4) {
        echo "En la cara opuesta está el 3";
    } elseif ($num == 5) {
        echo "En la cara opuesta está el 2";
    } elseif ($num == 6) {
        echo "En la cara opuesta está el 1";
    } else {
        echo "ERROR! número incorrecto";
    }
?>